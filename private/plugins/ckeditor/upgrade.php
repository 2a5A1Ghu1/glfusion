<?php
// +--------------------------------------------------------------------------+
// | CKEditor Plugin - glFusion CMS                                           |
// +--------------------------------------------------------------------------+
// | upgrade.php                                                              |
// |                                                                          |
// | Upgrade routines                                                         |
// +--------------------------------------------------------------------------+
// | Copyright (C) 2014 by the following authors:                             |
// |                                                                          |
// | Mark R. Evans          mark AT glfusion DOT org                          |
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

require_once $_CONF['path'].'plugins/ckeditor/ckeditor.php';

function ckeditor_upgrade()
{
    global $_TABLES, $_CONF, $_CK_CONF;

    $currentVersion = DB_getItem($_TABLES['plugins'],'pi_version',"pi_name='ckeditor'");

    switch( $currentVersion ) {
        case "1.0.0" :
            require_once $_CONF['path_system'].'classes/config.class.php';
            $c = config::get_instance();
            $c->add('enable_block', 1,'select',0, 1, 0, 130, true, 'ckeditor');
        case "1.0.1" :
            require_once $_CONF['path_system'].'classes/config.class.php';
            $c = config::get_instance();
            $c->add('fs_filemanager_general', NULL, 'fieldset', 0, 2, NULL, 0, true, 'ckeditor');
            $c->add('filemanager_fileroot', '/images/library/', 'text', 0, 2, NULL, 20, true, 'ckeditor');
            $c->add('filemanager_per_user_dir', true, 'select', 0, 2, 1, 30, true, 'ckeditor');
            $c->add('filemanager_browse_only', false, 'select', 0, 2, 1, 40, true, 'ckeditor');
            $c->add('filemanager_default_view_mode', 'grid', 'select', 0, 2, 2, 50, true, 'ckeditor');
            $c->add('filemanager_show_confirmation', true, 'select', 0, 2, 1, 60, true, 'ckeditor');
            $c->add('filemanager_search_box', true, 'select', 0, 2, 1, 70, true, 'ckeditor');
            $c->add('filemanager_file_sorting', 'default', 'select', 0, 2, 3, 80, true, 'ckeditor');
            $c->add('filemanager_chars_only_latin', true, 'select', 0, 2, 1, 90, true, 'ckeditor');
            $c->add('filemanager_date_format', 'Y-m-d H:i:s', 'text', 0, 2, NULL, 100, true, 'ckeditor');
            $c->add('filemanager_show_thumbs', true, 'select', 0, 2, 1, 120, true, 'ckeditor');
            $c->add('filemanager_generate_thumbnails', true, 'select', 0, 2, 1, 130, true, 'ckeditor');
            $c->add('fs_filemanager_upload', NULL, 'fieldset', 0, 3, NULL, 0, true, 'ckeditor');
            $c->add('filemanager_upload_restrictions', 'jpg,jpeg,gif,png,svg,txt,pdf,odp,ods,odt,rtf,doc,docx,xls,xlsx,ppt,pptx,ogv,mp4,webm,ogg,mp3,wav', 'text', 0, 3, NULL, 10, true, 'ckeditor');
            $c->add('filemanager_upload_overwrite', false, 'select', 0, 3, 1, 20, true, 'ckeditor');
            $c->add('filemanager_upload_images_only', false, 'select', 0, 3, 1, 30, true, 'ckeditor');
            $c->add('filemanager_upload_file_size_limit', 16, 'text', 0, 3, NULL, 40, true, 'ckeditor');
            $c->add('filemanager_unallowed_files', '.htaccess,web.config', 'text', 0, 3, NULL, 50, true, 'ckeditor');
            $c->add('filemanager_unallowed_dirs', '_thumbs,.CDN_ACCESS_LOGS,cloudservers', 'text', 0, 3, NULL, 60, true, 'ckeditor');
            $c->add('filemanager_unallowed_files_regexp', '/^\\./uis', 'text', 0, 3, NULL, 70, true, 'ckeditor');
            $c->add('filemanager_unallowed_dirs_regexp', '/^\\./uis', 'text', 0, 3, NULL, 80, true, 'ckeditor');
            $c->add('fs_filemanager_images', NULL, 'fieldset', 0, 4, NULL, 0, true, 'ckeditor');
            $c->add('filemanager_images_ext', 'jpg,jpeg,gif,png,svg', 'text', 0, 4, NULL, 10, true, 'ckeditor');
            $c->add('fs_filemanager_videos', NULL, 'fieldset', 0, 5, NULL, 0, true, 'ckeditor');
            $c->add('filemanager_show_video_player', true, 'select', 0, 5, 1, 10, true, 'ckeditor');
            $c->add('filemanager_videos_ext', 'ogv,mp4,webm', 'text', 0, 5, NULL, 20, true, 'ckeditor');
            $c->add('filemanager_videos_player_width', 400, 'text', 0, 5, NULL, 30, true, 'ckeditor');
            $c->add('filemanager_videos_player_height', 222, 'text', 0, 5, NULL, 40, true, 'ckeditor');
            $c->add('fs_filemanager_audios', NULL, 'fieldset', 0, 6, NULL, 0, true, 'ckeditor');
            $c->add('filemanager_show_audio_player', true, 'select', 0, 6, 1, 10, true, 'ckeditor');
            $c->add('filemanager_audios_ext', 'ogg,mp3,wav', 'text', 0, 6, NULL, 20, true, 'ckeditor');
            $c->add('fs_filemanager_editor', NULL, 'fieldset', 0, 7, NULL, 0, true, 'ckeditor');
            $c->add('filemanager_edit_enabled', false, 'select', 0, 7, 1, 10, true, 'ckeditor');
            $c->add('filemanager_edit_linenumbers', true, 'select', 0, 7, 1, 20, true, 'ckeditor');
            $c->add('filemanager_edit_linewrapping', true, 'select', 0, 7, 1, 30, true, 'ckeditor');
            $c->add('filemanager_edit_codehighlight', false, 'select', 0, 7, 1, 40, true, 'ckeditor');
            $c->add('filemanager_edit_editext', 'txt,csv', 'text', 0, 7, NULL, 50, true, 'ckeditor');

        default :
            DB_query("UPDATE {$_TABLES['plugins']} SET pi_version='".$_CK_CONF['pi_version']."',pi_gl_version='".$_CK_CONF['gl_version']."' WHERE pi_name='ckeditor' LIMIT 1");
            break;
    }
    if ( DB_getItem($_TABLES['plugins'],'pi_version',"pi_name='ckeditor'") == $_CK_CONF['pi_version']) {
        return true;
    } else {
        return false;
    }
}
?>