<?php
// +--------------------------------------------------------------------------+
// | glFusion CMS                                                             |
// +--------------------------------------------------------------------------+
// | index.php                                                                |
// |                                                                          |
// | This is the admin index page that does nothing more that login you in.   |
// +--------------------------------------------------------------------------+
// | $Id::                                                                   $|
// +--------------------------------------------------------------------------+
// | Copyright (C) 2008 by the following authors:                             |
// |                                                                          |
// | Mark R. Evans          mark AT glfusion DOT org                          |
// | Joe Mucchiello         joe AT throwingdice DOT com                       |
// |                                                                          |
// | Based on the Geeklog CMS                                                 |
// | Copyright (C) 2000-2008 by the following authors:                        |
// |                                                                          |
// | Authors: Jason Whittenburg - jwhitten AT securitygeeks DOT com           |
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

require_once '../lib-common.php';
require_once 'auth.inc.php';

// MAIN
if (isset($_GET['mode']) && ($_GET['mode'] == 'logout')) {
    print COM_refresh($_CONF['site_url'] . '/users.php?mode=logout');
}

// this defines the amount of icons displayed next to another in the CC-block
define ('ICONS_PER_ROW', 6);

/**
* Renders an entry (icon) for the "Command and Control" center
*
* @param    template    $template   template to use
* @param    string      $url        URL the entry links to
* @param    string      $image      URL of the icon
* @param    string      $label      text to use under the icon
* @return   void
*
*/
function render_cc_item (&$template, $url = '', $image = '', $label = '')
{
    if (!empty ($url)) {
        $template->set_var ('page_url', $url);
        $template->set_var ('page_image', $image);
        $template->set_var ('option_label', $label);
        $template->set_var ('cell_width', ((int)(100 / ICONS_PER_ROW)) . '%');

        return $template->parse ('cc_main_options', 'ccitem', false);
    }

    return '';
}

/**
* Prints the command & control block at the top
*
* TODO: The moderation items should be displayed with the help of <ul><li>
* instead of div's.
*
*/
function commandcontrol()
{
    global $_CONF, $_TABLES, $LANG01, $LANG29, $LANG_LOGVIEW,$_IMAGE_TYPE, $_DB_dbms;

    $retval = '';

    $admin_templates = new Template($_CONF['path_layout'] . 'admin/moderation');
    $admin_templates->set_file (array ('cc'     => 'moderation.thtml',
                                       'ccrow'  => 'ccrow.thtml',
                                       'ccitem' => 'ccitem.thtml'));
    $admin_templates->set_var('xhtml', XHTML);
    $admin_templates->set_var('layout_url', $_CONF['layout_url']);
    $admin_templates->set_var('site_url', $_CONF['site_url']);
    $admin_templates->set_var('site_admin_url', $_CONF['site_admin_url']);

    $retval .= COM_startBlock ('glFusion ' . GVERSION . ' -- ' . $LANG29[34], '',
                               COM_getBlockTemplate ('_admin_block', 'header'));

    $showTrackbackIcon = (($_CONF['trackback_enabled'] ||
                          $_CONF['pingback_enabled'] || $_CONF['ping_enabled'])
                         && SEC_hasRights('story.ping'));
    $cc_arr = array(
                  array('condition' => SEC_hasRights('story.edit'),
                        'url' => $_CONF['site_admin_url'] . '/story.php',
                        'lang' => $LANG01[11], 'image' => '/images/icons/story.'),
                  array('condition' => SEC_hasRights('block.edit'),
                        'url' => $_CONF['site_admin_url'] . '/block.php',
                        'lang' => $LANG01[12], 'image' => '/images/icons/block.'),
                  array('condition' => SEC_hasRights('topic.edit'),
                        'url' => $_CONF['site_admin_url'] . '/topic.php',
                        'lang' => $LANG01[13], 'image' => '/images/icons/topic.'),
                  array('condition' => SEC_hasRights('user.edit'),
                        'url' => $_CONF['site_admin_url'] . '/user.php',
                        'lang' => $LANG01[17], 'image' => '/images/icons/user.'),
                  array('condition' => SEC_hasRights('group.edit'),
                        'url' => $_CONF['site_admin_url'] . '/group.php',
                        'lang' => $LANG01[96], 'image' => '/images/icons/group.'),
                  array('condition' => SEC_hasRights('user.mail'),
                        'url' => $_CONF['site_admin_url'] . '/mail.php',
                        'lang' => $LANG01[105], 'image' => '/images/icons/mail.'),
                  array('condition' => SEC_hasRights ('syndication.edit'),
                        'url' => $_CONF['site_admin_url'] . '/syndication.php',
                        'lang' => $LANG01[38], 'image' => '/images/icons/syndication.'),
                  array('condition' => $showTrackbackIcon,
                        'url' => $_CONF['site_admin_url'] . '/trackback.php',
                        'lang' => $LANG01[116], 'image' => '/images/icons/trackback.'),
                  array('condition' => SEC_hasRights('plugin.edit'),
                        'url' => $_CONF['site_admin_url'] . '/plugins.php',
                        'lang' => $LANG01[98], 'image' => '/images/icons/plugins.'),
                  array('condition' => SEC_inGroup('Root'),
                        'url' => $_CONF['site_admin_url'] . '/clearctl.php',
                        'lang' => $LANG01['ctl'], 'image' => '/images/icons/ctl.'),
                  array('condition' => SEC_inGroup('Root'),
                        'url' => $_CONF['site_admin_url'] . '/logview.php',
                        'lang' => $LANG_LOGVIEW['logview'], 'image' => '/images/icons/logview.')
    );
    $admin_templates->set_var('cc_icon_width', floor(100/ICONS_PER_ROW));

    for ($i = 0; $i < count ($cc_arr); $i++) {
        if ($cc_arr[$i]['condition']) {
            $item = render_cc_item ($admin_templates, $cc_arr[$i]['url'],
                    $_CONF['layout_url'] . $cc_arr[$i]['image'] . $_IMAGE_TYPE,
                    $cc_arr[$i]['lang']);
            $items[$cc_arr[$i]['lang']] = $item;
        }
    }

    // now add the plugins
    $plugins = PLG_getCCOptions ();
    for ($i = 0; $i < count ($plugins); $i++) {
        $cur_plugin = current ($plugins);
        $item = render_cc_item ($admin_templates, $cur_plugin->adminurl,
                        $cur_plugin->plugin_image, $cur_plugin->adminlabel);
        $items[$cur_plugin->adminlabel] = $item;
        next ($plugins);
    }

    // and finally, add the remaining admin items
    $cc_arr = array(
        array('condition' => ($_CONF['allow_mysqldump'] == 1) && ($_DB_dbms == 'mysql') && SEC_inGroup ('Root'),
            'url' => $_CONF['site_admin_url'] . '/database.php',
            'lang' => $LANG01[103], 'image' => '/images/icons/database.'),
        array('condition' => ($_CONF['link_documentation'] == 1),
            'url' => $_CONF['site_url'] . '/docs/',
            'lang' => $LANG01[113], 'image' => '/images/icons/docs.'),
        array('condition' => (SEC_inGroup ('Root') &&
                              ($_CONF['link_versionchecker'] == 1)),
            'url' => 'http://www.glfusion.org/versionchecker.php?version=' . GVERSION,
            'lang' => $LANG01[107], 'image' => '/images/icons/versioncheck.'),
        array('condition' => (SEC_inGroup ('Root')),
            'url'=>$_CONF['site_admin_url'] . '/configuration.php',
            'lang' => $LANG01[129], 'image' => '/images/icons/configuration.'),
        array('condition' => SEC_isModerator(),
            'url'=>$_CONF['site_admin_url'] . '/moderation.php',
            'lang' => $LANG01[10], 'image' => '/images/icons/moderation.'),
    );

    for ($i = 0; $i < count ($cc_arr); $i++) {
        if ($cc_arr[$i]['condition']) {
            $item = render_cc_item ($admin_templates, $cc_arr[$i]['url'],
                    $_CONF['layout_url'] . $cc_arr[$i]['image'] . $_IMAGE_TYPE,
                    $cc_arr[$i]['lang']);
            $items[$cc_arr[$i]['lang']] = $item;
        }
    }

    if ($_CONF['sort_admin']) {
        uksort ($items, 'strcasecmp');
    }
     // logout is always the last entry
    $item = render_cc_item ($admin_templates,
                    $_CONF['site_url'] . '/users.php?mode=logout',
                    $_CONF['layout_url'] . '/images/icons/logout.' . $_IMAGE_TYPE,
                    $LANG01[35]);
    $items[$LANG01[35]] = $item;
    reset($items);
    $cols = 0;
    $cc_main_options = '';
    foreach ($items as $key => $val) {
        $cc_main_options .= $val . LB;
        $cols++;
        if ($cols == ICONS_PER_ROW) {
            $admin_templates->set_var('cc_main_options', $cc_main_options);
            $admin_templates->parse ('cc_rows', 'ccrow', true);
            $admin_templates->clear_var ('cc_main_options');
            $cc_main_options = '';
            $cols = 0;
        }
    }

    if($cols > 0) {
        // "flush out" any unrendered entries
        $admin_templates->set_var('cc_main_options', $cc_main_options);
        $admin_templates->parse ('cc_rows', 'ccrow', true);
        $admin_templates->clear_var ('cc_main_options');
    }

    $retval .= $admin_templates->finish($admin_templates->parse('output','cc'));

    $retval .= COM_endBlock (COM_getBlockTemplate ('_admin_block', 'footer'));

    return $retval;
}

/**
* Display a reminder to execute the security check script
*
*/
function security_check_reminder()
{
    global $_CONF, $_TABLES, $_IMAGE_TYPE, $MESSAGE;

    $retval = '';

    if (!SEC_inGroup ('Root')) {
        return $retval;
    }

    $done = DB_getItem ($_TABLES['vars'], 'value', "name = 'security_check'");
    if ($done != 1) {
        $retval .= COM_showMessage(92);
    }

    return $retval;
}

// MAIN


$display .= COM_siteHeader('menu', $LANG29[34]);
$display .= security_check_reminder();
$display .= commandcontrol();
$display .= COM_siteFooter();

echo $display;

?>