<?php
/**
* glFusion CMS
*
* @license GNU General Public License version 2 or later
*     http://www.opensource.org/licenses/gpl-license.php
*
*  Copyright (C) 2014-2015 by Mark R. Evans - mark AT glfusion DOT org
*/

require_once '../lib-common.php';

if (is_ajax()) {
    if (isset($_POST["action"]) && !empty($_POST["action"])) {
        $action = $_POST["action"];
        switch ( $action ) {
            case "test":
                test_function();
                break;
            case 'blocktoggle' :
                block_toggle();
                break;
            case 'menu-element-toggle' :
                menu_element_toggle();
                break;
            case 'menu-toggle' :
                menu_toggle();
                break;
            case 'sp-toggle' :
                $enabledstaticpages = array();
                if (isset($_POST['enabledstaticpages'])) {
                    $enabledstaticpages = $_POST['enabledstaticpages'];
                }
                $sp_idarray = array();
                if ( isset($_POST['sp_idarray']) ) {
                    $sp_idarray = $_POST['sp_idarray'];
                }
                SP_toggleStatus($enabledstaticpages,$sp_idarray);
                break;
        }
    } else {
        die();
    }
}

/*
 * Determine if a valid ajax request
 */
function is_ajax() {
    return isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest';
}

/**
* Enable and Disable block
*/
function block_toggle() {
    global $_CONF, $_TABLES;

    // Make sure user has rights to access this page
    if (!SEC_hasRights ('block.edit')) {
        die();
    }
    if ( !_sec_checkToken(1) ) {
        $retval['statusMessage'] = 'Invalid security token. Please refresh the page.';
        $retval['errorCode'] = 1;
    } else {
        $side = COM_applyFilter($_POST['blockenabler'], true);
        $enabledblocks = array();
        if (isset($_POST['enabledblocks'])) {
            $enabledblocks = $_POST['enabledblocks'];
        }
        $bidarray = array();
        if ( isset($_POST['bidarray']) ) {
            $bidarray = $_POST['bidarray'];
        }
        if (isset($bidarray) ) {
            foreach ($bidarray AS $bid => $side ) {
                $bid = (int) $bid;
                $side = (int) $side;
                if ( isset($enabledblocks[$bid]) ) {
                    $sql = "UPDATE {$_TABLES['blocks']} SET is_enabled = '1' WHERE bid=$bid AND onleft=$side";
                    DB_query($sql);
                } else {
                    $sql = "UPDATE {$_TABLES['blocks']} SET is_enabled = '0' WHERE bid=$bid AND onleft=$side";
                    DB_query($sql);
                }
            }
        }
        $retval['statusMessage'] = 'Block state has been toggled.';
        $retval['errorCode'] = 0;
    }
    $return["json"] = json_encode($retval);
    echo json_encode($return);
}

function menu_element_toggle()
{
    global $_CONF, $_TABLES;

    if (!SEC_hasRights('menu.admin')) die();

    $retval = array();

    MB_changeActiveStatusElement ($_POST['enableditem']);
    $retval['statusMessage'] = 'Menu Element state has been toggled.';
    $retval['errorCode'] = 0;

    $return["json"] = json_encode($retval);
    echo json_encode($return);
}

function menu_toggle()
{
    global $_CONF, $_TABLES;

    if (!SEC_hasRights('menu.admin')) die();

    $retval = array();

    MB_changeActiveStatusMenu ($_POST['enabledmenu']);
    $retval['statusMessage'] = 'Menu state has been toggled.';
    $retval['errorCode'] = 0;

    $return["json"] = json_encode($retval);
    echo json_encode($return);
}


function SP_toggleStatus($enabledstaticpages, $sp_idarray)
{
    global $_TABLES, $_DB_table_prefix;

    if ( !_sec_checkToken(1) ) {
        $retval['statusMessage'] = 'Invalid security token. Please refresh the page.';
        $retval['errorCode'] = 1;
    } else {
        if (isset($sp_idarray) && is_array($sp_idarray) ) {
            foreach ($sp_idarray AS $sp_id => $junk ) {
                $sp_id = COM_applyFilter($sp_id);
                if (isset($enabledstaticpages[$sp_id])) {
                    DB_query ("UPDATE {$_TABLES['staticpage']} SET sp_status = '1' WHERE sp_id = '".DB_escapeString($sp_id)."'");
                } else {
                    DB_query ("UPDATE {$_TABLES['staticpage']} SET sp_status = '0' WHERE sp_id = '".DB_escapeString($sp_id)."'");
                }
            }
        }
        PLG_itemSaved($sp_id,'staticpages');
        CTL_clearCache();
        $retval['statusMessage'] = 'StaticPage state has been toggled.';
        $retval['errorCode'] = 0;

        $return["json"] = json_encode($retval);
        echo json_encode($return);
    }
}


/*
 * Test function - used for debugging
 */
function test_function(){

    if (!SEC_inGroup('Root')) {
        COM_accessLog ("Non root user attempted to access ajax controller");
        die();
    }

  $return = $_POST;

  $return["json"] = json_encode($return);
  echo json_encode($return);
}
?>