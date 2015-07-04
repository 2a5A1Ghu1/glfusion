<?php
// +--------------------------------------------------------------------------+
// | Spam-X Plugin - glFusion CMS                                             |
// +--------------------------------------------------------------------------+
// | upgrade.php                                                              |
// |                                                                          |
// | Upgrade routines                                                         |
// +--------------------------------------------------------------------------+
// | Copyright (C) 2009-2015 by the following authors:                        |
// |                                                                          |
// | Mark R. Evans          mark AT glfusion DOT org                          |
// |                                                                          |
// | Copyright (C) 2000-2008 by the following authors:                        |
// |                                                                          |
// | Authors      Tom Willett     tomw AT pigstye DOT net                     |
// |              Dirk Haun       dirk AT haun-online DOT de                  |
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

if (!defined ('GVERSION')) {
    die ('This file can not be used on its own.');
}

function spamx_upgrade()
{
    global $_TABLES, $_CONF, $_SPX_CONF;

    $currentVersion = DB_getItem($_TABLES['plugins'],'pi_version',"pi_name='spamx'");

    switch( $currentVersion ) {
        case '1.1.0' :
        case '1.1.1' :
        case '1.1.2' :
        case '1.1.3' :
        case '1.1.4' :
        case '1.1.5' :
        case '1.1.6' :
        case '1.1.7' :
        case '1.1.8' :
        case '1.1.9' :
        case '1.2.0' :
            $c = config::get_instance();
            $c->add('fs_sfs', NULL, 'fieldset', 0, 1, NULL, 0, true, 'spamx');
            $c->add('sfs_username_check', false, 'select',0, 1, 1, 10, true, 'spamx');
            $c->add('sfs_email_check', true, 'select',0, 1, 1, 20, true, 'spamx');
            $c->add('sfs_ip_check', true, 'select',0, 1, 1, 30, true, 'spamx');
            $c->add('sfs_username_confidence', '99.00', 'text',0, 1, 1, 40, true, 'spamx');
            $c->add('sfs_email_confidence', '50.00', 'text',0, 1, 1, 50, true, 'spamx');
            $c->add('sfs_ip_confidence', '25.00', 'text',0, 1, 1, 60, true, 'spamx');
        default :
            DB_query("UPDATE {$_TABLES['plugins']} SET pi_version='".$_SPX_CONF['pi_version']."',pi_gl_version='".$_SPX_CONF['gl_version']."' WHERE pi_name='spamx' LIMIT 1");
            break;
    }
    if ( DB_getItem($_TABLES['plugins'],'pi_version',"pi_name='spamx'") == $_SPX_CONF['pi_version']) {
        return true;
    } else {
        return false;
    }
}
?>