<?php
// +--------------------------------------------------------------------------+
// | glFusion CMS                                                             |
// +--------------------------------------------------------------------------+
// | index.php                                                                |
// |                                                                          |
// | glFusion Installation                                                    |
// +--------------------------------------------------------------------------+
// | $Id::                                                                   $|
// +--------------------------------------------------------------------------+
// | Copyright (C) 2008-2009 by the following authors:                        |
// |                                                                          |
// | Mark R. Evans          mark AT glfusion DOT org                          |
// | Eric Warren            eric AT glfusion DOT org                          |
// |                                                                          |
// | Based on the Geeklog CMS                                                 |
// | Copyright (C) 2007-2008 by the following authors:                        |
// |                                                                          |
// | Authors: Aaron Blankstein  - kantai AT gmail DOT com                     |
// +--------------------------------------------------------------------------+
// |                                                                          |
// | This program is free software; you can redistribute it and/or            |
// | modify it under the terms of the GNU General Public License              |
// | as published by the Free Software Foundation; either version 2           |
// | of the License, or (at your option) any later version.                   |
// |                                                                          |
// | This program is distributed in the hope that it will be useful,          |
// | but WITHOUT ANY WARRANTY; without even the implied warranty of           |
// | MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the            |
// | GNU General Public License for more details.                             |
// |                                                                          |
// | You should have received a copy of the GNU General Public License        |
// | along with this program; if not, write to the Free Software Foundation,  |
// | Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA.          |
// |                                                                          |
// +--------------------------------------------------------------------------+
error_reporting( E_ALL );
//error_reporting( E_ERROR | E_WARNING | E_PARSE | E_COMPILE_ERROR );

if (!defined('GVERSION')) {
    define('GVERSION', '1.2.0.svn');
}

define('SESSION_EXPIRED',           1);
define('SITECONFIG_EXISTS',         2);
define('SITECONFIG_NOT_WRITABLE',   3);
define('SITECONFIG_NOT_FOUND',      4);
define('DBCONFIG_NOT_WRITABLE',     5);
define('DBCONFIG_NOT_FOUND',        6);
define('DB_DATA_MISSING',           7);
define('DB_NO_CONNECT',             8);
define('DB_NO_DATABASE',            9);
define('DB_NO_INNODB',             10);
define('DB_EXISTS',                11);
define('SITE_DATA_MISSING',        12);
define('SITE_DATA_ERROR',          13);
define('LIBCUSTOM_NOT_WRITABLE',   14);
define('CORE_UPGRADE_ERROR',       15);
define('PLUGIN_UPGRADE_ERROR',     16);
define('INVALID_GEEKLOG_VERSION',  17);
define('NO_MIGRATE_GLFUSION',      18);

require_once 'include/install.lib.php';
require_once 'include/template-lite.class.php';

if( function_exists('set_error_handler') )
{
    if( PHP_VERSION >= 5 ) {
        /* Tell the error handler to use the default error reporting options.
         * you may like to change this to use it in more/less cases, if so,
         * just use the syntax used in the call to error_reporting() above.
         */
        $defaultErrorHandler = set_error_handler('INST_handleError', error_reporting());
    } else {
        $defaultErrorHandler = set_error_handler('INST_handleError');
    }
}


$_GLFUSION = array();

$glFusionVars = array('language','method','migrate','expire','dbconfig_path','log_path','lang_path','backup_path','data_path','db_type','innodb','db_host','db_name','db_user','db_pass','db_prefix','site_name','site_slogan','site_url','site_admin_url','site_mail','noreply_mail','utf8');

if ( is_array($_POST) ) {
    foreach ($_POST AS $name => $value) {
        if ( in_array($name,$glFusionVars)) {
            $_GLFUSION[$name] = INST_stripslashes($value);
        }
    }
}


/**
 * Error Handler - attempt to trap certain errors
 *
 * will set the global $_GLFUSION['errstr'] with the error text
 *
 * @return  nothing
 *
 */
function INST_handleError($errno, $errstr, $errfile='', $errline=0, $errcontext='')
{
    global $_GLFUSION;

    $_GLFUSION['errstr'] = $errstr;

    return;
}

/**
 * Builds hidden inputs for all session data
 *
 * @return  string          HTML
 *
 */
function _buildHiddenFields()
{
    global $_GLFUSION;

    $hiddenFields = '';

    if ( is_array($_GLFUSION) ) {
        foreach ($_GLFUSION AS $name => $value) {
            $hiddenFields .= '<input type="hidden" name="'.$name.'" value="'.$value.'" />'.LB;
        }
    }
    return $hiddenFields;
}


/**
 * Builds the progress bar
 *
 * @return  string          HTML
 *
 */
function _buildProgressBar($currentStep)
{
    global $_GLFUSION, $LANG_INSTALL;

    $installSteps = array('languagetask'        => $LANG_INSTALL['language_task'],
                          'pathsetting'         => $LANG_INSTALL['path_settings'],
                          'checkenvironment'    => $LANG_INSTALL['env_check'],
                          'getsiteinformation'  => $LANG_INSTALL['site_info'],
                          'contentplugins'      => $LANG_INSTALL['content_plugins']);

    $upgradeSteps = array('languagetask'        => $LANG_INSTALL['language_task'],
                          'checkenvironment'    => $LANG_INSTALL['env_check'],
                          'upgrade'             => $LANG_INSTALL['perform_upgrade'],
                          );
    $retval = '';
    $first  = 0;
    $found  = 0;

    $retval  = '<div class="steplist floatleft">' . LB;
    $retval .= '<span class="steplist-top"></span>' . LB;
    $retval .= '<div class="steplist-content">' . LB;
    $retval .= '<ul>' . LB;
    $retval .= '<li>' . LB;
    if ( $_GLFUSION['method'] == 'install' )  {
        $retval .= '<span class="b larger">'.$LANG_INSTALL['install_steps'].'</span>' . LB;
    } else {
        $retval .= '<span class="b larger">'.$LANG_INSTALL['upgrade_steps'].'</span>' . LB;
    }
    $retval .= '</li>' . LB;

    switch ($_GLFUSION['method']) {
        case 'install' :
            foreach ($installSteps AS $step => $desc) {
                if ( $step == $currentStep ) {
                    $found++;
                    $retval .= '<li class="current">'.$desc.'</li>';
                } else {
                    if ( $found ) {
                        $retval .= '<li>'.$desc.'</li>';
                    } else {
                        $retval .= '<li class="complete">'.$desc.'</li>';
                    }
                }
            }
            break;
        case 'upgrade' :
            foreach ($upgradeSteps AS $step => $desc) {
                if ( $step == $currentStep ) {
                    $found++;
                    $retval .= '<li class="current">'.$desc.'</li>';
                } else {
                    if ( $found ) {
                        $retval .= '<li>'.$desc.'</li>';
                    } else {
                        $retval .= '<li class="complete">'.$desc.'</li>';
                    }
                }
            }
            break;
    }
    $retval .= '</ul>' . LB;
    $retval .= '<div class="steplist-help"><span><a href="http://www.glfusion.org/wiki/doku.php?id=glfusion:install:'.$currentStep.'" target="_blank"><img src="layout/help.png"  alt="'.$LANG_INSTALL['online_install_help'].'" title="'.$LANG_INSTALL['online_install_help'].'" /></a></span>'.$LANG_INSTALL['online_help_text'].'</div>' . LB;
    $retval .= '</div><div class="steplist-bottom"></div></div>' . LB;

    return $retval;
}


/**
 * Checks to see if the session has timed out.
 *
 * @return  bool          0 - session is OK
 *
 */
function _checkSession()
{
    global $_GLFUSION;

    if ( !isset($_GLFUSION['expire']) ) {
        return _displayError(SESSION_EXPIRED,'');
    }

    if ($_GLFUSION['expire'] < time()  ) {
        return _displayError(SESSION_EXPIRED,'');
    }

    $_GLFUSION['expire'] = time() + 1800;

    return intval(0);
}


/**
 * Displays error text
 *
 * @return  string          HTML
 *
 */
function _displayError($error,$step,$errorText='')
{
    global $_GLFUSION, $LANG_INSTALL;

    $T = new TemplateLite('templates/');
    $T->set_file('page', 'error.thtml');

    $T->set_var('title',$LANG_INSTALL['error']);
    $T->set_var('lang_prev',$LANG_INSTALL['previous']);
    switch ($error) {
        case SESSION_EXPIRED :
            $T->set_var('text',$LANG_INSTALL['session_error']);
            break;
        case SITECONFIG_EXISTS :
            $T->set_var('text',$LANG_INSTALL['siteconfig_exists']);
            break;
        case SITECONFIG_NOT_WRITABLE :
            $T->set_var('text',$LANG_INSTALL['siteconfig_not_writable']);
            break;
        case SITECONFIG_NOT_FOUND :
            $T->set_var('text',$LANG_INSTALL['siteconfig_not_found']);
            break;
        case DBCONFIG_NOT_WRITABLE :
            $T->set_var('text',$LANG_INSTALL['dbconfig_not_writable']);
            break;
        case DBCONFIG_NOT_FOUND :
            $T->set_var('text',$LANG_INSTALL['dbconfig_not_found']);
            break;
        case DB_DATA_MISSING :
            $T->set_var('text',$LANG_INSTALL['missing_db_fields'].'<br /><br /><br />'.$errorText);
            break;
        case DB_NO_CONNECT :
            $T->set_var('text',$LANG_INSTALL['no_db_connect']);
            break;
        case DB_NO_DATABASE :
            $T->set_var('text',$LANG_INSTALL['no_db']);
            break;
        case DB_NO_INNODB :
            $T->set_var('text',$LANG_INSTALL['no_innodb_support']);
            break;
        case SITE_DATA_MISSING :
            $T->set_var('text',$LANG_INSTALL['sitedata_missing'].'<br /><br /><br />'.$errorText);
            break;
        case SITE_DATA_ERROR :
            $T->set_var('text',$LANG_INSTALL['sitedata_missing'].'<br /><br /><br />'.$errorText);
            break;
        case LIBCUSTOM_NOT_WRITABLE :
            $T->set_var('text',$LANG_INSTALL['libcustom_not_writable']);
            break;
        case CORE_UPGRADE_ERROR :
            $T->set_var('text',$LANG_INSTALL['core_upgrade_error'].'<br /><br /><br />'.$errorText);
            break;
        case PLUGIN_UPGRADE_ERROR :
            $T->set_var('text',$LANG_INSTALL['plugin_upgrade_error_desc'].'<br /><br /><br />'.$errorText);
            break;
        case INVALID_GEEKLOG_VERSION :
            $T->set_var('text',$LANG_INSTALL['invalid_geeklog_version']);
            break;
        case DB_EXISTS :
            $T->set_var('text',$LANG_INSTALL['database_exists']);
            break;
        case NO_MIGRATE_GLFUSION :
            $T->set_var('text',$LANG_INSTALL['no_migrate_glfusion']);
            break;
        default :
            $T->set_var('text',$errorText);
            break;
    }
    $T->set_var('step',$step);
    $T->set_var('hiddenfields',_buildHiddenFields());
    $T->set_var('lang_online_install_help',$LANG_INSTALL['online_install_help']);

    $T->parse('output','page');
    return $T->finish($T->get_var('output'));
}


/**
 * Display initial welcome screen.
 *
 * Determine what language to use and what task to perform, i.e.;
 * New Installation, Upgrade, or Migrate a site.
 *
 * @return  string          HTML
 *
 */
function INST_getLanguageTask( )
{
    global $_GLFUSION, $LANG_INSTALL;

    // set the session expire time.
    $_GLFUSION['expire'] = time() + 1800;

    $_GLFUSION['currentstep'] = 'languagetask';

    if ( isset($_GLFUSION['language']) ) {
        $language = $_GLFUSION['language'];
    } else {
        $language = 'english';
    }

    $retval = '';

    $T = new TemplateLite('templates/');
    $T->set_file('page', 'languagetask.thtml');

    // create language select
    $lang_select = '<select name="lang" style="width:200px;" onchange="reload(this.form)">' . LB;
    foreach (glob('language/*.php') as $filename) {
        $filename = preg_replace('/.php/', '', preg_replace('/language\//', '', $filename));
        $lang_select .= '<option value="' . $filename . '"' . (($filename == $language) ? ' selected="selected"' : '') . '>' . INST_prettifyLanguageName($filename) . '</option>' . LB;
    }
    $lang_select .= '</select>';

    $prevAction = '';
    $nextAction = 'pathsetting';

    $T->set_var(array(
        'language_select'       => $lang_select,
        'nextaction'            => $nextAction,
        'prevaction'            => $prevAction,
        'step_heading'          => $LANG_INSTALL['install_heading'],
        'lang_welcome'          => $LANG_INSTALL['welcome_help'],
        'lang_select_language'  => $LANG_INSTALL['language'],
        'lang_next'             => $LANG_INSTALL['next'],
        'lang_prev'             => $LANG_INSTALL['previous'],
        'lang_select_task'      => $LANG_INSTALL['select_task'],
        'lang_new_install'      => $LANG_INSTALL['new_install'],
        'lang_site_upgrade'     => $LANG_INSTALL['site_upgrade'],
        'lang_geeklog_migrate'  => $LANG_INSTALL['geeklog_migrate'],
        'lang_proceed'          => $LANG_INSTALL['proceed'],
        'lang_language_support' => $LANG_INSTALL['language_support'],
        'lang_language_pack'    => $LANG_INSTALL['language_pack'],
        'hiddenfields'          => _buildHiddenFields(),
    ));

    $T->parse('output','page');

    $retval =  $T->finish($T->get_var('output'));

    return $retval;
}


/**
 * Retrieve path to private/ directory
 *
 * Prompt the user to enter (or verify) the path to the system
 * private directory.
 *
 * @return  string          HTML form for path entry
 *
 */
function INST_getPathSetting()
{
    global $_GLFUSION, $LANG_INSTALL;

    if ( ($rc = _checkSession() ) !== 0 ) {
        return $rc;
    }

    $_GLFUSION['currentstep'] = 'pathsetting';

    if ( isset($_GLFUSION['method']) && $_GLFUSION['method'] == 'install' ) {
        // if it isn't there, ask again...
        if ( @file_exists('../../siteconfig.php') ) {
            return _displayError(SITECONFIG_EXISTS,'');
        }
    }

    $fusion_path    = strtr(__FILE__, '\\', '/'); // replace all '\' with '/'
    for ($i = 0; $i < 4; $i++) {
        $remains = strrchr($fusion_path, '/');
        if ($remains === false) {
            break;
        } else {
            $fusion_path = substr($fusion_path, 0, -strlen($remains));
        }
    }

    if (!preg_match('/^.*\/$/', $fusion_path)) {
        $fusion_path .= '/';
    }

    $dbconfig_path = $fusion_path;

    // check the session to see if we have already defined the path...
    if ( isset($_GLFUSION['dbconfig_path']) ) {
        $dbconfig_path = $_GLFUSION['dbconfig_path'];
    }
    $dbconfig_file  = 'db-config.php';

    $htmlpath = INST_getHtmlPath();

    $T = new TemplateLite('templates/');
    $T->set_file('page', 'pathsetting.thtml');


    if (@file_exists($dbconfig_path . $dbconfig_file) || @file_exists($dbconfig_path . 'public_html/' . $dbconfig_file) || @file_exists($dbconfig_path.'private/'.$dbconfig_file)
    || @file_exists($dbconfig_path . $dbconfig_file.'.dist') || @file_exists($dbconfig_path . 'public_html/' . $dbconfig_file.'.dist') || @file_exists($dbconfig_path.'private/'.$dbconfig_file.'.dist')
    ) {
        if ( @file_exists($dbconfig_path . 'public_html/' . $dbconfig_file)  || @file_exists($dbconfig_path . 'public_html/' . $dbconfig_file.'.dist')) {
            $dbconfig_path   = $dbconfig_path.'public_html/';
        } else if ( @file_exists($dbconfig_path.'private/'.$dbconfig_file) || @file_exists($dbconfig_path.'private/'.$dbconfig_file.'.dist')) {
            $dbconfig_path   = $dbconfig_path.'private/';
        }
        if ($dbconfig_path != '' ) {
            // found it, set the session
            $_GLFUSION['dbconfig_path'] = $dbconfig_path;
        }
    }
    $T->set_var(array(
        'dbconfig_path'     => $dbconfig_path,
        'log_path'          => isset($_GLFUSION['log_path']) ? $_GLFUSION['log_path'] : '',
        'lang_path'         => isset($_GLFUSION['lang_path']) ? $_GLFUSION['lang_path'] : '',
        'backup_path'       => isset($_GLFUSION['backup_path']) ? $_GLFUSION['backup_path'] : '',
        'data_path'         => isset($_GLFUSION['data_path']) ? $_GLFUSION['data_path'] : '',
        'step_heading'      => $LANG_INSTALL['system_path'],
        'lang_next'         => $LANG_INSTALL['next'],
        'lang_prev'         => $LANG_INSTALL['previous'],
        'lang_sys_path_help'=> sprintf($LANG_INSTALL['system_path_prompt'],$htmlpath),
        'lang_path_prompt'  => $LANG_INSTALL['path_prompt'],
        'lang_advanced_settings' => $LANG_INSTALL['advanced_settings'],
        'lang_log_path'     => $LANG_INSTALL['log_path'],
        'lang_lang_path'    => $LANG_INSTALL['lang_path'],
        'lang_backup_path'  => $LANG_INSTALL['backup_path'],
        'lang_data_path'    => $LANG_INSTALL['data_path'],
        'hiddenfields'      => _buildHiddenFields(),
    ));
    $T->parse('output','page');
    return $T->finish($T->get_var('output'));
}

/*
 * Validate the dbconfig_path
 */

/**
 * Validate private/ directory path.
 *
 * Check to see if db-config.php or db-config.php.dist exist
 * in the specified directory.
 *
 * @note   This will return _displayError() if files not found
 *         or will call INST_checkEnvironment() to validate
 *         directory and file permissions.
 *
 * @return  string          HTML
 *
 */
function INST_gotPathSetting($dbc_path = '')
{
    global $_GLFUSION;

    if ( ($rc = _checkSession() ) !== 0 ) {
        return $rc;
    }

    $_GLFUSION['currentstep'] = 'pathsetting';

    // was it passed from the previous step, or via $_POST?
    if ( $dbc_path == '' ) {
        $dbconfig_path = INST_stripslashes($_POST['private_path']);
    } else {
        $dbconfig_path = $dbc_path;
    }

    // check to see if the path contains the actual filename?
    if (!strstr($dbconfig_path, 'db-config.php')) {
        // If the user did not provide a trailing '/' then add one
        if (!preg_match('/^.*\/$/', $dbconfig_path)) {
            $dbconfig_path .= '/';
        }
    } else {
        $dbconfig_path = str_replace('db-config.php', '', $dbconfig_path);
    }

    // store entered path into the session var
    $_GLFUSION['dbconfig_path'] = $dbconfig_path;

    if ( isset($_POST['logpath']) && $_POST['logpath'] != '') {
        $log_path = INST_stripslashes($_POST['logpath']);
        if (!preg_match('/^.*\/$/', $log_path)) {
            $log_path .= '/';
        }
    } else {
        $log_path = $dbconfig_path .'logs/';
    }
    if ( isset($_POST['langpath']) && $_POST['langpath'] != '') {
        $lang_path = INST_stripslashes($_POST['langpath']);
        if (!preg_match('/^.*\/$/', $lang_path)) {
            $lang_path .= '/';
        }
    } else {
        $lang_path = $dbconfig_path .'language/';
    }
    if ( isset($_POST['backuppath']) && $_POST['backuppath'] != '') {
        $backup_path = INST_stripslashes($_POST['backuppath']);
        if (!preg_match('/^.*\/$/', $backup_path)) {
            $backup_path .= '/';
        }
    } else {
        $backup_path = $dbconfig_path .'backups/';
    }
    if ( isset($_POST['datapath']) && $_POST['datapath'] != '') {
        $data_path = INST_stripslashes($_POST['datapath']);
        if (!preg_match('/^.*\/$/', $data_path)) {
            $data_path .= '/';
        }
    } else {
        $data_path = $dbconfig_path .'data/';
    }

    $_GLFUSION['log_path']      = $log_path;
    $_GLFUSION['lang_path']     = $lang_path;
    $_GLFUSION['backup_path']   = $backup_path;
    $_GLFUSION['data_path']     = $data_path;

    // now, lets see if it exists, if not, try to rename the .dist file...

    if (!@file_exists($dbconfig_path.'db-config.php') ) {
        // see if the .dist is there
        if ( @file_exists($dbconfig_path.'db-config.php.dist') ) {
            // found it, try to rename..
            $rc = @copy($dbconfig_path.'db-config.php.dist',$dbconfig_path.'db-config.php');
            if ( $rc !== true ) {
                return _displayError(DBCONFIG_NOT_WRITABLE,'pathsetting');
            }
        } else {
            return _displayError(DBCONFIG_NOT_FOUND,'pathsetting');
        }
    }

    // if it isn't there, ask again...
    if ( !@file_exists($dbconfig_path.'db-config.php') ) {
        return _displayError(DBCONFIG_NOT_FOUND,'pathsetting');
    }
    // found it, but it is read-only...
    if ( !INST_isWritable($dbconfig_path.'db-config.php') ) {
        return _displayError(DBCONFIG_NOT_WRITABLE,'pathsetting');
    }

    // we have a good path to /private, off to the next step...
    return INST_checkEnvironment($dbconfig_path);
}

/**
 * Check PHP settings and path permissions
 *
 * Validates the PHP settings will support glFusion and also
 * checks for proper permissions on the file system.
 *
 * @return  string          HTML screen with environment status
 *
 */
function INST_checkEnvironment($dbconfig_path='')
{
    global $_GLFUSION, $LANG_INSTALL, $_DB, $_DB_host, $_DB_name, $_DB_user,
           $_DB_pass,$_DB_table_prefix,$_DB_dbms, $_TABLES, $_SYSTEM;

    if ( ($rc = _checkSession() ) !== 0 ) {
        return $rc;
    }

    $_GLFUSION['currentstep'] = 'checkenvironment';

    $previousaction = 'pathsetting';

    // was it passed from the previous step
    if ( $dbconfig_path == '') {
        if ( !isset($_GLFUSION['dbconfig_path']) ) {
            return INST_getPathSetting();
        }
        $dbconfig_path = $_GLFUSION['dbconfig_path'];
    }

    $permError = 0;

    $T = new TemplateLite('templates/');
    $T->set_file('page','checkenvironment.thtml');

    $T->set_var('step_heading',$LANG_INSTALL['hosting_env']);

    /*
     * First we will validate the general environment..
     */

    $T->set_block('page','envs','env');

    // PHP Version

    $T->set_var('item',$LANG_INSTALL['php_version']);

    if ( INST_phpOutOfDate() ) {
        $T->set_var('status','<span class="no">'.phpversion().'</span>');
    } else {
        $T->set_var('status','<span class="yes">'.phpversion().'</span>');
    }
    $T->set_var('recommended','4.3.0+');
    $T->set_var('notes',$LANG_INSTALL['php_req_version']);
    $T->parse('env','envs',true);

    $rg = ini_get('register_globals');
    $sm = ini_get('safe_mode');
    $ob = ini_get('open_basedir');

    $rg = ini_get('register_globals');
    $T->set_var('item','register_globals');
    $T->set_var('status',$rg == 1 ? '<span class="no">'.$LANG_INSTALL['on'].'</span>' : '<span class="yes">'.$LANG_INSTALL['off'].'</span>');
    $T->set_var('recommended',$LANG_INSTALL['off']);
    $T->set_var('notes',$LANG_INSTALL['register_globals']);
    $T->parse('env','envs',true);

    $sm = ini_get('safe_mode');
    $T->set_var('item','safe_mode');
    $T->set_var('status',$sm == 1 ? '<span class="no">'.$LANG_INSTALL['on'].'</span>' : '<span class="yes">'.$LANG_INSTALL['off'].'</span>');
    $T->set_var('recommended',$LANG_INSTALL['off']);
    $T->set_var('notes',$LANG_INSTALL['safe_mode']);
    $T->parse('env','envs',true);

    $ob = ini_get('open_basedir');
    if ( $ob == '' ) {
        $open_basedir_restriction = 0;
    } else {
        $open_basedir_restriction = 1;
        $open_basedir_directories = $ob;
    }
    $T->set_var('item','open_basedir');
    $T->set_var('status',$ob == '' ? '<span class="yes">'.$LANG_INSTALL['none'].'</span>' : '<span class="no">'.$LANG_INSTALL['enabled'].'</span>');
    $T->set_var('notes',$LANG_INSTALL['open_basedir']);
    $T->parse('env','envs',true);

    $memory_limit = INST_return_bytes(ini_get('memory_limit'));
    $memory_limit_print = ($memory_limit / 1024) / 1024;
    $T->set_var('item','memory_limit');
    $T->set_var('status',$memory_limit < 50331648 ? '<span class="no">'.$memory_limit_print.'M</span>' : '<span class="yes">'.$memory_limit_print.'M</span>');
    $T->set_var('recommended','48M');
    $T->set_var('notes',$LANG_INSTALL['memory_limit']);
    $T->parse('env','envs',true);

    $fu = ini_get('file_uploads');
    $T->set_var('item','file_uploads');
    $T->set_var('status',$fu == 1 ? '<span class="yes">'.$LANG_INSTALL['on'].'</span>' : '<span class="no">'.$LANG_INSTALL['off'].'</span>');
    $T->set_var('recommended',$LANG_INSTALL['on']);
    $T->set_var('notes',$LANG_INSTALL['file_uploads']);
    $T->parse('env','envs',true);

    $upload_limit = INST_return_bytes(ini_get('upload_max_filesize'));
    $upload_limit_print = ($upload_limit / 1024) / 1024;
    $T->set_var('item','upload_max_filesize');
    $T->set_var('status',$upload_limit < 8388608 ? '<span class="no">'.$upload_limit_print.'M</span>' : '<span class="yes">'.$upload_limit_print.'M</span>');
    $T->set_var('recommended','8M');
    $T->set_var('notes',$LANG_INSTALL['upload_max_filesize']);
    $T->parse('env','envs',true);

    $post_limit = INST_return_bytes(ini_get('post_max_size'));
    $post_limit_print = ($post_limit / 1024) / 1024;
    $T->set_var('item','post_max_size');
    $T->set_var('status',$post_limit < 8388608 ? '<span class="no">'.$post_limit_print.'M</span>' : '<span class="yes">'.$post_limit_print.'M</span>');
    $T->set_var('recommended','8M');
    $T->set_var('notes',$LANG_INSTALL['post_max_size']);
    $T->parse('env','envs',true);

    if ( $_GLFUSION['method'] == 'upgrade' && @file_exists('../../siteconfig.php')) {
        require '../../siteconfig.php';
        $_GLFUSION['dbconfig_path'] = $_CONF['path'];
        require $_CONF['path'].'db-config.php';
        require_once $_CONF['path_system'].'lib-database.php';
        require_once $_CONF['path_system'].'classes/config.class.php';
        $config = config::get_instance();
        $config->set_configfile($_CONF['path'] . 'db-config.php');
        $config->load_baseconfig();
        $config->initConfig();
        $_CONF = $config->get_config('Core');
        $_PATH['public_html']   = $_CONF['path_html'];
        $_PATH['dbconfig_path'] = $_CONF['path'];
        $_PATH['admin_path']    = INST_getAdminPath();
        $_PATH['log_path']      = $_CONF['path_log'];
        $_PATH['lang_path']     = $_CONF['path_language'];
        $_PATH['backup_path']   = $_CONF['backup_path'];
        $_PATH['data_path']     = $_CONF['path_data'];
    } else {
        $_PATH['public_html']   = INST_getHtmlPath();
        if ( $dbconfig_path == '' ) {
            $_PATH['dbconfig_path'] = INST_stripslashes($_POST['private_path']);
        } else {
            $_PATH['dbconfig_path']     = $dbconfig_path;
        }
        $_PATH['admin_path']        = INST_getAdminPath();

        $_PATH['log_path']      = $_GLFUSION['log_path'];
        $_PATH['lang_path']     = $_GLFUSION['lang_path'];
        $_PATH['backup_path']   = $_GLFUSION['backup_path'];
        $_PATH['data_path']     = $_GLFUSION['data_path'];
    }

    if (!preg_match('/^.*\/$/', $_PATH['public_html'])) {
        $_PATH['public_html'] .= '/';
    }
    if (!preg_match('/^.*\/$/', $_PATH['dbconfig_path'])) {
        $_PATH['dbconfig_path'] .= '/';
    }
    if (!preg_match('/^.*\/$/', $_PATH['admin_path'])) {
        $_PATH['admin_path'] .= '/';
    }

    $file_list = array( $_PATH['dbconfig_path'],
                        $_PATH['dbconfig_path'].'db-config.php',
                        $_PATH['data_path'],
                        $_PATH['log_path'].'error.log',
                        $_PATH['log_path'].'access.log',
                        $_PATH['log_path'].'captcha.log',
                        $_PATH['log_path'].'spamx.log',
                        $_PATH['data_path'].'layout_cache/',
                        $_PATH['data_path'].'temp/',
                        $_PATH['dbconfig_path'].'system/lib-custom.php',

                        $_PATH['public_html'],
                        $_PATH['public_html'].'siteconfig.php',
                        $_PATH['public_html'].'backend/glfusion.rss',
                        $_PATH['public_html'].'images/articles/',
                        $_PATH['public_html'].'images/topics/',
                        $_PATH['public_html'].'images/userphotos/',
                        $_PATH['public_html'].'images/library/File/',
                        $_PATH['public_html'].'images/library/Flash/',
                        $_PATH['public_html'].'images/library/Image/',
                        $_PATH['public_html'].'images/library/Media/',

                        $_PATH['public_html'].'mediagallery/mediaobjects/',
                        $_PATH['public_html'].'mediagallery/mediaobjects/covers/',
                        $_PATH['public_html'].'mediagallery/mediaobjects/orig/',
                        $_PATH['public_html'].'mediagallery/mediaobjects/disp/',
                        $_PATH['public_html'].'mediagallery/mediaobjects/tn/',
                        $_PATH['public_html'].'mediagallery/mediaobjects/orig/0/',
                        $_PATH['public_html'].'mediagallery/mediaobjects/disp/0/',
                        $_PATH['public_html'].'mediagallery/mediaobjects/tn/0/',
                        $_PATH['public_html'].'mediagallery/rss/',
                        $_PATH['public_html'].'mediagallery/watermarks/',

                        $_PATH['public_html'].'filemgmt_data/',
                        $_PATH['public_html'].'filemgmt_data/category_snaps/',
                        $_PATH['public_html'].'filemgmt_data/category_snaps/tmp/',
                        $_PATH['public_html'].'filemgmt_data/files/',
                        $_PATH['public_html'].'filemgmt_data/files/tmp/',
                        $_PATH['public_html'].'filemgmt_data/snaps/',
                        $_PATH['public_html'].'filemgmt_data/snaps/tmp/',

                        $_PATH['public_html'].'forum/media/',
                        $_PATH['public_html'].'forum/media/tn/',

                      );

    $T->set_var('dbconfig_path',$_PATH['dbconfig_path']);

    $T->set_block('page','perms','perm');

    $classCounter = 0;
    foreach ($file_list AS $path) {
        $ok = INST_isWritable($path);
        if ( !$ok ) {
            $T->set_var('location',$path);
            $T->set_var('status', $ok ? '<span class="yes">'.$LANG_INSTALL['ok'].'</span>' : '<span class="Unwriteable">'.$LANG_INSTALL['not_writable'].'</span>');
            $T->set_var('rowclass',($classCounter % 2)+1);
            $classCounter++;
            $T->parse('perm','perms',true);
            if  ( !$ok ) {
                $permError = 1;
            }
        }
    }
    // special test to see if we can create a directory under layout_cache...
    $rc = mkdir($_PATH['dbconfig_path'].'data/layout_cache/test/');
    if (!$rc) {
        $T->set_var('location',$_PATH['dbconfig_path'].'data/layout_cache/<br /><strong>'.$_GLFUSION['errstr'].'</strong>');
        $T->set_var('status', '<span class="Unwriteable">'.$LANG_INSTALL['unable_mkdir'].'</span>');
        $T->set_var('rowclass',($classCounter % 2)+1);
        $classCounter++;
        $T->parse('perm','perms',true);
        $permError = 1;
        @rmdir($_PATH['dbconfig_path'].'data/layout_cache/test/');
    } else {
        $ok = INST_isWritable($_PATH['dbconfig_path'].'data/layout_cache/test/');
        if ( !$ok ) {
            $T->set_var('location',$path);
            $T->set_var('status', $ok ? '<span class="yes">'.$LANG_INSTALL['ok'].'</span>' : '<span class="Unwriteable">'.$LANG_INSTALL['not_writable'].'</span>');
            $T->set_var('rowclass',($classCounter % 2)+1);
            $classCounter++;
            $T->parse('perm','perms',true);
            if  ( !$ok ) {
                $permError = 1;
            }
        }
        @rmdir($_PATH['dbconfig_path'].'data/layout_cache/test/');
    }

    // special test to see if existing cache files exist and are writable...
    $rc = INST_checkCacheDir($_PATH['dbconfig_path'].'data/layout_cache/',$T,$classCounter);
    if ( $rc > 0 ) {
        $permError = 1;
    }

    if ( $permError ) {
        $button = 'Recheck';
        $action = 'checkenvironment';
        $T->set_var('error_message',$LANG_INSTALL['correct_perms']);

        $recheck  = '<button type="submit" name="submit" onclick="submitForm( checkenv, \'checkenvironment\' );">' . LB;
        $recheck .= 'Recheck' . LB;
        $recheck .= '<img src="layout/arrow-recheck.gif" alt=""/>' . LB;
        $recheck .= '</button>' . LB;

    } else {
        $recheck = '';
        $T->set_var('location',$LANG_INSTALL['directory_permissions']);
        $T->set_var('status', 1 ? '<span class="yes">'.$LANG_INSTALL['ok'].'</span>' : '<span class="Unwriteable">'.$LANG_INSTALL['not_writable'].'</span>');
        $classCounter++;
        $T->parse('perm','perms',true);

        $T->set_var('location',$LANG_INSTALL['file_permissions']);
        $T->set_var('status', 1 ? '<span class="yes">'.$LANG_INSTALL['ok'].'</span>' : '<span class="Unwriteable">'.$LANG_INSTALL['not_writable'].'</span>');
        $classCounter++;
        $T->parse('perm','perms',true);

        $button = $LANG_INSTALL['next'];

        if ( $_GLFUSION['method'] == 'upgrade' ) {
            $action = 'doupgrade';
            $previousaction = '';
        } else {
            $action = 'getsiteinformation';
            $previousaction = 'pathsetting';
        }
    }
    $button = $LANG_INSTALL['next'];

    if ( $_GLFUSION['method'] == 'upgrade' ) {
        $action = 'doupgrade';
        $previousaction = '';
    } else {
        $action = 'getsiteinformation';
        $previousaction = 'pathsetting';
    }
    $T->set_var(array(
        'previousaction'    => $previousaction,
        'nextaction'        => $action,
        'button'            => $button,
        'recheck'           => $recheck,
        'back_to_top'       => $LANG_INSTALL['back_to_top'],
        'lang_previous'     => $LANG_INSTALL['previous'],
        'lang_host_env'     => $LANG_INSTALL['hosting_env'],
        'lang_setting'      => $LANG_INSTALL['setting'],
        'lang_current'      => $LANG_INSTALL['current'],
        'lang_recommended'  => $LANG_INSTALL['recommended'],
        'lang_notes'        => $LANG_INSTALL['notes'],
        'lang_filesystem'   => $LANG_INSTALL['filesystem_check'],
        'lang_php_settings' => $LANG_INSTALL['php_settings'],
        'lang_php_warning'  => $LANG_INSTALL['php_warning'],
        'hiddenfields'      => _buildHiddenFields(),
    ));
    $T->parse('output','page');
    return $T->finish($T->get_var('output'));
}

/**
 * Retrieves database settings and site information
 *
 * Prompt the user for the database setting and site
 * information such as site name, url, etc.
 *
 * @return  string          HTML form
 *
 */
function INST_getSiteInformation()
{
    global $_GLFUSION, $LANG_INSTALL;

    if ( ($rc = _checkSession() ) !== 0 ) {
        return $rc;
    }

    if ( !isset($_GLFUSION['dbconfig_path']) ) {
        return INST_getPathSetting();
    }

    $_GLFUSION['currentstep'] = 'getsiteinformation';


    $T = new TemplateLite('templates/');
    $T->set_file('page','siteinformation.thtml');

    $site_name      = (isset($_GLFUSION['site_name']) ? $_GLFUSION['site_name'] : '');
    $site_slogan    = (isset($_GLFUSION['site_slogan']) ? $_GLFUSION['site_slogan'] : '');
    $site_url       = (isset($_GLFUSION['site_url']) ? $_GLFUSION['site_url'] : INST_getSiteUrl());
    $site_admin_url = (isset($_GLFUSION['site_admin_url']) ? $_GLFUSION['site_admin_url'] : INST_getSiteAdminUrl());
    $site_mail      = (isset($_GLFUSION['site_mail']) ? $_GLFUSION['site_mail'] : '');
    $noreply_mail   = (isset($_GLFUSION['noreply_mail']) ? $_GLFUSION['noreply_mail'] : '');
    $utf8           = (isset($_GLFUSION['utf8']) ? $_GLFUSION['utf8'] : 1);
    $dbconfig_path  = $_GLFUSION['dbconfig_path'];

    require $dbconfig_path.'db-config.php';

    if ( isset($_GLFUSION['db_type']) ) {
        $_DB_dbms = $_GLFUSION['db_type'];
    }
    if ( isset($_GLFUSION['db_host']) ) {
        $_DB_host = $_GLFUSION['db_host'];
    }
    if ( isset($_GLFUSION['db_name']) ) {
        $_DB_name = $_GLFUSION['db_name'];
    }
    if ( isset( $_GLFUSION['db_user']) ) {
        $_DB_user = $_GLFUSION['db_user'];
    }
    if ( isset( $_GLFUSION['db_pass']) ) {
        $_DB_pass = $_GLFUSION['db_pass'];
    } else {
        $_DB_pass = '';
    }
    if ( isset( $_GLFUSION['db_prefix']) ) {
        $_DB_table_prefix = $_GLFUSION['db_prefix'];
    }

    if ( isset($_GLFUSION['innodb']) && $_GLFUSION['innodb'] ) {
        $T->set_var('innodb_selected',' selected="selected"');
        $T->set_var('noinnodb_selected','');
    } else {
        $T->set_var('noinnodb_selected',' selected="selected"');
        $T->set_var('innodb_selected','');
    }

    $T->set_var(array(
        'back_to_top'                   => $LANG_INSTALL['back_to_top'],
        'db_type'                       => $_DB_dbms,
        'db_host'                       => $_DB_host,
        'db_name'                       => $_DB_name,
        'db_user'                       => $_DB_user,
        'db_pass'                       => $_DB_pass,
        'db_prefix'                     => $_DB_table_prefix,
        'lang_database_type'            => $LANG_INSTALL['db_type'],
        'lang_database_hostname'        => $LANG_INSTALL['db_hostname'],
        'lang_database_name'            => $LANG_INSTALL['db_name'],
        'lang_database_user'            => $LANG_INSTALL['db_user'],
        'lang_database_password'        => $LANG_INSTALL['db_pass'],
        'lang_database_table_prefix'    => $LANG_INSTALL['db_table_prefix'],
        'lang_connection_settings'      => $LANG_INSTALL['connection_settings'],
        'site_name'                     => $site_name,
        'site_slogan'                   => $site_slogan,
        'site_url'                      => $site_url,
        'site_admin_url'                => $site_admin_url,
        'site_mail'                     => $site_mail,
        'noreply_mail'                  => $noreply_mail,
        'lang_next'                     => $LANG_INSTALL['next'],
        'lang_prev'                     => $LANG_INSTALL['previous'],
        'lang_install'                  => $LANG_INSTALL['install'],
        'lang_site_information'         => $LANG_INSTALL['site_info'],
        'lang_site_name'                => $LANG_INSTALL['site_name'],
        'lang_site_slogan'              => $LANG_INSTALL['site_slogan'],
        'lang_site_url'                 => $LANG_INSTALL['site_url'],
        'lang_site_admin_url'           => $LANG_INSTALL['site_admin_url'],
        'lang_site_email'               => $LANG_INSTALL['site_email'],
        'lang_site_noreply_email'       => $LANG_INSTALL['site_noreply_email'],
        'lang_utf8'                     => $LANG_INSTALL['use_utf8'],
        'lang_sitedata_help'            => $LANG_INSTALL['sitedata_help'],
        'hiddenfields'                  => _buildHiddenFields(),
    ));

    $T->parse('output','page');
    return $T->finish($T->get_var('output'));
}


/**
 * Validates database and site settings.
 *
 * Checks to ensure connectivity to the database and that
 * the email fields are properly formed email addresses.
 *
 * @return  string          HTML screen with environment status
 *
 * @note This will return _displayError() if there are data issues.
 *       otherwise it calls INST_installAndContentPlugins()
 *
 */
function INST_gotSiteInformation()
{
    global $_GLFUSION, $LANG_INSTALL;

    if ( ($rc = _checkSession() ) !== 0 ) {
        return $rc;
    }

    $_GLFUSION['currentstep'] = 'getsiteinformation';

    $dbconfig_path = $_GLFUSION['dbconfig_path'];

    include $dbconfig_path.'lib/email-address-validation/EmailAddressValidator.php';
    $validator = new EmailAddressValidator;

    $numErrors = 0;
    $errText   = '';

    if ( isset($_POST['dbtype']) && $_POST['dbtype'] != '') {
        $db_type = INST_stripslashes($_POST['dbtype']);
    } else {
        $db_type = '';
        $numErrors++;
        $errText .= $LANG_INSTALL['db_type_error'].'<br />';
    }
    if ( isset($_POST['dbhost']) && $_POST['dbhost'] != '') {
        $db_host = INST_stripslashes($_POST['dbhost']);
    } else {
        $db_host = '';
        $numErrors++;
        $errText .= $LANG_INSTALL['db_hostname_error'].'<br />';
    }
    if ( isset($_POST['dbname']) && $_POST['dbname'] != '') {
        $db_name = INST_stripslashes($_POST['dbname']);
    } else {
        $db_name = '';
        $numErrors++;
        $errText .= $LANG_INSTALL['db_name_error'].'<br />';
    }
    if ( isset($_POST['dbuser']) && $_POST['dbuser'] != '') {
        $db_user = INST_stripslashes($_POST['dbuser']);
    } else {
        $db_user = '';
        $numErrors++;
        $errText .= $LANG_INSTALL['db_user_error'].'<br />';
    }
    if ( isset($_POST['dbpass']) && $_POST['dbpass'] != '') {
        $db_pass = INST_stripslashes($_POST['dbpass']);
    } else {
        $db_pass = '';
    }
    if ( isset($_POST['dbprefix']) ) {
        $db_prefix = INST_stripslashes($_POST['dbprefix']);
    } else {
        $db_prefix = '';
    }

    $innodb = false;
    switch ($db_type) {
        case 'mysql-innodb':
            $innodb = true;
            $db_type = 'mysql';
        case 'mysql' :
            break;
    }

    // populate the session vars...

    $_GLFUSION['db_type']     = $db_type;
    $_GLFUSION['innodb']      = $innodb;
    $_GLFUSION['db_host']     = $db_host;
    $_GLFUSION['db_name']     = $db_name;
    $_GLFUSION['db_user']     = $db_user;
    $_GLFUSION['db_pass']     = $db_pass;
    $_GLFUSION['db_prefix']   = $db_prefix;

    if ( isset($_POST['sitename']) && $_POST['sitename'] != '' ) {
        $site_name = INST_stripslashes($_POST['sitename']);
    } else {
        $site_name = '';
        $numErrors++;
        $errText .= $LANG_INSTALL['site_name_error'].'<br />';
    }
    if ( isset($_POST['siteslogan']) && $_POST['siteslogan'] != '' ) {
        $site_slogan = INST_stripslashes($_POST['siteslogan']);
    } else {
        $site_slogan = '';
    }
    if ( isset($_POST['siteurl']) && $_POST['siteurl'] != '' ) {
        $site_url = INST_stripslashes($_POST['siteurl']);
    } else {
        $site_url = '';
        $numErrors++;
        $errText .= $LANG_INSTALL['site_url_error'].'<br />';
    }

    if ( isset($_POST['siteadminurl']) && $_POST['siteadminurl'] != '' ) {
        $site_admin_url = INST_stripslashes($_POST['siteadminurl']);
    } else {
        $site_admin_url = '';
        $numErrors++;
        $errText .= $LANG_INSTALL['site_admin_url_error'].'<br />';
    }
    if ( isset($_POST['sitemail']) && $_POST['sitemail'] != '' ) {
        $site_mail = INST_stripslashes($_POST['sitemail']);
        if ( !$validator->check_email_address( $site_mail ) ) {
            $numErrors++;
            $errText .= $LANG_INSTALL['site_email_notvalid'].'<br />';
        }
    } else {
        $site_mail = '';
        $numErrors++;
        $errText .= $LANG_INSTALL['site_email_error'].'<br />';
    }
    if ( isset($_POST['noreplymail']) && $_POST['noreplymail'] != '' ) {
        $noreply_mail = INST_stripslashes($_POST['noreplymail']);
        if ( !$validator->check_email_address( $noreply_mail ) ) {
            $numErrors++;
            $errText .= $LANG_INSTALL['site_noreply_notvalid'].'<br />';
        }
    } else {
        $noreply_mail = '';
        $numErrors++;
        $errText .= $LANG_INSTALL['site_noreply_email_error'].'<br />';
    }

    $_GLFUSION['site_name']       = $site_name;
    $_GLFUSION['site_slogan']     = $site_slogan;
    $_GLFUSION['site_url']        = $site_url;
    $_GLFUSION['site_admin_url']  = $site_admin_url;
    $_GLFUSION['site_mail']       = $site_mail;
    $_GLFUSION['noreply_mail']    = $noreply_mail;
    $_GLFUSION['utf8']            = isset($_POST['use_utf8']) ? 1 : 0;

    if ( $numErrors > 0 ) {
        return _displayError(SITE_DATA_ERROR,'getsiteinformation',$errText);
    }

    $db_handle = @mysql_connect($db_host, $db_user, $db_pass);
    if (!$db_handle) {
        return _displayError(DB_NO_CONNECT,'getsiteinformation');
    }
    if ($db_handle) {
        $connected = @mysql_select_db($db_name, $db_handle);
    }
    if ( !$connected) {
        return _displayError(DB_NO_DATABASE,'getsiteinformation');
    }
    if ( $innodb ) {
        $res = @mysql_query("SHOW VARIABLES LIKE 'have_innodb'");
        $A = @mysql_fetch_array($res);
        if (strcasecmp ($A[1], 'yes') != 0) {
            return _displayError(DB_NO_INNODB,'getsiteinformation');
        }
    }
    $result = @mysql_query("SHOW TABLES LIKE '".$db_prefix."vars'");
    if (@mysql_numrows ($result) > 0) {
        return _displayError(DB_EXISTS,'');
    }

    if ( $numErrors > 0 ) {
        return _displayError(SITE_DATA_MISSING,'getsiteinformation',$errText);
    }

    return INST_installAndContentPlugins();
}


/**
 * Performs base site install and prompts for plugin / content install
 *
 * Initializes the database and configuration settings.
 * Prompts user for optional content and plugins to install.
 *
 * @return  string          HTML form
 *
 */
function INST_installAndContentPlugins()
{
    global $_GLFUSION, $_SYSTEM, $_CONF, $_TABLES, $_DB, $_DB_dbms,
           $_DB_host, $_DB_user,$_DB_pass, $site_url,$_DB_table_prefix,
           $LANG_INSTALL;

    if ( ($rc = _checkSession() ) !== 0 ) {
        return $rc;
    }

    $_GLFUSION['currentstep'] = 'contentplugins';

    if ( isset($_GLFUSION['innodb']) ) {
        $use_innodb = $_GLFUSION['innodb'];
    } else {
        $use_innodb = false;
    }

    $utf8 = (isset($_GLFUSION['utf8']) ? $_GLFUSION['utf8'] : 1);
    if ( $utf8 ) {
        $charset = 'utf-8';
    } else {
        $charset = 'iso-8859-1';
    }

    if ( isset($_GLFUSION['language']) ) {
        $language = $_GLFUSION['language'];
    } else {
        $language = 'english';
    }

    $_PATH['dbconfig_path'] = $_GLFUSION['dbconfig_path'];
    $_PATH['public_html']   = INST_getHtmlPath();
    if (!preg_match('/^.*\/$/', $_PATH['public_html'])) {
        $_PATH['public_html'] .= '/';
    }
    $dbconfig_path = str_replace('db-config.php', '', $_PATH['dbconfig_path']);

    // check the lib-custom...
    if (!@file_exists($_PATH['dbconfig_path'].'system/lib-custom.php') ) {
        if ( @file_exists($_PATH['dbconfig_path'].'system/lib-custom.php.dist') ) {
            $rc = @copy($_PATH['dbconfig_path'].'system/lib-custom.php.dist',$_PATH['dbconfig_path'].'system/lib-custom.php');
            if ( $rc === false ) {
                return _displayError(LIBCUSTOM_NOT_WRITABLE,'getsiteinformation');
            }
        }
    }

    // check and see if site config really exists...
    if (!@file_exists($_PATH['public_html'].'siteconfig.php') ) {
        if ( @file_exists($_PATH['public_html'].'siteconfig.php.dist') ) {
            $rc = @copy($_PATH['public_html'].'siteconfig.php.dist',$_PATH['public_html'].'siteconfig.php');
            if ( $rc === false ) {
                return _displayError(SITECONFIG_NOT_WRITABLE,'getsiteinformation');
            }
        }
    }

    // Edit siteconfig.php and enter the correct GL path and system directory path
    $siteconfig_path = $_PATH['public_html'] . 'siteconfig.php';
    $siteconfig_file = fopen($siteconfig_path, 'r');
    $siteconfig_data = fread($siteconfig_file, filesize($siteconfig_path));
    fclose($siteconfig_file);

    require $siteconfig_path;
    $siteconfig_data = str_replace("\$_CONF['path'] = '{$_CONF['path']}';",
                        "\$_CONF['path'] = '" . str_replace('db-config.php', '', $_PATH['dbconfig_path']) . "';",
                        $siteconfig_data);

    $siteconfig_data = preg_replace
            (
             '/\$_CONF\[\'default_charset\'\] = \'[^\']*\';/',
             "\$_CONF['default_charset'] = '" . $charset . "';",
             $siteconfig_data
            );

    $siteconfig_file = fopen($siteconfig_path, 'w');
    if (!fwrite($siteconfig_file, $siteconfig_data)) {
        return _displayError(SITECONFIG_NOT_WRITABLE,'getsiteinformation');
    }
    fclose ($siteconfig_file);
    require $siteconfig_path;

    $config_file = $_GLFUSION['dbconfig_path'].'db-config.php';

    require $config_file;

    $db = array('host' => (isset($_GLFUSION['db_host']) ? $_GLFUSION['db_host'] : $_DB_host),
                'name' => (isset($_GLFUSION['db_name']) ? $_GLFUSION['db_name'] : $_DB_name),
                'user' => (isset($_GLFUSION['db_user']) ? $_GLFUSION['db_user'] : $_DB_user),
                'pass' => (isset($_GLFUSION['db_pass']) ? $_GLFUSION['db_pass'] : $_DB_pass),
                'table_prefix' => (isset($_GLFUSION['db_prefix']) ? $_GLFUSION['db_prefix'] : $_DB_table_prefix),
                'type' => 'mysql');

    $dbconfig_file = fopen($config_file, 'r');
    $dbconfig_data = fread($dbconfig_file, filesize($config_file));
    fclose($dbconfig_file);

    $dbconfig_data = str_replace("\$_DB_host = '" . $_DB_host . "';", "\$_DB_host = '" . $_GLFUSION['db_host'] . "';", $dbconfig_data); // Host
    $dbconfig_data = str_replace("\$_DB_name = '" . $_DB_name . "';", "\$_DB_name = '" . $_GLFUSION['db_name'] . "';", $dbconfig_data); // Database
    $dbconfig_data = str_replace("\$_DB_user = '" . $_DB_user . "';", "\$_DB_user = '" . $_GLFUSION['db_user'] . "';", $dbconfig_data); // Username
    $dbconfig_data = str_replace("\$_DB_pass = '" . $_DB_pass . "';", "\$_DB_pass = '" . $_GLFUSION['db_pass'] . "';", $dbconfig_data); // Password
    $dbconfig_data = str_replace("\$_DB_table_prefix = '" . $_DB_table_prefix . "';", "\$_DB_table_prefix = '" . $_GLFUSION['db_prefix'] . "';", $dbconfig_data); // Table prefix
    $dbconfig_data = str_replace("\$_DB_dbms = '" . $_DB_dbms . "';", "\$_DB_dbms = '" . 'mysql' . "';", $dbconfig_data); // Database type

    // Write changes to db-config.php
    $dbconfig_file = fopen($config_file, 'w');
    if (!fwrite($dbconfig_file, $dbconfig_data)) {
        return _displayError(DBCONFIG_NOT_WRITABLE,'getsiteinformation');
    }
    fclose($dbconfig_file);
    require $config_file;

    require $_CONF['path_system'].'lib-database.php';

    list($rc,$errors) = INST_createDatabaseStructures($use_innodb);
    if ( $rc != true ) {
        return _displayError(DB_NO_CONNECT,'getsiteinformation',$errors);
    }
    $site_name      = isset($_GLFUSION['site_name']) ? $_GLFUSION['site_name'] : '';
    $site_slogan    = isset($_GLFUSION['site_slogan']) ? $_GLFUSION['site_slogan'] : '';
    $site_url       = isset($_GLFUSION['site_url']) ? $_GLFUSION['site_url'] : INST_getSiteUrl();
    $site_admin_url = isset($_GLFUSION['site_admin_url']) ? $_GLFUSION['site_admin_url'] : INST_getSiteAdminUrl();
    $site_mail      = isset($_GLFUSION['site_mail']) ? $_GLFUSION['site_mail'] : '' ;
    $noreply_mail   = isset($_GLFUSION['noreply_mail']) ? $_GLFUSION['noreply_mail'] : '' ;

    $log_path     = isset($_GLFUSION['log_path'])    ? $_GLFUSION['log_path']    : $gl_path . 'logs/';
    $lang_path    = isset($_GLFUSION['lang_path'])   ? $_GLFUSION['lang_path']   : $gl_path . 'language/';
    $backup_path  = isset($_GLFUSION['backup_path']) ? $_GLFUSION['backup_path'] : $gl_path . 'backups/';
    $data_path    = isset($_GLFUSION['data_path'])   ? $_GLFUSION['data_path']   : $gl_path . 'data/';

    INST_personalizeAdminAccount($site_mail, $site_url);

    require_once $_CONF['path_system'].'classes/config.class.php';
    require_once 'config-install.php';
    install_config($site_url);

    $gl_path    = $_GLFUSION['dbconfig_path'];
    $html_path  = $_PATH['public_html'];

    $config = config::get_instance();
    $config->set('site_name', $site_name);
    $config->set('site_slogan', $site_slogan);
    $config->set('site_url', $site_url);
    $config->set('site_admin_url', $site_admin_url);
    $config->set('site_mail', $site_mail);
    $config->set('noreply_mail', $noreply_mail);
    $config->set('path_html', $html_path);
    $config->set('path_log', $log_path);
    $config->set('path_language', $lang_path);
    $config->set('backup_path', $backup_path);
    $config->set('path_data', $data_path);
    $config->set('path_images', $html_path . 'images/');
    $config->set('path_themes', $html_path . 'layout/');
    $config->set('rdf_file', $html_path . 'backend/glfusion.rss');
    $config->set('path_pear', $_CONF['path_system'] . 'pear/');
    $config->set_default('default_photo', $site_url.'/default.jpg');

    $lng = INST_getDefaultLanguage($gl_path . 'language/', $language, $utf8);
    if (!empty($lng)) {
        $config->set('language', $lng);
    }

    DB_change($_TABLES['vars'], 'value', GVERSION,
                                'name', 'database_version');

    $_CONF['path_html']         = $html_path;
    $_CONF['site_url']          = $site_url;
    $_CONF['site_admin_url']    = $site_admin_url;

    // Setup nouveau as the default
    $config->set('theme', 'nouveau');
    DB_query("UPDATE {$_TABLES['users']} SET theme='nouveau' WHERE uid=2",1);

    $config->_purgeCache();
    // rebuild the config array
    include $siteconfig_path;
    $config->set_configfile($_CONF['path'] . 'db-config.php');
    $config->load_baseconfig();
    $config->initConfig();
    $_CONF = $config->get_config('Core');

    $config->_purgeCache();

    @touch($log_path.'error.log');
    @touch($log_path.'access.log');
    @touch($log_path.'captcha.log');
    @touch($log_path.'spamx.log');

    global $_CONF, $_SYSTEM, $_DB, $_GROUPS, $_RIGHTS, $TEMPLATE_OPTIONS;

    require $_CONF['path_html'].'lib-common.php';

    INST_pluginAutoInstall('bad_behavior2');
    INST_pluginAutoInstall('captcha');
    INST_pluginAutoInstall('commentfeeds');
    INST_pluginAutoInstall('sitetailor');
    INST_pluginAutoInstall('spamx');
    INST_pluginAutoInstall('staticpages');

    $config->_purgeCache();
    INST_clearCache();

    $T = new TemplateLite('templates/');
    $T->set_file('page','contentplugins.thtml');

    $T->set_var(array(
        'lang_content_plugins'      =>  $LANG_INSTALL['content_plugins'],
        'lang_load_sample_content'  =>  $LANG_INSTALL['load_sample_content'],
        'lang_samplecontent_desc'   =>  $LANG_INSTALL['samplecontent_desc'],
        'lang_calendar'             =>  $LANG_INSTALL['calendar'],
        'lang_filemgmt'             =>  $LANG_INSTALL['filemgmt'],
        'lang_mediagallery'         =>  $LANG_INSTALL['mediagallery'],
        'lang_forum'                =>  $LANG_INSTALL['forum'],
        'lang_polls'                =>  $LANG_INSTALL['polls'],
        'lang_links'                =>  $LANG_INSTALL['links'],
        'lang_calendar_desc'        =>  $LANG_INSTALL['calendar_desc'],
        'lang_filemgmt_desc'        =>  $LANG_INSTALL['filemgmt_desc'],
        'lang_mediagallery_desc'    =>  $LANG_INSTALL['mediagallery_desc'],
        'lang_forum_desc'           =>  $LANG_INSTALL['forum_desc'],
        'lang_polls_desc'           =>  $LANG_INSTALL['polls_desc'],
        'lang_links_desc'           =>  $LANG_INSTALL['links_desc'],
        'lang_next'                 =>  $LANG_INSTALL['next'],
        'hiddenfields'              => _buildHiddenFields(),
    ));

    $T->parse('output','page');
    return $T->finish($T->get_var('output'));
}


/**
 * Installs optional plugins and content
 *
 * @note redirects to success page.
 *
 */
function INST_doPluginInstall()
{
    global $_GLFUSION, $_CONF, $_TABLES, $_DB_table_prefix;

    $site_url = $_CONF['site_url'];
    $language = $_GLFUSION['language'];

    $pluginsToInstall = $_POST['plugin'];
    if ( is_array($pluginsToInstall) ) {
        foreach ($pluginsToInstall AS $plugin => $settings ) {
            $rc = INST_pluginAutoInstall($plugin);
        }
    }
    if ( isset($_POST['installdefaultdata']) ) {
        require_once $_CONF['path'].'sql/default_content.php';
        // pull a list of all plugins that are installed....
        $result = DB_query("SELECT pi_name FROM {$_TABLES['plugins']} WHERE pi_enabled = 1");
        $installedPlugins = array();
        while ($A = DB_fetchArray($result)) {
            $installedPlugins[] = $A['pi_name'];
        }
        // install the core default data first
        if ( is_array($_CORE_DEFAULT_DATA) ) {
            foreach ($_CORE_DEFAULT_DATA AS $sql) {
                DB_query($sql,1);
            }
        }
        // install the static pages default data
        if ( is_array($_SP_DEFAULT_DATA) ) {
            foreach ($_SP_DEFAULT_DATA AS $sql) {
                $fsql = str_replace("xxxSITEURLxxx",$site_url,$sql);
                DB_query($fsql,1);
            }
        }
        // update the site tailor menu to reflect the static pages content
        if ( is_array($_ST_DEFAULT_DATA) ) {
            foreach ($_ST_DEFAULT_DATA AS $sql) {
                DB_query($sql,1);
            }
        }
        // cycle through the rest of the installed plugins and add their data
        if ( is_array($installedPlugins) ) {
            foreach ($installedPlugins AS $plugin) {
                if ( is_array($_DATA[$plugin]) ) {
                    foreach ($_DATA[$plugin] AS $sql) {
                        DB_query($sql,1);
                    }
                }
            }
        }
    }

    INST_clearCache();

    header('Location: success.php?type=install&language=' . $language);
    exit;
}

/**
 * Upgrades an existing glFusion installation
 *
 * @return  string          HTML if error or NULL if success
 *
 */
function INST_doSiteUpgrade()
{
    global $_GLFUSION, $_CONF,  $_TABLES, $_DB_dbms, $LANG_INSTALL;

    if ( $_GLFUSION['migrate'] == 1 ) {
        // setup the environment to match glFusion 1.0.0
        DB_query("ALTER TABLE {$_TABLES['syndication']} CHANGE `type` type varchar(30) NOT NULL default 'article'",1);
        DB_query("UPDATE {$_TABLES['syndication']} SET type = 'article' WHERE type = 'geeklog'",1);
        DB_query("UPDATE {$_TABLES['plugins']} SET pi_version = '1.0.2' WHERE pi_name = 'calendar'",1);
        DB_query("UPDATE {$_TABLES['plugins']} SET pi_version = '2.0.0' WHERE pi_name = 'links'",1);
        DB_query("UPDATE {$_TABLES['plugins']} SET pi_version = '2.0.1' WHERE pi_name = 'polls'",1);
        DB_query("UPDATE {$_TABLES['plugins']} SET pi_version = '1.1.1' WHERE pi_name = 'spamx'",1);
        DB_query("UPDATE {$_TABLES['plugins']} SET pi_version = '1.5.0' WHERE pi_name = 'staticpages'",1);
        DB_query("INSERT INTO {$_TABLES['vars']} SET value='1.0.0', name='glfusion'",1);
    }

    $version = INST_identifyglFusionVersion();

    // Query `vars` and see if 'database_engine' == 'InnoDB'
    $result = DB_query("SELECT `name`,`value` FROM {$_TABLES['vars']} WHERE `name`='database_engine'");
    $row = DB_fetchArray($result);
    if ($row['value'] == 'InnoDB') {
       $use_innodb = true;
    } else {
       $use_innodb = false;
    }

    list($rc,$errors) = INST_doDatabaseUpgrades($version, $use_innodb);

// ******* TESTING CODE - FORCE ERROR
//    $rc = 0;
//    $errors = 'Error 1<br />Error 2<br />Error 3<br />';
// **********************************
    INST_clearCache();

    if ( $rc ) {
        require_once $_CONF['path_system'] . 'classes/config.class.php';
        $config = config::get_instance();
        $config->_purgeCache();

        /*
         * We are done with this step, return so we can fall through
         * to the plugin upgrades.
         */
        return;
    } else {
        $display = '';
        $display .= '<h2>' . $LANG_INSTALL['upgrade_error'] . '</h2>
            <p>' . $LANG_INSTALL['upgrade_error_text'] . '</p>' . LB;
        $display .= $errors;
        return _displayError(CORE_UPGRADE_ERROR,'done',$display);
    }
    return;
}

/**
 * Calls all bundled plugin upgrade routines
 *
 * @return  string          HTML or redirects to success page
 *
 */
function INST_doPluginUpgrade()
{
    global $_GLFUSION, $_CONF, $_TABLES, $LANG_INSTALL;

    $language = $_GLFUSION['language'];

    $upgradeError = '';
    $error        = '';

    INST_checkPlugins();

    $rc = INST_pluginAutoUpgrade('calendar');
    if ( $rc == false ) {
        $error .= sprintf($LANG_INSTALL['plugin_upgrade_error'],'Calendar');
        $upgradeError = 1;
    }
    $rc = INST_pluginAutoUpgrade('links');
    if ( $rc == false ) {
        $error .= sprintf($LANG_INSTALL['plugin_upgrade_error'],'Links');
        $upgradeError = 1;
    }
    $rc = INST_pluginAutoUpgrade('polls');
    if ( $rc == false ) {
        $error .= sprintf($LANG_INSTALL['plugin_upgrade_error'],'Polls');
        $upgradeError = 1;
    }
    $rc = INST_pluginAutoUpgrade('spamx',1);
    if ( $rc == false ) {
        $error .= sprintf($LANG_INSTALL['plugin_upgrade_error'],'Spamx');
        $upgradeError = 1;
    }
    $rc = INST_pluginAutoUpgrade('staticpages',1);
    if ( $rc == false ) {
        $error .= sprintf($LANG_INSTALL['plugin_upgrade_error'],'Static Pages');
        $upgradeError = 1;
    }
    $rc = INST_pluginAutoUpgrade('sitetailor',1);
    if ( $rc == false ) {
        $error .= sprintf($LANG_INSTALL['plugin_upgrade_error'],'Site Tailor');
        $upgradeError = 1;
    }
    $rc = INST_pluginAutoUpgrade('captcha',1);
    if ( $rc == false ) {
        $error .= sprintf($LANG_INSTALL['plugin_upgrade_error'],'CAPTCHA');
        $upgradeError = 1;
    }
    $rc = INST_pluginAutoUpgrade('bad_behavior2',1);
    if ( $rc == false ) {
        $error .= sprintf($LANG_INSTALL['plugin_upgrade_error'],'Bad Behavior2');
        $upgradeError = 1;
    }
    $rc = INST_pluginAutoUpgrade('filemgmt');
    if ( $rc == false ) {
        $error .= sprintf($LANG_INSTALL['plugin_upgrade_error'],'FileMgmt');
        $upgradeError = 1;
    }
    $rc = INST_pluginAutoUpgrade('forum');
    if ( $rc == false ) {
        $error .= sprintf($LANG_INSTALL['plugin_upgrade_error'],'Forum');
        $upgradeError = 1;
    }
    $rc = INST_pluginAutoUpgrade('mediagallery');
    if ( $rc == false ) {
        $error .= sprintf($LANG_INSTALL['plugin_upgrade_error'],'Media Gallery');
        $upgradeError = 1;
    }
    $rc = INST_pluginAutoUpgrade('commentfeeds',1);
    if ( $rc == false ) {
        $error .= sprintf($LANG_INSTALL['plugin_upgrade_error'],'Comment Feeds');
        $upgradeError = 1;
    }

    $stdPlugins=array('staticpages','spamx','links','polls','calendar','sitetailor','captcha','bad_behavior2','forum','mediagallery','filemgmt','commentfeeds');
    foreach ($stdPlugins AS $pi_name) {
        DB_query("UPDATE {$_TABLES['plugins']} SET pi_gl_version='1.1.2', pi_homepage='http://www.glfusion.org' WHERE pi_name='".$pi_name."'",1);
    }

    INST_clearCache();

    // ************* TEST CODE - REMOVE *****
    // $upgradeError = 1;
    // $error = 'Problem 1<br>Problem 2<br>';
    // **************************************

    if ( $upgradeError ) {
        return _displayError(PLUGIN_UPGRADE_ERROR,'done',$error);
    }

    header('Location: success.php?type=upgrade&language=' . $language);
}

/**
 * Migrates a Geeklog 1.5+ site to glFusion
 *
 * @return  string          HTML
 *
 */
function INST_migrateGeeklog()
{
    global $_CONF, $_DB, $_TABLES, $_DB_table_prefix;

    // Do we have a valid Geeklog v1.5+ site:

    if ( !@file_exists('../../siteconfig.php') ) {
        return _displayError(INVALID_GEEKLOG_VERSION,'');
    }
    include '../../siteconfig.php';

    if ( !@file_exists($_CONF['path'].'db-config.php') ) {
        return _displayError(INVALID_GEEKLOG_VERSION,'');
    }
    include $_CONF['path'].'db-config.php';

    $db_handle = @mysql_connect($_DB_host, $_DB_user, $_DB_pass);
    if (!$db_handle) {
        return _displayError(DB_NO_CONNECT,'');
    }
    if ($db_handle) {
        $connected = @mysql_select_db($_DB_name, $db_handle);
    }
    if ( !$connected) {
        return _displayError(DB_NO_DATABASE,'');
    }

    include $_CONF['path'].'system/lib-database.php';

    // Peform a few basic check to ensure we are not trying to migrate a glFusion site.

    $result = DB_query("SELECT name FROM {$_TABLES['conf_values']} WHERE name='allow_embed_object'",1);
    if ( DB_numRows($result) > 0 ) {
        return _displayError(NO_MIGRATE_GLFUSION,'');
    }

    $result = DB_query("SELECT name FROM {$_TABLES['conf_values']} WHERE name='use_safe_html'",1);
    if ( DB_numRows($result) > 0 ) {
        return _displayError(NO_MIGRATE_GLFUSION,'');
    }

    $result = DB_query("SELECT * FROM {$_TABLES['vars']} WHERE name='glfusion'",1);
    if ( DB_numRows($result) > 0 ) {
        return _displayError(NO_MIGRATE_GLFUSION,'');
    }
/* ----------------------------------------------------------
    // setup the environment to match glFusion 1.0.0

    DB_query("ALTER TABLE {$_TABLES['syndication']} CHANGE type type varchar(30) NOT NULL default 'article'",1);
    DB_query("UPDATE {$_TABLES['syndication']} SET type = 'article' WHERE type = 'geeklog'",1);

    DB_query("UPDATE {$_TABLES['plugins']} SET pi_version = '1.0.2' WHERE pi_name = 'calendar'",1);
    DB_query("UPDATE {$_TABLES['plugins']} SET pi_version = '2.0.0' WHERE pi_name = 'links'",1);
    DB_query("UPDATE {$_TABLES['plugins']} SET pi_version = '2.0.1' WHERE pi_name = 'polls'",1);
    DB_query("UPDATE {$_TABLES['plugins']} SET pi_version = '1.1.1' WHERE pi_name = 'spamx'",1);
    DB_query("UPDATE {$_TABLES['plugins']} SET pi_version = '1.5.0' WHERE pi_name = 'staticpages'",1);

    DB_query("REPLACE INTO {$_TABLES['vars']} SET value='1.0.0' WHERE name='glfusion'",1);
--------------------------------------------------------------- */
    return INST_checkEnvironment();
}


/*
 * Start of the main program
 */

$_SYSTEM['no_cache_config']  = true;

/*
 * The driver, based on inputs received, we'll decide what to do and where to go
 */

$fusion_path    = strtr(__FILE__, '\\', '/'); // replace all '\' with '/'
for ($i = 0; $i < 4; $i++) {
    $remains = strrchr($fusion_path, '/');
    if ($remains === false) {
        break;
    } else {
        $fusion_path = substr($fusion_path, 0, -strlen($remains));
    }
}

if ( isset($_GLFUSION['language']) ) {
    $lng = $_GLFUSION['language'];
} else {
    $lng = 'english';
}
if ( isset($_POST['lang']) ) {
    $lng = $_POST['lang'];
}
if ( isset($_GET['lang']) ) {
    $lng = $_GET['lang'];
}

// sanitize value and check for file
$lng = preg_replace('/[^a-z0-9\-_]/', '', $lng);
if (!empty($lng) && is_file('language/' . $lng . '.php')) {
    $language = $lng;
} else {
    $language = 'english';
}

$_GLFUSION['language'] = $language;
require_once 'language/'.$language.'.php';

if ( isset($_POST['task']) ) {
    $mode = $_POST['task'];
} else {
    $mode = '';
}

if ( !isset($_GLFUSION['method'])) {
    $method = 'install';
} else {
    $method = $_GLFUSION['method'];
}

if ( isset($_POST['type']) ) {
    switch($_POST['type']) {
        case 'install' :
            $method = 'install';
            $mode   = 'pathsetting';
            break;
        case 'upgrade' :
            $method = 'upgrade';
            $mode   = 'startupgrade';
            break;
        case 'migrate' :
            $method = 'upgrade';
            $mode   = 'migrate';
            $_GLFUSION['migrate'] = 1;
            break;
    }
}

$_GLFUSION['method'] = $method;

switch($mode) {
    case 'migrate' :
        $pageBody = INST_migrateGeeklog();
        break;
    case 'pathsetting' :
        $pageBody = INST_getPathSetting();
        break;
    case 'gotpathsetting':
        $pageBody =   INST_gotPathSetting();
        break;
    case 'checkenvironment' :
        $pageBody = INST_checkEnvironment();
        break;
    case 'getsiteinformation' :
        $pageBody = INST_getSiteInformation();
        break;
    case 'gotsiteinformation' :
        $pageBody = INST_gotSiteInformation();
        break;
    case 'contentplugins' :
        $pageBody = INST_installAndContentPlugins();
        break;
    case 'installplugins' :
        require '../../lib-common.php';
        $pageBody = INST_doPluginInstall();
        break;
    case 'startupgrade' :
        if ( !@file_exists('../../siteconfig.php') ) {
            $pageBody = _displayError(SITECONFIG_NOT_FOUND,'');
        } else {
            require '../../siteconfig.php';
            require $_CONF['path'].'db-config.php';
            $_GLFUSION['dbconfig_path'] = $_CONF['path'];
            require_once $_CONF['path_system'].'lib-database.php';
            $version = INST_identifyglFusionVersion();
            if ($version == '' || $version == 'empty' ) {
                $pageBody = _displayError(CORE_UPGRADE_ERROR,'',$LANG_INSTALL['unable_to_find_ver']);
            } else {
                $pageBody = INST_checkEnvironment();
            }
        }
        break;
    case 'doupgrade' :
        if ( !@file_exists('../../siteconfig.php') ) {
            $pageBody = _displayError(SITECONFIG_NOT_FOUND,'');
        } else {
            require '../../siteconfig.php';
            require $_CONF['path'].'db-config.php';
            $_GLFUSION['dbconfig_path'] = $_CONF['path'];
            require $_CONF['path_system'] . 'lib-database.php';
            $pageBody = INST_doSiteUpgrade();
        }
        if ( $pageBody != '' ) {
            break;
        }
        // fall through here on purpose and process the plugin upgrades.....
        // at this point we have a fully updated database and core environment
    case 'dopluginupgrade' :
        require '../../lib-common.php';
        $pageBody = INST_doPluginUpgrade();
        break;
    case 'done' :
        $method = $_GLFUSION['method'];
        header('Location: success.php?type='.$method.'&language=' . $language);
        exit;
    default:
        $_GLFUSION['language'] = $language;
        $_GLFUSION['method'] = $method;
        $pageBody = INST_getLanguageTask( );
        break;
}

echo INST_header();
echo $pageBody;
echo INST_footer();
exit;
?>