<?php
/**
* glFusion CMS
*
* FileMgmt
*
* FileMgmt Plugin Configuration
*
* @license GNU General Public License version 2 or later
*     http://www.opensource.org/licenses/gpl-license.php
*
*  Copyright (C) 2017-2022 by the following authors:
*   Mark R. Evans   mark AT glfusion DOT org
*
*/

if (!defined ('GVERSION')) {
    die ('This file can not be used on its own.');
}

$filemgmtConfigData = array(
    array(
        'name' => 'sg_main',
        'default_value' => NULL,
        'type' => 'subgroup',
        'subgroup' => 0,
        'fieldset' => 0,
        'selection_array' => NULL,
        'sort' => 0,
        'set' => true,
        'group' => 'filemgmt',
    ),
    array(
        'name' => 'fs_public',
        'default_value' => NULL,
        'type' => 'fieldset',
        'subgroup' => 0,
        'fieldset' => 0,
        'selection_array' => NULL,
        'sort' => 0,
        'set' => true,
        'group' => 'filemgmt',
    ),
    array(
        'name' => 'perpage',
        'default_value' => '5',
        'type' => 'text',
        'subgroup' => 0,
        'fieldset' => 0,
        'selection_array' => 0,
        'sort' => 10,
        'set' => true,
        'group' => 'filemgmt',
    ),
    array(
        'name' => 'popular_download',
        'default_value' => '20',
        'type' => 'text',
        'subgroup' => 0,
        'fieldset' => 0,
        'selection_array' => 0,
        'sort' => 20,
        'set' => true,
        'group' => 'filemgmt',
    ),
    array(
        'name' => 'newdownloads',
        'default_value' => '10',
        'type' => 'text',
        'subgroup' => 0,
        'fieldset' => 0,
        'selection_array' => 0,
        'sort' => 30,
        'set' => true,
        'group' => 'filemgmt',
    ),
    array(
        'name' => 'dlreport',
        'default_value' => true,
        'type' => 'select',
        'subgroup' => 0,
        'fieldset' => 0,
        'selection_array' => 0,
        'sort' => 40,
        'set' => true,
        'group' => 'filemgmt',
    ),
    array(
        'name' => 'trimdesc',
        'default_value' => true,
        'type' => 'select',
        'subgroup' => 0,
        'fieldset' => 0,
        'selection_array' => 0,
        'sort' => 50,
        'set' => true,
        'group' => 'filemgmt',
    ),
    array(
        'name' => 'whatsnew',
        'default_value' => true,
        'type' => 'select',
        'subgroup' => 0,
        'fieldset' => 0,
        'selection_array' => 0,
        'sort' => 60,
        'set' => true,
        'group' => 'filemgmt',
    ),
    array(
        'name' => 'whatsnewperioddays',
        'default_value' => '14',
        'type' => 'text',
        'subgroup' => 0,
        'fieldset' => 0,
        'selection_array' => 0,
        'sort' => 70,
        'set' => true,
        'group' => 'filemgmt',
    ),
    array(
        'name' => 'whatsnewtitlelength',
        'default_value' => '20',
        'type' => 'text',
        'subgroup' => 0,
        'fieldset' => 0,
        'selection_array' => 0,
        'sort' => 80,
        'set' => true,
        'group' => 'filemgmt',
    ),
    array(
        'name' => 'showwhatsnewcomments',
        'default_value' => true,
        'type' => 'select',
        'subgroup' => 0,
        'fieldset' => 0,
        'selection_array' => 0,
        'sort' => 90,
        'set' => true,
        'group' => 'filemgmt',
    ),
    array(
        'name' => 'numcategoriesperrow',
        'default_value' => '2',
        'type' => 'text',
        'subgroup' => 0,
        'fieldset' => 0,
        'selection_array' => 0,
        'sort' => 100,
        'set' => true,
        'group' => 'filemgmt',
    ),
    array(
        'name' => 'numsubcategories2show',
        'default_value' => '5',
        'type' => 'text',
        'subgroup' => 0,
        'fieldset' => 0,
        'selection_array' => 0,
        'sort' => 110,
        'set' => true,
        'group' => 'filemgmt',
    ),
    array(
        'name' => 'displayblocks',
        'default_value' => false,
        'type' => 'select',
        'subgroup' => 0,
        'fieldset' => 0,
        'selection_array' => 0,
        'sort' => 120,
        'set' => true,
        'group' => 'filemgmt',
    ),

    // Access controls
    array(
        'name' => 'fm_access',
        'default_value' => NULL,
        'type' => 'fieldset',
        'subgroup' => 0,
        'fieldset' => 1,
        'selection_array' => NULL,
        'sort' => 10,
        'set' => true,
        'group' => 'filemgmt',
    ),
    array(
        'name' => 'selectpriv',
        'default_value' => false,
        'type' => 'select',
        'subgroup' => 0,
        'fieldset' => 1,
        'selection_array' => 0,
        'sort' => 10,
        'set' => true,
        'group' => 'filemgmt',
    ),
    array(
        'name' => 'uploadselect',
        'default_value' => true,
        'type' => 'select',
        'subgroup' => 0,
        'fieldset' => 1,
        'selection_array' => 0,
        'sort' => 20,
        'set' => true,
        'group' => 'filemgmt',
    ),
    array(
        'name' => 'uploadpublic',
        'default_value' => true,
        'type' => 'select',
        'subgroup' => 0,
        'fieldset' => 1,
        'selection_array' => 0,
        'sort' => 30,
        'set' => true,
        'group' => 'filemgmt',
    ),
    array(
        'name' => 'extensions_map',
        'default_value' => array(
            'php'   => 'phps',
            'pl'    => 'txt',
            'cgi'   => 'txt',
            'py'    => 'txt',
            'sh'    => 'txt',
            'html'  => 'txt',
            'htm'   => 'txt',
            'exe'   => 'reject',
        ),
        'type' => '*text',
        'subgroup' => 0,
        'fieldset' => 1,
        'selection_array' => 0,
        'sort' => 30,
        'set' => true,
        'group' => 'filemgmt',
    ),

    // General settings
    array(
        'name' => 'fm_general',
        'default_value' => NULL,
        'type' => 'fieldset',
        'subgroup' => 0,
        'fieldset' => 2,
        'selection_array' => NULL,
        'sort' => 2,
        'set' => true,
        'group' => 'filemgmt',
    ),
    array(
        'name' => 'useshots',
        'default_value' => true,
        'type' => 'select',
        'subgroup' => 0,
        'fieldset' => 2,
        'selection_array' => 0,
        'sort' => 10,
        'set' => true,
        'group' => 'filemgmt',
    ),
    array(
        'name' => 'shotwidth',
        'default_value' => '50',
        'type' => 'text',
        'subgroup' => 0,
        'fieldset' => 2,
        'selection_array' => 0,
        'sort' => 20,
        'set' => true,
        'group' => 'filemgmt',
    ),
    array(
        'name' => 'EmailOption',
        'default_value' => true,
        'type' => 'select',
        'subgroup' => 0,
        'fieldset' => 2,
        'selection_array' => 0,
        'sort' => 30,
        'set' => true,
        'group' => 'filemgmt',
    ),
    array(
        'name' => 'enable_rating',
        'default_value' => true,
        'type' => 'select',
        'subgroup' => 0,
        'fieldset' => 2,
        'selection_array' => 0,
        'sort' => 40,
        'set' => true,
        'group' => 'filemgmt',
    ),
    array(
        'name' => 'silent_edit_default',
        'default_value' => true,
        'type' => 'select',
        'subgroup' => 0,
        'fieldset' => 2,
        'selection_array' => 0,
        'sort' => 50,
        'set' => true,
        'group' => 'filemgmt',
    ),
    array(
        'name' => 'FileStore',
        'default_value' => '',
        'type' => 'text',
        'subgroup' => 0,
        'fieldset' => 2,
        'selection_array' => 0,
        'sort' => 60,
        'set' => true,
        'group' => 'filemgmt',
    ),
    array(
        'name' => 'SnapStore',
        'default_value' => '',
        'type' => 'text',
        'subgroup' => 0,
        'fieldset' => 2,
        'selection_array' => 0,
        'sort' => 70,
        'set' => true,
        'group' => 'filemgmt',
    ),
    array(
        'name' => 'SnapCat',
        'default_value' => '',
        'type' => 'text',
        'subgroup' => 0,
        'fieldset' => 2,
        'selection_array' => 0,
        'sort' => 80,
        'set' => true,
        'group' => 'filemgmt',
    ),
    array(
        'name' => 'FileStoreURL',
        'default_value' => '',
        'type' => 'text',
        'subgroup' => 0,
        'fieldset' => 2,
        'selection_array' => 0,
        'sort' => 90,
        'set' => true,
        'group' => 'filemgmt',
    ),
    array(
        'name' => 'FileSnapURL',
        'default_value' => '',
        'type' => 'text',
        'subgroup' => 0,
        'fieldset' => 2,
        'selection_array' => 0,
        'sort' => 100,
        'set' => true,
        'group' => 'filemgmt',
    ),
    array(
        'name' => 'SnapCatURL',
        'default_value' => '',
        'type' => 'text',
        'subgroup' => 0,
        'fieldset' => 2,
        'selection_array' => 0,
        'sort' => 110,
        'set' => true,
        'group' => 'filemgmt',
    ),
    array(
        'name' => 'outside_webroot',
        'default_value' => true,
        'type' => 'select',
        'subgroup' => 0,
        'fieldset' => 2,
        'selection_array' => 0,
        'sort' => 120,
        'set' => true,
        'group' => 'filemgmt',
    ),
);
