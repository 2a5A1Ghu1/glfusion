<?php
/**
* glFusion CMS
*
* glFusion Base Configuration
*
* @license GNU General Public License version 2 or later
*     http://www.opensource.org/licenses/gpl-license.php
*
*  Copyright (C) 2016-2021 by the following authors:
*   Mark R. Evans   mark AT glfusion DOT org
*
*/

if (!defined ('GVERSION')) {
    die ('This file can not be used on its own.');
}

$coreConfigData = array(
    array(
    	'name' => 'sg_site',
    	'default_value' => NULL,
    	'type' => 'subgroup',
    	'subgroup' => 0,
    	'fieldset' => 0,
    	'selection_array' => NULL,
    	'sort' => 0,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'fs_site',
    	'default_value' => NULL,
    	'type' => 'fieldset',
    	'subgroup' => 0,
    	'fieldset' => 0,
    	'selection_array' => NULL,
    	'sort' => 0,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'site_url',
    	'default_value' => '',
    	'type' => 'text',
    	'subgroup' => 0,
    	'fieldset' => 0,
    	'selection_array' => NULL,
    	'sort' => 10,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'site_admin_url',
    	'default_value' => '',
    	'type' => 'text',
    	'subgroup' => 0,
    	'fieldset' => 0,
    	'selection_array' => NULL,
    	'sort' => 20,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'site_name',
    	'default_value' => '',
    	'type' => 'text',
    	'subgroup' => 0,
    	'fieldset' => 0,
    	'selection_array' => NULL,
    	'sort' => 30,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'site_slogan',
    	'default_value' => '',
    	'type' => 'text',
    	'subgroup' => 0,
    	'fieldset' => 0,
    	'selection_array' => NULL,
    	'sort' => 40,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'site_disabled_msg',
    	'default_value' => NULL,
    	'type' => 'text',
    	'subgroup' => 0,
    	'fieldset' => 0,
    	'selection_array' => NULL,
    	'sort' => 50,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'maintenance_mode',
    	'default_value' => 0,
    	'type' => 'select',
    	'subgroup' => 0,
    	'fieldset' => 0,
    	'selection_array' => 0,
    	'sort' => 60,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'copyrightyear',
    	'default_value' => 2016,
    	'type' => 'text',
    	'subgroup' => 0,
    	'fieldset' => 0,
    	'selection_array' => NULL,
    	'sort' => 70,
    	'set' => FALSE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'url_rewrite',
    	'default_value' => '',
    	'type' => 'select',
    	'subgroup' => 0,
    	'fieldset' => 0,
    	'selection_array' => 1,
    	'sort' => 80,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'fb_appid',
    	'default_value' => '',
    	'type' => 'text',
    	'subgroup' => 0,
    	'fieldset' => 0,
    	'selection_array' => NULL,
    	'sort' => 90,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'log_level',
    	'default_value' => '300',
    	'type' => 'select',
    	'subgroup' => 0,
    	'fieldset' => 0,
    	'selection_array' => 36,
    	'sort' => 90,
    	'set' => TRUE,
    	'group' => 'Core'
    ),

    // mail fieldset

    array(
    	'name' => 'fs_mail',
    	'default_value' => NULL,
    	'type' => 'fieldset',
    	'subgroup' => 0,
    	'fieldset' => 1,
    	'selection_array' => NULL,
    	'sort' => 0,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'site_mail',
    	'default_value' => '',
    	'type' => 'text',
    	'subgroup' => 0,
    	'fieldset' => 1,
    	'selection_array' => NULL,
    	'sort' => 10,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'noreply_mail',
    	'default_value' => '',
    	'type' => 'text',
    	'subgroup' => 0,
    	'fieldset' => 1,
    	'selection_array' => NULL,
    	'sort' => 20,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'mail_backend',
    	'default_value' => 'mail',
    	'type' => 'select',
    	'subgroup' => 0,
    	'fieldset' => 1,
    	'selection_array' => 20,
    	'sort' => 30,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'mail_sendmail_path',
    	'default_value' => '',
    	'type' => 'text',
    	'subgroup' => 0,
    	'fieldset' => 1,
    	'selection_array' => NULL,
    	'sort' => 40,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'mail_sendmail_args',
    	'default_value' => '',
    	'type' => 'text',
    	'subgroup' => 0,
    	'fieldset' => 1,
    	'selection_array' => NULL,
    	'sort' => 50,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'mail_smtp_host',
    	'default_value' => '',
    	'type' => 'text',
    	'subgroup' => 0,
    	'fieldset' => 1,
    	'selection_array' => NULL,
    	'sort' => 60,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'mail_smtp_port',
    	'default_value' => 25,
    	'type' => 'text',
    	'subgroup' => 0,
    	'fieldset' => 1,
    	'selection_array' => NULL,
    	'sort' => 70,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'mail_smtp_auth',
    	'default_value' => '',
    	'type' => 'select',
    	'subgroup' => 0,
    	'fieldset' => 1,
    	'selection_array' => 0,
    	'sort' => 80,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'mail_smtp_username',
    	'default_value' => '',
    	'type' => 'text',
    	'subgroup' => 0,
    	'fieldset' => 1,
    	'selection_array' => NULL,
    	'sort' => 90,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'mail_smtp_password',
    	'default_value' => '',
    	'type' => 'passwd',
    	'subgroup' => 0,
    	'fieldset' => 1,
    	'selection_array' => NULL,
    	'sort' => 100,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'mail_smtp_secure',
    	'default_value' => 'none',
    	'type' => 'select',
    	'subgroup' => 0,
    	'fieldset' => 1,
    	'selection_array' => 21,
    	'sort' => 110,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'use_from_site_mail',
    	'default_value' => '',
    	'type' => 'select',
    	'subgroup' => 0,
    	'fieldset' => 1,
    	'selection_array' => 0,
    	'sort' => 120,
    	'set' => TRUE,
    	'group' => 'Core'
    ),

    // syndication fieldset - site tab

    array(
    	'name' => 'fs_syndication',
    	'default_value' => NULL,
    	'type' => 'fieldset',
    	'subgroup' => 0,
    	'fieldset' => 2,
    	'selection_array' => NULL,
    	'sort' => 0,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'backend',
    	'default_value' => 1,
    	'type' => 'select',
    	'subgroup' => 0,
    	'fieldset' => 2,
    	'selection_array' => 0,
    	'sort' => 10,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'rdf_file',
    	'default_value' => 'site.rss',
    	'type' => 'text',
    	'subgroup' => 0,
    	'fieldset' => 2,
    	'selection_array' => NULL,
    	'sort' => 20,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'rdf_limit',
    	'default_value' => 10,
    	'type' => 'text',
    	'subgroup' => 0,
    	'fieldset' => 2,
    	'selection_array' => NULL,
    	'sort' => 30,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'rdf_storytext',
    	'default_value' => 1,
    	'type' => 'text',
    	'subgroup' => 0,
    	'fieldset' => 2,
    	'selection_array' => NULL,
    	'sort' => 40,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'rdf_language',
    	'default_value' => 'en-gb',
    	'type' => 'text',
    	'subgroup' => 0,
    	'fieldset' => 2,
    	'selection_array' => NULL,
    	'sort' => 50,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'syndication_max_headlines',
    	'default_value' => 0,
    	'type' => 'text',
    	'subgroup' => 0,
    	'fieldset' => 2,
    	'selection_array' => NULL,
    	'sort' => 60,
    	'set' => TRUE,
    	'group' => 'Core'
    ),



    // search fieldset - site tab

    array(
    	'name' => 'fs_search',
    	'default_value' => NULL,
    	'type' => 'fieldset',
    	'subgroup' => 0,
    	'fieldset' => 4,
    	'selection_array' => NULL,
    	'sort' => 0,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'search_style',
    	'default_value' => 'google',
    	'type' => 'select',
    	'subgroup' => 0,
    	'fieldset' => 4,
    	'selection_array' => 18,
    	'sort' => 10,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'search_limits',
    	'default_value' => '10,25,50,100',
    	'type' => 'text',
    	'subgroup' => 0,
    	'fieldset' => 4,
    	'selection_array' => NULL,
    	'sort' => 20,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'num_search_results',
    	'default_value' => 10,
    	'type' => 'text',
    	'subgroup' => 0,
    	'fieldset' => 4,
    	'selection_array' => NULL,
    	'sort' => 30,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'search_show_num',
    	'default_value' => '1',
    	'type' => 'select',
    	'subgroup' => 0,
    	'fieldset' => 4,
    	'selection_array' => 1,
    	'sort' => 40,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'search_show_type',
    	'default_value' => '1',
    	'type' => 'select',
    	'subgroup' => 0,
    	'fieldset' => 4,
    	'selection_array' => 1,
    	'sort' => 50,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'search_show_user',
    	'default_value' => '1',
    	'type' => 'select',
    	'subgroup' => 0,
    	'fieldset' => 4,
    	'selection_array' => 1,
    	'sort' => 60,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'search_show_hits',
    	'default_value' => '1',
    	'type' => 'select',
    	'subgroup' => 0,
    	'fieldset' => 4,
    	'selection_array' => 1,
    	'sort' => 70,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'search_no_data',
    	'default_value' => 'Not available...',
    	'type' => 'text',
    	'subgroup' => 0,
    	'fieldset' => 4,
    	'selection_array' => NULL,
    	'sort' => 80,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'search_separator',
    	'default_value' => ' > ',
    	'type' => 'text',
    	'subgroup' => 0,
    	'fieldset' => 4,
    	'selection_array' => NULL,
    	'sort' => 90,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'search_def_keytype',
    	'default_value' => 'phrase',
    	'type' => 'select',
    	'subgroup' => 0,
    	'fieldset' => 4,
    	'selection_array' => 19,
    	'sort' => 100,
    	'set' => TRUE,
    	'group' => 'Core'
    ),

    // update fieldset - site tab

    array(
    	'name' => 'fs_update',
    	'default_value' => NULL,
    	'type' => 'fieldset',
    	'subgroup' => 0,
    	'fieldset' => 5,
    	'selection_array' => NULL,
    	'sort' => 0,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'update_check_interval',
    	'default_value' => 86400,
    	'type' => 'select',
    	'subgroup' => 0,
    	'fieldset' => 5,
    	'selection_array' => 29,
    	'sort' => 10,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'send_site_data',
    	'default_value' => '1',
    	'type' => 'select',
    	'subgroup' => 0,
    	'fieldset' => 5,
    	'selection_array' => 1,
    	'sort' => 20,
    	'set' => TRUE,
    	'group' => 'Core'
    ),

    // Story SubGroup

    array(
    	'name' => 'sg_stories',
    	'default_value' => NULL,
    	'type' => 'subgroup',
    	'subgroup' => 1,
    	'fieldset' => 0,
    	'selection_array' => NULL,
    	'sort' => 0,
    	'set' => TRUE,
    	'group' => 'Core'
    ),

    // story fieldset - story subgroup

    array(
    	'name' => 'fs_story',
    	'default_value' => NULL,
    	'type' => 'fieldset',
    	'subgroup' => 1,
    	'fieldset' => 1,
    	'selection_array' => NULL,
    	'sort' => 0,
    	'set' => TRUE,
    	'group' => 'Core'
    ),

// reorg
    array(
    	'name' => 'fset_story_display',
    	'default_value' => NULL,
    	'type' => 'fset',
    	'subgroup' => 1,
    	'fieldset' => 1,
    	'selection_array' => NULL,
    	'sort' => 10,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'limitnews',
    	'default_value' => 10,
    	'type' => 'text',
    	'subgroup' => 1,
    	'fieldset' => 1,
    	'selection_array' => NULL,
    	'sort' => 20,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'infinite_scroll',
    	'default_value' => 1,
    	'type' => 'select',
    	'subgroup' => 1,
    	'fieldset' => 1,
    	'selection_array' => 0,
    	'sort' => 30,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'minnews',
    	'default_value' => 1,
    	'type' => 'text',
    	'subgroup' => 1,
    	'fieldset' => 1,
    	'selection_array' => NULL,
    	'sort' => 40,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
     array(
    	'name' => 'contributedbyline',
    	'default_value' => 1,
    	'type' => 'select',
    	'subgroup' => 1,
    	'fieldset' => 1,
    	'selection_array' => 0,
    	'sort' => 50,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'hidestorydate',
    	'default_value' => 0,
    	'type' => 'select',
    	'subgroup' => 1,
    	'fieldset' => 1,
    	'selection_array' => 0,
    	'sort' => 60,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'hideviewscount',
    	'default_value' => 0,
    	'type' => 'select',
    	'subgroup' => 1,
    	'fieldset' => 1,
    	'selection_array' => 0,
    	'sort' => 70,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'hideemailicon',
    	'default_value' => 0,
    	'type' => 'select',
    	'subgroup' => 1,
    	'fieldset' => 1,
    	'selection_array' => 0,
    	'sort' => 80,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'hideprintericon',
    	'default_value' => 0,
    	'type' => 'select',
    	'subgroup' => 1,
    	'fieldset' => 1,
    	'selection_array' => 0,
    	'sort' => 90,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'article_image_align',
    	'default_value' => 'right',
    	'type' => 'select',
    	'subgroup' => 1,
    	'fieldset' => 1,
    	'selection_array' => 8,
    	'sort' => 100,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'show_topic_icon',
    	'default_value' => 1,
    	'type' => 'select',
    	'subgroup' => 1,
    	'fieldset' => 1,
    	'selection_array' => 0,
    	'sort' => 110,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'hide_no_news_msg',
    	'default_value' => 0,
    	'type' => 'select',
    	'subgroup' => 1,
    	'fieldset' => 1,
    	'selection_array' => 0,
    	'sort' => 120,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'hide_main_page_navigation',
    	'default_value' => 0,
    	'type' => 'select',
    	'subgroup' => 1,
    	'fieldset' => 1,
    	'selection_array' => 0,
    	'sort' => 130,
    	'set' => TRUE,
    	'group' => 'Core'
    ),

// end of story display fset

// story administration fset
    array(
    	'name' => 'fset_story_administration',
    	'default_value' => NULL,
    	'type' => 'fset',
    	'subgroup' => 1,
    	'fieldset' => 1,
    	'selection_array' => NULL,
    	'sort' => 150,
    	'set' => TRUE,
    	'group' => 'Core'
    ),

    array(
    	'name' => 'maximagesperarticle',
    	'default_value' => 5,
    	'type' => 'text',
    	'subgroup' => 1,
    	'fieldset' => 1,
    	'selection_array' => NULL,
    	'sort' => 160,
    	'set' => TRUE,
    	'group' => 'Core'
    ),

    array(
    	'name' => 'story_sort_by',
    	'default_value' => 'date',
    	'type' => 'select',
    	'subgroup' => 1,
    	'fieldset' => 1,
    	'selection_array' => 33,
    	'sort' => 170,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'story_sort_dir',
    	'default_value' => 'DESC',
    	'type' => 'select',
    	'subgroup' => 1,
    	'fieldset' => 1,
    	'selection_array' => 32,
    	'sort' => 180,
    	'set' => TRUE,
    	'group' => 'Core'
    ),

    array(
    	'name' => 'default_story_editor',
    	'default_value' => 1,
    	'type' => 'select',
    	'subgroup' => 1,
    	'fieldset' => 1,
    	'selection_array' => 34,
    	'sort' => 190,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'rating_enabled',
    	'default_value' => 1,
    	'type' => 'select',
    	'subgroup' => 1,
    	'fieldset' => 1,
    	'selection_array' => 24,
    	'sort' => 200,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'allow_page_breaks',
    	'default_value' => 1,
    	'type' => 'select',
    	'subgroup' => 1,
    	'fieldset' => 1,
    	'selection_array' => 0,
    	'sort' => 210,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'page_break_comments',
    	'default_value' => 'last',
    	'type' => 'select',
    	'subgroup' => 1,
    	'fieldset' => 1,
    	'selection_array' => 7,
    	'sort' => 220,
    	'set' => TRUE,
    	'group' => 'Core'
    ),

    array(
    	'name' => 'draft_flag',
    	'default_value' => 0,
    	'type' => 'select',
    	'subgroup' => 1,
    	'fieldset' => 1,
    	'selection_array' => 0,
    	'sort' => 230,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'frontpage',
    	'default_value' => 1,
    	'type' => 'select',
    	'subgroup' => 1,
    	'fieldset' => 1,
    	'selection_array' => 0,
    	'sort' => 240,
    	'set' => TRUE,
    	'group' => 'Core'
    ),

    array(
    	'name' => 'onlyrootfeatures',
    	'default_value' => 0,
    	'type' => 'select',
    	'subgroup' => 1,
    	'fieldset' => 1,
    	'selection_array' => 0,
    	'sort' => 250,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'aftersave_story',
    	'default_value' => 'list',
    	'type' => 'select',
    	'subgroup' => 1,
    	'fieldset' => 1,
    	'selection_array' => 9,
    	'sort' => 260,
    	'set' => TRUE,
    	'group' => 'Core'
    ),

    // end of story_administration fset

    // trackback fieldset - story subgroup

    array(
    	'name' => 'fs_trackback',
    	'default_value' => NULL,
    	'type' => 'fieldset',
    	'subgroup' => 1,
    	'fieldset' => 2,
    	'selection_array' => NULL,
    	'sort' => 0,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'trackback_enabled',
    	'default_value' => '0',
    	'type' => 'select',
    	'subgroup' => 1,
    	'fieldset' => 2,
    	'selection_array' => 1,
    	'sort' => 10,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'trackback_code',
    	'default_value' => 0,
    	'type' => 'select',
    	'subgroup' => 1,
    	'fieldset' => 2,
    	'selection_array' => 3,
    	'sort' => 20,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'trackbackspeedlimit',
    	'default_value' => 300,
    	'type' => 'text',
    	'subgroup' => 1,
    	'fieldset' => 2,
    	'selection_array' => NULL,
    	'sort' => 30,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'check_trackback_link',
    	'default_value' => 2,
    	'type' => 'select',
    	'subgroup' => 1,
    	'fieldset' => 2,
    	'selection_array' => 4,
    	'sort' => 40,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'multiple_trackbacks',
    	'default_value' => 0,
    	'type' => 'select',
    	'subgroup' => 1,
    	'fieldset' => 2,
    	'selection_array' => 2,
    	'sort' => 50,
    	'set' => TRUE,
    	'group' => 'Core'
    ),

    // pingback fieldset - story subgroup

    array(
    	'name' => 'fs_pingback',
    	'default_value' => NULL,
    	'type' => 'fieldset',
    	'subgroup' => 1,
    	'fieldset' => 3,
    	'selection_array' => NULL,
    	'sort' => 0,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'pingback_enabled',
    	'default_value' => '0',
    	'type' => 'select',
    	'subgroup' => 1,
    	'fieldset' => 3,
    	'selection_array' => 1,
    	'sort' => 10,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'pingback_excerpt',
    	'default_value' => '1',
    	'type' => 'select',
    	'subgroup' => 1,
    	'fieldset' => 3,
    	'selection_array' => 1,
    	'sort' => 20,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'pingback_self',
    	'default_value' => 0,
    	'type' => 'select',
    	'subgroup' => 1,
    	'fieldset' => 3,
    	'selection_array' => 13,
    	'sort' => 30,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'ping_enabled',
    	'default_value' => '0',
    	'type' => 'select',
    	'subgroup' => 1,
    	'fieldset' => 3,
    	'selection_array' => 1,
    	'sort' => 40,
    	'set' => TRUE,
    	'group' => 'Core'
    ),

    // Theme Sub group

    array(
    	'name' => 'sg_theme',
    	'default_value' => NULL,
    	'type' => 'subgroup',
    	'subgroup' => 2,
    	'fieldset' => 0,
    	'selection_array' => NULL,
    	'sort' => 0,
    	'set' => TRUE,
    	'group' => 'Core'
    ),

    // theme fieldset - theme subgroup

    array(
    	'name' => 'fs_theme',
    	'default_value' => NULL,
    	'type' => 'fieldset',
    	'subgroup' => 2,
    	'fieldset' => 1,
    	'selection_array' => NULL,
    	'sort' => 0,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'theme',
    	'default_value' => 'cms',
    	'type' => 'select',
    	'subgroup' => 2,
    	'fieldset' => 1,
    	'selection_array' => NULL,
    	'sort' => 10,
    	'set' => TRUE,
    	'group' => 'Core'
    ),

     array(
    	'name' => 'show_right_blocks',
    	'default_value' => '1',
    	'type' => 'select',
    	'subgroup' => 2,
    	'fieldset' => 1,
    	'selection_array' => 1,
    	'sort' => 30,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'showfirstasfeatured',
    	'default_value' => 0,
    	'type' => 'select',
    	'subgroup' => 2,
    	'fieldset' => 1,
    	'selection_array' => 0,
    	'sort' => 40,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'allow_user_themes',
    	'default_value' => 0,
    	'type' => 'select',
    	'subgroup' => 2,
    	'fieldset' => 1,
    	'selection_array' => 0,
    	'sort' => 50,
    	'set' => TRUE,
    	'group' => 'Core'
    ),

    // advanced tab
    array(
    	'name' => 'fs_theme_advanced',
    	'default_value' => NULL,
    	'type' => 'fieldset',
    	'subgroup' => 2,
    	'fieldset' => 2,
    	'selection_array' => NULL,
    	'sort' => 0,
    	'set' => TRUE,
    	'group' => 'Core'
    ),

    array(
    	'name' => 'compress_css',
    	'default_value' => '1',
    	'type' => 'select',
    	'subgroup' => 2,
    	'fieldset' => 2,
    	'selection_array' => 0,
    	'sort' => 30,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'template_comments',
    	'default_value' => '',
    	'type' => 'select',
    	'subgroup' => 2,
    	'fieldset' => 2,
    	'selection_array' => 0,
    	'sort' => 40,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'fs_caching',
    	'default_value' => NULL,
    	'type' => 'fieldset',
    	'subgroup' => 2,
    	'fieldset' => 3,
    	'selection_array' => NULL,
    	'sort' => 0,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'sg_blocks',
    	'default_value' => NULL,
    	'type' => 'subgroup',
    	'subgroup' => 3,
    	'fieldset' => 0,
    	'selection_array' => NULL,
    	'sort' => 0,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'fs_admin_block',
    	'default_value' => NULL,
    	'type' => 'fieldset',
    	'subgroup' => 3,
    	'fieldset' => 1,
    	'selection_array' => NULL,
    	'sort' => 0,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'sort_admin',
    	'default_value' => '1',
    	'type' => 'select',
    	'subgroup' => 3,
    	'fieldset' => 1,
    	'selection_array' => 1,
    	'sort' => 20,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'link_documentation',
    	'default_value' => 1,
    	'type' => 'select',
    	'subgroup' => 3,
    	'fieldset' => 1,
    	'selection_array' => 0,
    	'sort' => 20,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'link_versionchecker',
    	'default_value' => 1,
    	'type' => 'select',
    	'subgroup' => 3,
    	'fieldset' => 1,
    	'selection_array' => 0,
    	'sort' => 30,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'hide_adminmenu',
    	'default_value' => '1',
    	'type' => 'select',
    	'subgroup' => 3,
    	'fieldset' => 1,
    	'selection_array' => 1,
    	'sort' => 40,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'fs_topics_block',
    	'default_value' => NULL,
    	'type' => 'fieldset',
    	'subgroup' => 3,
    	'fieldset' => 2,
    	'selection_array' => NULL,
    	'sort' => 0,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'sortmethod',
    	'default_value' => 'sortnum',
    	'type' => 'select',
    	'subgroup' => 3,
    	'fieldset' => 2,
    	'selection_array' => 15,
    	'sort' => 10,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'showstorycount',
    	'default_value' => 1,
    	'type' => 'select',
    	'subgroup' => 3,
    	'fieldset' => 2,
    	'selection_array' => 0,
    	'sort' => 20,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'showsubmissioncount',
    	'default_value' => 1,
    	'type' => 'select',
    	'subgroup' => 3,
    	'fieldset' => 2,
    	'selection_array' => 0,
    	'sort' => 30,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'hide_home_link',
    	'default_value' => 0,
    	'type' => 'select',
    	'subgroup' => 3,
    	'fieldset' => 2,
    	'selection_array' => 0,
    	'sort' => 40,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'fs_whosonline_block',
    	'default_value' => NULL,
    	'type' => 'fieldset',
    	'subgroup' => 3,
    	'fieldset' => 3,
    	'selection_array' => NULL,
    	'sort' => 0,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'whosonline_threshold',
    	'default_value' => 300,
    	'type' => 'text',
    	'subgroup' => 3,
    	'fieldset' => 3,
    	'selection_array' => NULL,
    	'sort' => 10,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'whosonline_anonymous',
    	'default_value' => 0,
    	'type' => 'select',
    	'subgroup' => 3,
    	'fieldset' => 3,
    	'selection_array' => 0,
    	'sort' => 20,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'whosonline_photo',
    	'default_value' => '',
    	'type' => 'select',
    	'subgroup' => 3,
    	'fieldset' => 3,
    	'selection_array' => 0,
    	'sort' => 30,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'fs_whatsnew_block',
    	'default_value' => NULL,
    	'type' => 'fieldset',
    	'subgroup' => 3,
    	'fieldset' => 4,
    	'selection_array' => NULL,
    	'sort' => 0,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'newstoriesinterval',
    	'default_value' => 86400,
    	'type' => 'text',
    	'subgroup' => 3,
    	'fieldset' => 4,
    	'selection_array' => NULL,
    	'sort' => 10,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'newcommentsinterval',
    	'default_value' => 172800,
    	'type' => 'text',
    	'subgroup' => 3,
    	'fieldset' => 4,
    	'selection_array' => NULL,
    	'sort' => 20,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'newtrackbackinterval',
    	'default_value' => 172800,
    	'type' => 'text',
    	'subgroup' => 3,
    	'fieldset' => 4,
    	'selection_array' => NULL,
    	'sort' => 30,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'hidenewstories',
    	'default_value' => 0,
    	'type' => 'select',
    	'subgroup' => 3,
    	'fieldset' => 4,
    	'selection_array' => 0,
    	'sort' => 40,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'hidenewcomments',
    	'default_value' => 0,
    	'type' => 'select',
    	'subgroup' => 3,
    	'fieldset' => 4,
    	'selection_array' => 0,
    	'sort' => 50,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'hidenewtrackbacks',
    	'default_value' => 0,
    	'type' => 'select',
    	'subgroup' => 3,
    	'fieldset' => 4,
    	'selection_array' => 0,
    	'sort' => 60,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'hidenewplugins',
    	'default_value' => 0,
    	'type' => 'select',
    	'subgroup' => 3,
    	'fieldset' => 4,
    	'selection_array' => 0,
    	'sort' => 70,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'hideemptyblock',
    	'default_value' => 0,
    	'type' => 'select',
    	'subgroup' => 3,
    	'fieldset' => 4,
    	'selection_array' => 0,
    	'sort' => 80,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'title_trim_length',
    	'default_value' => 200,
    	'type' => 'text',
    	'subgroup' => 3,
    	'fieldset' => 4,
    	'selection_array' => NULL,
    	'sort' => 90,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'whatsnew_cache_time',
    	'default_value' => 3600,
    	'type' => 'text',
    	'subgroup' => 3,
    	'fieldset' => 4,
    	'selection_array' => NULL,
    	'sort' => 100,
    	'set' => TRUE,
    	'group' => 'Core'
    ),

    array(
    	'name' => 'sg_users',
    	'default_value' => NULL,
    	'type' => 'subgroup',
    	'subgroup' => 4,
    	'fieldset' => 0,
    	'selection_array' => NULL,
    	'sort' => 0,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'fs_users',
    	'default_value' => NULL,
    	'type' => 'fieldset',
    	'subgroup' => 4,
    	'fieldset' => 1,
    	'selection_array' => NULL,
    	'sort' => 0,
    	'set' => TRUE,
    	'group' => 'Core'
    ),

    array(
    	'name' => 'allow_user_language',
    	'default_value' => 0,
    	'type' => 'select',
    	'subgroup' => 4,
    	'fieldset' => 1,
    	'selection_array' => 0,
    	'sort' => 30,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'allow_user_photo',
    	'default_value' => 1,
    	'type' => 'select',
    	'subgroup' => 4,
    	'fieldset' => 1,
    	'selection_array' => 0,
    	'sort' => 40,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'allow_username_change',
    	'default_value' => 0,
    	'type' => 'select',
    	'subgroup' => 4,
    	'fieldset' => 1,
    	'selection_array' => 0,
    	'sort' => 50,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'allow_account_delete',
    	'default_value' => 0,
    	'type' => 'select',
    	'subgroup' => 4,
    	'fieldset' => 1,
    	'selection_array' => 0,
    	'sort' => 60,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'hide_author_exclusion',
    	'default_value' => 0,
    	'type' => 'select',
    	'subgroup' => 4,
    	'fieldset' => 1,
    	'selection_array' => 0,
    	'sort' => 70,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'show_fullname',
    	'default_value' => 0,
    	'type' => 'select',
    	'subgroup' => 4,
    	'fieldset' => 1,
    	'selection_array' => 0,
    	'sort' => 80,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'hide_exclude_content',
    	'default_value' => 1,
    	'type' => 'select',
    	'subgroup' => 4,
    	'fieldset' => 1,
    	'selection_array' => 0,
    	'sort' => 90,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'show_servicename',
    	'default_value' => '1',
    	'type' => 'select',
    	'subgroup' => 4,
    	'fieldset' => 1,
    	'selection_array' => 1,
    	'sort' => 100,
    	'set' => TRUE,
    	'group' => 'Core'
    ),

    array(
    	'name' => 'aftersave_user',
    	'default_value' => 'item',
    	'type' => 'select',
    	'subgroup' => 4,
    	'fieldset' => 1,
    	'selection_array' => 9,
    	'sort' => 320,
    	'set' => TRUE,
    	'group' => 'Core'
    ),



// new stuff
    array(
    	'name' => 'fs_authentication',
    	'default_value' => NULL,
    	'type' => 'fieldset',
    	'subgroup' => 4,
    	'fieldset' => 2,
    	'selection_array' => NULL,
    	'sort' => 0,
    	'set' => TRUE,
    	'group' => 'Core'
    ),

    array(
    	'name' => 'enable_twofactor',
    	'default_value' => '0',
    	'type' => 'select',
    	'subgroup' => 4,
    	'fieldset' => 2,
    	'selection_array' => 0,
    	'sort' => 10,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'user_login_method',
    	'default_value' => array('standard' => true,'3rdparty' => false,'oauth' => false),
    	'type' => '@select',
    	'subgroup' => 4,
    	'fieldset' => 2,
    	'selection_array' => 1,
    	'sort' => 120,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'standard_auth_first',
    	'default_value' => 1,
    	'type' => 'select',
    	'subgroup' => 4,
    	'fieldset' => 2,
    	'selection_array' => 1,
    	'sort' => 130,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'facebook_login',
    	'default_value' => 0,
    	'type' => 'select',
    	'subgroup' => 4,
    	'fieldset' => 2,
    	'selection_array' => 1,
    	'sort' => 140,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'facebook_consumer_key',
    	'default_value' => 'not configured yet',
    	'type' => 'text',
    	'subgroup' => 4,
    	'fieldset' => 2,
    	'selection_array' => NULL,
    	'sort' => 150,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'facebook_consumer_secret',
    	'default_value' => 'not configured yet',
    	'type' => 'text',
    	'subgroup' => 4,
    	'fieldset' => 2,
    	'selection_array' => NULL,
    	'sort' => 160,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'linkedin_login',
    	'default_value' => 0,
    	'type' => 'select',
    	'subgroup' => 4,
    	'fieldset' => 2,
    	'selection_array' => 1,
    	'sort' => 170,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'linkedin_consumer_key',
    	'default_value' => 'not configured yet',
    	'type' => 'text',
    	'subgroup' => 4,
    	'fieldset' => 2,
    	'selection_array' => NULL,
    	'sort' => 180,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'linkedin_consumer_secret',
    	'default_value' => 'not configured yet',
    	'type' => 'text',
    	'subgroup' => 4,
    	'fieldset' => 2,
    	'selection_array' => NULL,
    	'sort' => 190,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'twitter_login',
    	'default_value' => 0,
    	'type' => 'select',
    	'subgroup' => 4,
    	'fieldset' => 2,
    	'selection_array' => 1,
    	'sort' => 200,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'twitter_consumer_key',
    	'default_value' => 'not configured yet',
    	'type' => 'text',
    	'subgroup' => 4,
    	'fieldset' => 2,
    	'selection_array' => NULL,
    	'sort' => 210,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'twitter_consumer_secret',
    	'default_value' => 'not configured yet',
    	'type' => 'text',
    	'subgroup' => 4,
    	'fieldset' => 2,
    	'selection_array' => NULL,
    	'sort' => 220,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'google_login',
    	'default_value' => 0,
    	'type' => 'select',
    	'subgroup' => 4,
    	'fieldset' => 2,
    	'selection_array' => 1,
    	'sort' => 230,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'google_consumer_key',
    	'default_value' => 'not configured yet',
    	'type' => 'text',
    	'subgroup' => 4,
    	'fieldset' => 2,
    	'selection_array' => NULL,
    	'sort' => 240,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'google_consumer_secret',
    	'default_value' => 'not configured yet',
    	'type' => 'text',
    	'subgroup' => 4,
    	'fieldset' => 2,
    	'selection_array' => NULL,
    	'sort' => 250,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'microsoft_login',
    	'default_value' => 0,
    	'type' => 'select',
    	'subgroup' => 4,
    	'fieldset' => 2,
    	'selection_array' => 1,
    	'sort' => 260,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'microsoft_consumer_key',
    	'default_value' => 'not configured yet',
    	'type' => 'text',
    	'subgroup' => 4,
    	'fieldset' => 2,
    	'selection_array' => NULL,
    	'sort' => 270,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'microsoft_consumer_secret',
    	'default_value' => 'not configured yet',
    	'type' => 'text',
    	'subgroup' => 4,
    	'fieldset' => 2,
    	'selection_array' => NULL,
    	'sort' => 280,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'github_login',
    	'default_value' => 0,
    	'type' => 'select',
    	'subgroup' => 4,
    	'fieldset' => 2,
    	'selection_array' => 1,
    	'sort' => 290,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'github_consumer_key',
    	'default_value' => 'not configured yet',
    	'type' => 'text',
    	'subgroup' => 4,
    	'fieldset' => 2,
    	'selection_array' => NULL,
    	'sort' => 300,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'github_consumer_secret',
    	'default_value' => 'not configured yet',
    	'type' => 'text',
    	'subgroup' => 4,
    	'fieldset' => 2,
    	'selection_array' => NULL,
    	'sort' => 310,
    	'set' => TRUE,
    	'group' => 'Core'
    ),

// new password complexity rules
    array(
    	'name' => 'fs_pwd_complexity',
    	'default_value' => NULL,
    	'type' => 'fieldset',
    	'subgroup' => 4,
    	'fieldset' => 3,
    	'selection_array' => NULL,
    	'sort' => 0,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'pwd_min_length',
    	'default_value' => '8',
    	'type' => 'text',
    	'subgroup' => 4,
    	'fieldset' => 3,
    	'selection_array' => NULL,
    	'sort' => 10,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'pwd_max_length',
    	'default_value' => '36',
    	'type' => 'text',
    	'subgroup' => 4,
    	'fieldset' => 3,
    	'selection_array' => NULL,
    	'sort' => 20,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'pwd_req_num',
    	'default_value' => '1',
    	'type' => 'select',
    	'subgroup' => 4,
    	'fieldset' => 3,
    	'selection_array' => 1,
    	'sort' => 30,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'pwd_req_letter',
    	'default_value' => '1',
    	'type' => 'select',
    	'subgroup' => 4,
    	'fieldset' => 3,
    	'selection_array' => 1,
    	'sort' => 40,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'pwd_req_cap',
    	'default_value' => '1',
    	'type' => 'select',
    	'subgroup' => 4,
    	'fieldset' => 3,
    	'selection_array' => 1,
    	'sort' => 50,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'pwd_req_lower',
    	'default_value' => '1',
    	'type' => 'select',
    	'subgroup' => 4,
    	'fieldset' => 3,
    	'selection_array' => 1,
    	'sort' => 60,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'pwd_req_symbol',
    	'default_value' => '0',
    	'type' => 'select',
    	'subgroup' => 4,
    	'fieldset' => 3,
    	'selection_array' => 1,
    	'sort' => 70,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
// end of password complexity

    array(
    	'name' => 'fs_login',
    	'default_value' => NULL,
    	'type' => 'fieldset',
    	'subgroup' => 4,
    	'fieldset' => 4,
    	'selection_array' => NULL,
    	'sort' => 0,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'lastlogin',
    	'default_value' => '1',
    	'type' => 'select',
    	'subgroup' => 4,
    	'fieldset' => 4,
    	'selection_array' => 1,
    	'sort' => 10,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'loginrequired',
    	'default_value' => 0,
    	'type' => 'select',
    	'subgroup' => 4,
    	'fieldset' => 4,
    	'selection_array' => 0,
    	'sort' => 20,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'submitloginrequired',
    	'default_value' => 0,
    	'type' => 'select',
    	'subgroup' => 4,
    	'fieldset' => 4,
    	'selection_array' => 0,
    	'sort' => 30,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'commentsloginrequired',
    	'default_value' => 0,
    	'type' => 'select',
    	'subgroup' => 4,
    	'fieldset' => 4,
    	'selection_array' => 0,
    	'sort' => 40,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'statsloginrequired',
    	'default_value' => 0,
    	'type' => 'select',
    	'subgroup' => 4,
    	'fieldset' => 4,
    	'selection_array' => 0,
    	'sort' => 50,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'searchloginrequired',
    	'default_value' => 0,
    	'type' => 'select',
    	'subgroup' => 4,
    	'fieldset' => 4,
    	'selection_array' => 0,
    	'sort' => 60,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'profileloginrequired',
    	'default_value' => 0,
    	'type' => 'select',
    	'subgroup' => 4,
    	'fieldset' => 4,
    	'selection_array' => 0,
    	'sort' => 70,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'emailuserloginrequired',
    	'default_value' => 0,
    	'type' => 'select',
    	'subgroup' => 4,
    	'fieldset' => 4,
    	'selection_array' => 0,
    	'sort' => 80,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'emailstoryloginrequired',
    	'default_value' => 0,
    	'type' => 'select',
    	'subgroup' => 4,
    	'fieldset' => 4,
    	'selection_array' => 0,
    	'sort' => 90,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'directoryloginrequired',
    	'default_value' => 0,
    	'type' => 'select',
    	'subgroup' => 4,
    	'fieldset' => 4,
    	'selection_array' => 0,
    	'sort' => 100,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'passwordspeedlimit',
    	'default_value' => 300,
    	'type' => 'text',
    	'subgroup' => 4,
    	'fieldset' => 4,
    	'selection_array' => NULL,
    	'sort' => 110,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'login_attempts',
    	'default_value' => 3,
    	'type' => 'text',
    	'subgroup' => 4,
    	'fieldset' => 4,
    	'selection_array' => NULL,
    	'sort' => 120,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'login_speedlimit',
    	'default_value' => 300,
    	'type' => 'text',
    	'subgroup' => 4,
    	'fieldset' => 4,
    	'selection_array' => NULL,
    	'sort' => 130,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'login_landing',
    	'default_value' => '/index.php',
    	'type' => 'text',
    	'subgroup' => 4,
    	'fieldset' => 4,
    	'selection_array' => NULL,
    	'sort' => 140,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'fs_user_submission',
    	'default_value' => NULL,
    	'type' => 'fieldset',
    	'subgroup' => 4,
    	'fieldset' => 5,
    	'selection_array' => NULL,
    	'sort' => 0,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'disable_new_user_registration',
    	'default_value' => '',
    	'type' => 'select',
    	'subgroup' => 4,
    	'fieldset' => 5,
    	'selection_array' => 0,
    	'sort' => 10,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'custom_registration',
    	'default_value' => '',
    	'type' => 'select',
    	'subgroup' => 4,
    	'fieldset' => 5,
    	'selection_array' => 1,
    	'sort' => 20,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'usersubmission',
    	'default_value' => 0,
    	'type' => 'select',
    	'subgroup' => 4,
    	'fieldset' => 5,
    	'selection_array' => 0,
    	'sort' => 30,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'registration_type',
    	'default_value' => 0,
    	'type' => 'select',
    	'subgroup' => 4,
    	'fieldset' => 5,
    	'selection_array' => 27,
    	'sort' => 40,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'allow_domains',
    	'default_value' => '',
    	'type' => 'text',
    	'subgroup' => 4,
    	'fieldset' => 5,
    	'selection_array' => NULL,
    	'sort' => 50,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'disallow_domains',
    	'default_value' => '',
    	'type' => 'text',
    	'subgroup' => 4,
    	'fieldset' => 5,
    	'selection_array' => NULL,
    	'sort' => 60,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'user_reg_fullname',
    	'default_value' => 1,
    	'type' => 'select',
    	'subgroup' => 4,
    	'fieldset' => 5,
    	'selection_array' => 25,
    	'sort' => 70,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'min_username_length',
    	'default_value' => 4,
    	'type' => 'text',
    	'subgroup' => 4,
    	'fieldset' => 5,
    	'selection_array' => NULL,
    	'sort' => 80,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'fs_submission',
    	'default_value' => NULL,
    	'type' => 'fieldset',
    	'subgroup' => 4,
    	'fieldset' => 6,
    	'selection_array' => NULL,
    	'sort' => 0,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'storysubmission',
    	'default_value' => 1,
    	'type' => 'select',
    	'subgroup' => 4,
    	'fieldset' => 6,
    	'selection_array' => 0,
    	'sort' => 10,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'story_submit_by_perm_only',
    	'default_value' => 0,
    	'type' => 'select',
    	'subgroup' => 4,
    	'fieldset' => 6,
    	'selection_array' => 0,
    	'sort' => 20,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
//    array(
//    	'name' => 'listdraftstories',
//    	'default_value' => 0,
//    	'type' => 'select',
//    	'subgroup' => 4,
//    	'fieldset' => 6,
//    	'selection_array' => 0,
//    	'sort' => 30,
//    	'set' => TRUE,
//    	'group' => 'Core'
//    ),
    array(
    	'name' => 'postmode',
    	'default_value' => 'html',
    	'type' => 'select',
    	'subgroup' => 4,
    	'fieldset' => 6,
    	'selection_array' => 5,
    	'sort' => 40,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'mailuser_postmode',
    	'default_value' => 'html',
    	'type' => 'select',
    	'subgroup' => 4,
    	'fieldset' => 6,
    	'selection_array' => 5,
    	'sort' => 50,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'speedlimit',
    	'default_value' => 45,
    	'type' => 'text',
    	'subgroup' => 4,
    	'fieldset' => 6,
    	'selection_array' => NULL,
    	'sort' => 60,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'skip_preview',
    	'default_value' => 0,
    	'type' => 'select',
    	'subgroup' => 4,
    	'fieldset' => 6,
    	'selection_array' => 0,
    	'sort' => 70,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'fs_comments',
    	'default_value' => NULL,
    	'type' => 'fieldset',
    	'subgroup' => 4,
    	'fieldset' => 7,
    	'selection_array' => NULL,
    	'sort' => 0,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'comment_engine',
    	'default_value' => 'internal',
    	'type' => 'select',
    	'subgroup' => 4,
    	'fieldset' => 7,
    	'selection_array' => 30,
    	'sort' => 10,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'comment_disqus_shortname',
    	'default_value' => '',
    	'type' => 'text',
    	'subgroup' => 4,
    	'fieldset' => 7,
    	'selection_array' => NULL,
    	'sort' => 20,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'comment_fb_appid',
    	'default_value' => '',
    	'type' => 'text',
    	'subgroup' => 4,
    	'fieldset' => 7,
    	'selection_array' => NULL,
    	'sort' => 30,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'commentssubmission',
    	'default_value' => 0,
    	'type' => 'select',
    	'subgroup' => 4,
    	'fieldset' => 7,
    	'selection_array' => 31,
    	'sort' => 40,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'commentspeedlimit',
    	'default_value' => 45,
    	'type' => 'text',
    	'subgroup' => 4,
    	'fieldset' => 7,
    	'selection_array' => NULL,
    	'sort' => 50,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'comment_limit',
    	'default_value' => 100,
    	'type' => 'text',
    	'subgroup' => 4,
    	'fieldset' => 7,
    	'selection_array' => NULL,
    	'sort' => 60,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'comment_mode',
    	'default_value' => 'nested',
    	'type' => 'select',
    	'subgroup' => 4,
    	'fieldset' => 7,
    	'selection_array' => 11,
    	'sort' => 70,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'comment_code',
    	'default_value' => 0,
    	'type' => 'select',
    	'subgroup' => 4,
    	'fieldset' => 7,
    	'selection_array' => 17,
    	'sort' => 80,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'comment_edit',
    	'default_value' => 0,
    	'type' => 'select',
    	'subgroup' => 4,
    	'fieldset' => 7,
    	'selection_array' => 0,
    	'sort' => 90,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'comment_edittime',
    	'default_value' => 1800,
    	'type' => 'text',
    	'subgroup' => 4,
    	'fieldset' => 7,
    	'selection_array' => NULL,
    	'sort' => 100,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'comment_postmode',
    	'default_value' => 'plaintext',
    	'type' => 'select',
    	'subgroup' => 4,
    	'fieldset' => 7,
    	'selection_array' => 5,
    	'sort' => 110,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'article_comment_close_enabled',
    	'default_value' => 0,
    	'type' => 'select',
    	'subgroup' => 4,
    	'fieldset' => 7,
    	'selection_array' => 0,
    	'sort' => 120,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'article_comment_close_days',
    	'default_value' => 30,
    	'type' => 'text',
    	'subgroup' => 4,
    	'fieldset' => 7,
    	'selection_array' => NULL,
    	'sort' => 130,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'comment_close_rec_stories',
    	'default_value' => 0,
    	'type' => 'text',
    	'subgroup' => 4,
    	'fieldset' => 7,
    	'selection_array' => NULL,
    	'sort' => 140,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'comment_indent',
    	'default_value' => 15,
    	'type' => 'text',
    	'subgroup' => 4,
    	'fieldset' => 7,
    	'selection_array' => NULL,
    	'sort' => 150,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'fs_rating',
    	'default_value' => NULL,
    	'type' => 'fieldset',
    	'subgroup' => 4,
    	'fieldset' => 8,
    	'selection_array' => NULL,
    	'sort' => 0,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'rating_speedlimit',
    	'default_value' => 15,
    	'type' => 'text',
    	'subgroup' => 4,
    	'fieldset' => 8,
    	'selection_array' => NULL,
    	'sort' => 10,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
/*
    array(
    	'name' => 'fs_spamx',
    	'default_value' => NULL,
    	'type' => 'fieldset',
    	'subgroup' => 4,
    	'fieldset' => 9,
    	'selection_array' => NULL,
    	'sort' => 0,
    	'set' => TRUE,
    	'group' => 'Core'
    ),

    array(
    	'name' => 'spamx',
    	'default_value' => 128,
    	'type' => 'text',
    	'subgroup' => 4,
    	'fieldset' => 9,
    	'selection_array' => NULL,
    	'sort' => 10,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
*/
    array(
    	'name' => 'sg_images',
    	'default_value' => NULL,
    	'type' => 'subgroup',
    	'subgroup' => 5,
    	'fieldset' => 0,
    	'selection_array' => NULL,
    	'sort' => 0,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'fs_imagelib',
    	'default_value' => NULL,
    	'type' => 'fieldset',
    	'subgroup' => 5,
    	'fieldset' => 1,
    	'selection_array' => NULL,
    	'sort' => 0,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'image_lib',
    	'default_value' => 'gdlib',
    	'type' => 'select',
    	'subgroup' => 5,
    	'fieldset' => 1,
    	'selection_array' => 10,
    	'sort' => 10,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'path_to_mogrify',
    	'default_value' => '',
    	'type' => 'text',
    	'subgroup' => 5,
    	'fieldset' => 1,
    	'selection_array' => NULL,
    	'sort' => 20,
    	'set' => FALSE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'path_to_netpbm',
    	'default_value' => '',
    	'type' => 'text',
    	'subgroup' => 5,
    	'fieldset' => 1,
    	'selection_array' => NULL,
    	'sort' => 30,
    	'set' => FALSE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'jhead_enabled',
    	'default_value' => 0,
    	'type' => 'select',
    	'subgroup' => 5,
    	'fieldset' => 1,
    	'selection_array' => 0,
    	'sort' => 40,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'path_to_jhead',
    	'default_value' => '',
    	'type' => 'text',
    	'subgroup' => 5,
    	'fieldset' => 1,
    	'selection_array' => NULL,
    	'sort' => 50,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'jpegtrans_enabled',
    	'default_value' => 0,
    	'type' => 'select',
    	'subgroup' => 5,
    	'fieldset' => 1,
    	'selection_array' => 0,
    	'sort' => 60,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'path_to_jpegtrans',
    	'default_value' => '',
    	'type' => 'text',
    	'subgroup' => 5,
    	'fieldset' => 1,
    	'selection_array' => NULL,
    	'sort' => 70,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'fs_upload',
    	'default_value' => NULL,
    	'type' => 'fieldset',
    	'subgroup' => 5,
    	'fieldset' => 2,
    	'selection_array' => NULL,
    	'sort' => 0,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'keep_unscaled_image',
    	'default_value' => 0,
    	'type' => 'select',
    	'subgroup' => 5,
    	'fieldset' => 2,
    	'selection_array' => 0,
    	'sort' => 10,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'allow_user_scaling',
    	'default_value' => 1,
    	'type' => 'select',
    	'subgroup' => 5,
    	'fieldset' => 2,
    	'selection_array' => 0,
    	'sort' => 20,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'jpg_orig_quality',
    	'default_value' => 85,
    	'type' => 'text',
    	'subgroup' => 5,
    	'fieldset' => 2,
    	'selection_array' => NULL,
    	'sort' => 30,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'debug_image_upload',
    	'default_value' => '',
    	'type' => 'select',
    	'subgroup' => 5,
    	'fieldset' => 2,
    	'selection_array' => 1,
    	'sort' => 40,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'fs_articleimg',
    	'default_value' => NULL,
    	'type' => 'fieldset',
    	'subgroup' => 5,
    	'fieldset' => 3,
    	'selection_array' => NULL,
    	'sort' => 0,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'max_image_width',
    	'default_value' => 160,
    	'type' => 'text',
    	'subgroup' => 5,
    	'fieldset' => 3,
    	'selection_array' => NULL,
    	'sort' => 10,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'max_image_height',
    	'default_value' => 160,
    	'type' => 'text',
    	'subgroup' => 5,
    	'fieldset' => 3,
    	'selection_array' => NULL,
    	'sort' => 20,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'max_image_size',
    	'default_value' => 1048576,
    	'type' => 'text',
    	'subgroup' => 5,
    	'fieldset' => 3,
    	'selection_array' => NULL,
    	'sort' => 30,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'fs_topicicon',
    	'default_value' => NULL,
    	'type' => 'fieldset',
    	'subgroup' => 5,
    	'fieldset' => 4,
    	'selection_array' => NULL,
    	'sort' => 0,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'max_topicicon_width',
    	'default_value' => 48,
    	'type' => 'text',
    	'subgroup' => 5,
    	'fieldset' => 4,
    	'selection_array' => NULL,
    	'sort' => 10,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'max_topicicon_height',
    	'default_value' => 48,
    	'type' => 'text',
    	'subgroup' => 5,
    	'fieldset' => 4,
    	'selection_array' => NULL,
    	'sort' => 20,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'max_topicicon_size',
    	'default_value' => 65536,
    	'type' => 'text',
    	'subgroup' => 5,
    	'fieldset' => 4,
    	'selection_array' => NULL,
    	'sort' => 30,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'fs_userphoto',
    	'default_value' => NULL,
    	'type' => 'fieldset',
    	'subgroup' => 5,
    	'fieldset' => 5,
    	'selection_array' => NULL,
    	'sort' => 0,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'max_photo_width',
    	'default_value' => 300,
    	'type' => 'text',
    	'subgroup' => 5,
    	'fieldset' => 5,
    	'selection_array' => NULL,
    	'sort' => 10,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'max_photo_height',
    	'default_value' => 300,
    	'type' => 'text',
    	'subgroup' => 5,
    	'fieldset' => 5,
    	'selection_array' => NULL,
    	'sort' => 20,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'max_photo_size',
    	'default_value' => 8388608,
    	'type' => 'text',
    	'subgroup' => 5,
    	'fieldset' => 5,
    	'selection_array' => NULL,
    	'sort' => 30,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'force_photo_width',
    	'default_value' => 75,
    	'type' => 'text',
    	'subgroup' => 5,
    	'fieldset' => 5,
    	'selection_array' => NULL,
    	'sort' => 40,
    	'set' => FALSE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'default_photo',
    	'default_value' => NULL,
    	'type' => 'text',
    	'subgroup' => 5,
    	'fieldset' => 5,
    	'selection_array' => NULL,
    	'sort' => 50,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'fs_gravatar',
    	'default_value' => NULL,
    	'type' => 'fieldset',
    	'subgroup' => 5,
    	'fieldset' => 6,
    	'selection_array' => NULL,
    	'sort' => 0,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'use_gravatar',
    	'default_value' => '',
    	'type' => 'select',
    	'subgroup' => 5,
    	'fieldset' => 6,
    	'selection_array' => 1,
    	'sort' => 10,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'gravatar_rating',
    	'default_value' => 'R',
    	'type' => 'text',
    	'subgroup' => 5,
    	'fieldset' => 6,
    	'selection_array' => NULL,
    	'sort' => 20,
    	'set' => FALSE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'fs_logo',
    	'default_value' => NULL,
    	'type' => 'fieldset',
    	'subgroup' => 5,
    	'fieldset' => 7,
    	'selection_array' => NULL,
    	'sort' => 0,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'max_logo_height',
    	'default_value' => 150,
    	'type' => 'text',
    	'subgroup' => 5,
    	'fieldset' => 7,
    	'selection_array' => NULL,
    	'sort' => 10,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'max_logo_width',
    	'default_value' => 1024,
    	'type' => 'text',
    	'subgroup' => 5,
    	'fieldset' => 7,
    	'selection_array' => NULL,
    	'sort' => 20,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'sg_locale',
    	'default_value' => NULL,
    	'type' => 'subgroup',
    	'subgroup' => 6,
    	'fieldset' => 0,
    	'selection_array' => NULL,
    	'sort' => 0,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'fs_language',
    	'default_value' => NULL,
    	'type' => 'fieldset',
    	'subgroup' => 6,
    	'fieldset' => 1,
    	'selection_array' => NULL,
    	'sort' => 0,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'language',
    	'default_value' => 'english',
    	'type' => 'select',
    	'subgroup' => 6,
    	'fieldset' => 1,
    	'selection_array' => NULL,
    	'sort' => 10,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'fs_locale',
    	'default_value' => NULL,
    	'type' => 'fieldset',
    	'subgroup' => 6,
    	'fieldset' => 2,
    	'selection_array' => NULL,
    	'sort' => 0,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'locale',
    	'default_value' => 'en_US',
    	'type' => 'text',
    	'subgroup' => 6,
    	'fieldset' => 2,
    	'selection_array' => NULL,
    	'sort' => 10,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'date',
    	'default_value' => 'l, F d Y @ h:i a',
    	'type' => 'text',
    	'subgroup' => 6,
    	'fieldset' => 2,
    	'selection_array' => NULL,
    	'sort' => 20,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'daytime',
    	'default_value' => 'm/d/Y h:i a',
    	'type' => 'text',
    	'subgroup' => 6,
    	'fieldset' => 2,
    	'selection_array' => NULL,
    	'sort' => 30,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'shortdate',
    	'default_value' => 'm/d/y',
    	'type' => 'text',
    	'subgroup' => 6,
    	'fieldset' => 2,
    	'selection_array' => NULL,
    	'sort' => 40,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'dateonly',
    	'default_value' => 'd-M',
    	'type' => 'text',
    	'subgroup' => 6,
    	'fieldset' => 2,
    	'selection_array' => NULL,
    	'sort' => 50,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'timeonly',
    	'default_value' => 'H:i',
    	'type' => 'text',
    	'subgroup' => 6,
    	'fieldset' => 2,
    	'selection_array' => NULL,
    	'sort' => 60,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'week_start',
    	'default_value' => 'Sun',
    	'type' => 'select',
    	'subgroup' => 6,
    	'fieldset' => 2,
    	'selection_array' => 14,
    	'sort' => 70,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'hour_mode',
    	'default_value' => 12,
    	'type' => 'select',
    	'subgroup' => 6,
    	'fieldset' => 2,
    	'selection_array' => 6,
    	'sort' => 80,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'thousand_separator',
    	'default_value' => ',',
    	'type' => 'text',
    	'subgroup' => 6,
    	'fieldset' => 2,
    	'selection_array' => NULL,
    	'sort' => 90,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'decimal_separator',
    	'default_value' => '.',
    	'type' => 'text',
    	'subgroup' => 6,
    	'fieldset' => 2,
    	'selection_array' => NULL,
    	'sort' => 100,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'decimal_count',
    	'default_value' => 2,
    	'type' => 'text',
    	'subgroup' => 6,
    	'fieldset' => 2,
    	'selection_array' => NULL,
    	'sort' => 110,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'timezone',
    	'default_value' => 'America/Chicago',
    	'type' => 'select',
    	'subgroup' => 6,
    	'fieldset' => 2,
    	'selection_array' => NULL,
    	'sort' => 120,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'fs_mulitlanguage',
    	'default_value' => NULL,
    	'type' => 'fieldset',
    	'subgroup' => 6,
    	'fieldset' => 3,
    	'selection_array' => NULL,
    	'sort' => 0,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'language_files',
    	'default_value' => array('en' => 'english_utf-8','de' => 'german_formal_utf-8'),
    	'type' => '*text',
    	'subgroup' => 6,
    	'fieldset' => 3,
    	'selection_array' => NULL,
    	'sort' => 10,
    	'set' => FALSE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'languages',
    	'default_value' => array('en' => 'English','de' => 'Deutsch'),
    	'type' => '*text',
    	'subgroup' => 6,
    	'fieldset' => 3,
    	'selection_array' => NULL,
    	'sort' => 20,
    	'set' => FALSE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'sg_misc',
    	'default_value' => NULL,
    	'type' => 'subgroup',
    	'subgroup' => 7,
    	'fieldset' => 0,
    	'selection_array' => NULL,
    	'sort' => 0,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'fs_cookies',
    	'default_value' => NULL,
    	'type' => 'fieldset',
    	'subgroup' => 7,
    	'fieldset' => 1,
    	'selection_array' => NULL,
    	'sort' => 0,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'cookie_session',
    	'default_value' => 'glf_session',
    	'type' => 'text',
    	'subgroup' => 7,
    	'fieldset' => 1,
    	'selection_array' => NULL,
    	'sort' => 10,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'cookie_name',
    	'default_value' => 'glfusion',
    	'type' => 'text',
    	'subgroup' => 7,
    	'fieldset' => 1,
    	'selection_array' => NULL,
    	'sort' => 20,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'session_ip_check',
    	'default_value' => 1,
    	'type' => 'select',
    	'subgroup' => 7,
    	'fieldset' => 1,
    	'selection_array' => 26,
    	'sort' => 30,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'cookie_password',
    	'default_value' => 'glf_password',
    	'type' => 'text',
    	'subgroup' => 7,
    	'fieldset' => 1,
    	'selection_array' => NULL,
    	'sort' => 40,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'cookie_theme',
    	'default_value' => 'glf_theme',
    	'type' => 'text',
    	'subgroup' => 7,
    	'fieldset' => 1,
    	'selection_array' => NULL,
    	'sort' => 50,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'cookie_language',
    	'default_value' => 'glf_language',
    	'type' => 'text',
    	'subgroup' => 7,
    	'fieldset' => 1,
    	'selection_array' => NULL,
    	'sort' => 60,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'cookie_tzid',
    	'default_value' => 'glf_timezone',
    	'type' => 'text',
    	'subgroup' => 7,
    	'fieldset' => 1,
    	'selection_array' => NULL,
    	'sort' => 70,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'default_perm_cookie_timeout',
    	'default_value' => 28800,
    	'type' => 'text',
    	'subgroup' => 7,
    	'fieldset' => 1,
    	'selection_array' => NULL,
    	'sort' => 80,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'session_cookie_timeout',
    	'default_value' => 7200,
    	'type' => 'text',
    	'subgroup' => 7,
    	'fieldset' => 1,
    	'selection_array' => NULL,
    	'sort' => 90,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'cookie_path',
    	'default_value' => '/',
    	'type' => 'text',
    	'subgroup' => 7,
    	'fieldset' => 1,
    	'selection_array' => NULL,
    	'sort' => 100,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'cookiedomain',
    	'default_value' => '',
    	'type' => 'text',
    	'subgroup' => 7,
    	'fieldset' => 1,
    	'selection_array' => NULL,
    	'sort' => 110,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'cookiesecure',
    	'default_value' => NULL,
    	'type' => 'select',
    	'subgroup' => 7,
    	'fieldset' => 1,
    	'selection_array' => 1,
    	'sort' => 120,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'fs_misc',
    	'default_value' => NULL,
    	'type' => 'fieldset',
    	'subgroup' => 7,
    	'fieldset' => 2,
    	'selection_array' => NULL,
    	'sort' => 0,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'notification',
    	'default_value' => array(),
    	'type' => '%select',
    	'subgroup' => 7,
    	'fieldset' => 2,
    	'selection_array' => 35,
    	'sort' => 10,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'cron_schedule_interval',
    	'default_value' => 86400,
    	'type' => 'text',
    	'subgroup' => 7,
    	'fieldset' => 2,
    	'selection_array' => NULL,
    	'sort' => 20,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'disable_autolinks',
    	'default_value' => 0,
    	'type' => 'select',
    	'subgroup' => 7,
    	'fieldset' => 2,
    	'selection_array' => 0,
    	'sort' => 30,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'open_ext_url_new_window',
    	'default_value' => 0,
    	'type' => 'select',
    	'subgroup' => 7,
    	'fieldset' => 2,
    	'selection_array' => 0,
    	'sort' => 40,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'syntax_highlight',
    	'default_value' => 0,
    	'type' => 'select',
    	'subgroup' => 7,
    	'fieldset' => 2,
    	'selection_array' => 0,
    	'sort' => 50,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'fs_daily_digest',
    	'default_value' => NULL,
    	'type' => 'fieldset',
    	'subgroup' => 7,
    	'fieldset' => 4,
    	'selection_array' => NULL,
    	'sort' => 0,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'emailstories',
    	'default_value' => 0,
    	'type' => 'select',
    	'subgroup' => 7,
    	'fieldset' => 4,
    	'selection_array' => 0,
    	'sort' => 10,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'emailstorieslength',
    	'default_value' => 1,
    	'type' => 'text',
    	'subgroup' => 7,
    	'fieldset' => 4,
    	'selection_array' => NULL,
    	'sort' => 20,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'emailstoriesperdefault',
    	'default_value' => 0,
    	'type' => 'select',
    	'subgroup' => 7,
    	'fieldset' => 4,
    	'selection_array' => 0,
    	'sort' => 30,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'fs_htmlfilter',
    	'default_value' => NULL,
    	'type' => 'fieldset',
    	'subgroup' => 7,
    	'fieldset' => 5,
    	'selection_array' => NULL,
    	'sort' => 0,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'allow_embed_object',
    	'default_value' => '1',
    	'type' => 'select',
    	'subgroup' => 7,
    	'fieldset' => 5,
    	'selection_array' => 1,
    	'sort' => 10,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'skip_html_filter_for_root',
    	'default_value' => 0,
    	'type' => 'select',
    	'subgroup' => 7,
    	'fieldset' => 5,
    	'selection_array' => 0,
    	'sort' => 20,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'htmlfilter_default',
    	'default_value' => 'p,b,a,i,strong,em,br',
    	'type' => 'text',
    	'subgroup' => 7,
    	'fieldset' => 5,
    	'selection_array' => NULL,
    	'sort' => 30,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'htmlfilter_comment',
    	'default_value' => 'p,b,a[href|title|target],i,strong,em,br,tt,hr,li,ol,ul,code,pre',
    	'type' => 'text',
    	'subgroup' => 7,
    	'fieldset' => 5,
    	'selection_array' => NULL,
    	'sort' => 35,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'htmlfilter_story',
    	'default_value' => 'div[class],h1,h2,h3,pre,br,p[style],b[style],s,strong[style],i[style],em[style],u[style],strike,a[style|href|title|target],ol[style|class],ul[style|class],li[style|class],hr[style],blockquote[style],img[style|alt|title|width|height|src|align],table[style|width|bgcolor|align|cellspacing|cellpadding|border],tr[style],td[style],th[style],tbody,thead,caption,col,colgroup,span[style|class],sup,sub',
    	'type' => 'text',
    	'subgroup' => 7,
    	'fieldset' => 5,
    	'selection_array' => NULL,
    	'sort' => 40,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'htmlfilter_root',
    	'default_value' => 'div[style|class],span[style|class],table,tr,td,th,img[src|width|height|class|style]',
    	'type' => 'text',
    	'subgroup' => 7,
    	'fieldset' => 5,
    	'selection_array' => NULL,
    	'sort' => 50,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'fs_censoring',
    	'default_value' => NULL,
    	'type' => 'fieldset',
    	'subgroup' => 7,
    	'fieldset' => 6,
    	'selection_array' => NULL,
    	'sort' => 0,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'censormode',
    	'default_value' => 1,
    	'type' => 'select',
    	'subgroup' => 7,
    	'fieldset' => 6,
    	'selection_array' => 23,
    	'sort' => 10,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'censorreplace',
    	'default_value' => '*censored*',
    	'type' => 'text',
    	'subgroup' => 7,
    	'fieldset' => 6,
    	'selection_array' => NULL,
    	'sort' => 20,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'censorlist',
    	'default_value' => array('fuck','cunt','fucker','fucking','pussy','cock','c0ck',' cum ','twat','clit','bitch','fuk','fuking','motherfucker'),
    	'type' => '%text',
    	'subgroup' => 7,
    	'fieldset' => 6,
    	'selection_array' => NULL,
    	'sort' => 30,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'fs_iplookup',
    	'default_value' => NULL,
    	'type' => 'fieldset',
    	'subgroup' => 7,
    	'fieldset' => 7,
    	'selection_array' => NULL,
    	'sort' => 0,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'ip_lookup',
    	'default_value' => 'https://whatismyipaddress.com/ip/*',
    	'type' => 'text',
    	'subgroup' => 7,
    	'fieldset' => 7,
    	'selection_array' => NULL,
    	'sort' => 10,
    	'set' => FALSE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'fs_perm_story',
    	'default_value' => NULL,
    	'type' => 'fieldset',
    	'subgroup' => 7,
    	'fieldset' => 8,
    	'selection_array' => NULL,
    	'sort' => 0,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'default_permissions_story',
    	'default_value' => array(3,2,2,2),
    	'type' => '@select',
    	'subgroup' => 7,
    	'fieldset' => 8,
    	'selection_array' => 12,
    	'sort' => 10,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'fs_perm_topic',
    	'default_value' => NULL,
    	'type' => 'fieldset',
    	'subgroup' => 7,
    	'fieldset' => 9,
    	'selection_array' => NULL,
    	'sort' => 0,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'default_permissions_topic',
    	'default_value' => array(3,2,2,2),
    	'type' => '@select',
    	'subgroup' => 7,
    	'fieldset' => 9,
    	'selection_array' => 12,
    	'sort' => 10,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'fs_perm_block',
    	'default_value' => NULL,
    	'type' => 'fieldset',
    	'subgroup' => 7,
    	'fieldset' => 10,
    	'selection_array' => NULL,
    	'sort' => 0,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'default_permissions_block',
    	'default_value' => array(3,2,2,2),
    	'type' => '@select',
    	'subgroup' => 7,
    	'fieldset' => 10,
    	'selection_array' => 12,
    	'sort' => 10,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'sg_spam',
    	'default_value' => NULL,
    	'type' => 'subgroup',
    	'subgroup' => 8,
    	'fieldset' => 0,
    	'selection_array' => NULL,
    	'sort' => 0,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'fs_spam_config',
    	'default_value' => NULL,
    	'type' => 'fieldset',
    	'subgroup' => 8,
    	'fieldset' => 1,
    	'selection_array' => NULL,
    	'sort' => 0,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'bb2_enabled',
    	'default_value' => 1,
    	'type' => 'select',
    	'subgroup' => 8,
    	'fieldset' => 1,
    	'selection_array' => 0,
    	'sort' => 10,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'bb2_ban_enabled',
    	'default_value' => 0,
    	'type' => 'select',
    	'subgroup' => 8,
    	'fieldset' => 1,
    	'selection_array' => 0,
    	'sort' => 20,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'bb2_ban_log',
    	'default_value' => 1,
    	'type' => 'select',
    	'subgroup' => 8,
    	'fieldset' => 1,
    	'selection_array' => 0,
    	'sort' => 30,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'bb2_ban_timeout',
    	'default_value' => 24,
    	'type' => 'text',
    	'subgroup' => 8,
    	'fieldset' => 1,
    	'selection_array' => 0,
    	'sort' => 40,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'bb2_strict',
    	'default_value' => 0,
    	'type' => 'select',
    	'subgroup' => 8,
    	'fieldset' => 1,
    	'selection_array' => 0,
    	'sort' => 50,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'bb2_verbose',
    	'default_value' => 0,
    	'type' => 'select',
    	'subgroup' => 8,
    	'fieldset' => 1,
    	'selection_array' => 0,
    	'sort' => 60,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'bb2_logging',
    	'default_value' => 1,
    	'type' => 'select',
    	'subgroup' => 8,
    	'fieldset' => 1,
    	'selection_array' => 0,
    	'sort' => 70,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'bb2_httpbl_key',
    	'default_value' => '',
    	'type' => 'text',
    	'subgroup' => 8,
    	'fieldset' => 1,
    	'selection_array' => NULL,
    	'sort' => 80,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'bb2_httpbl_threat',
    	'default_value' => 25,
    	'type' => 'text',
    	'subgroup' => 8,
    	'fieldset' => 1,
    	'selection_array' => NULL,
    	'sort' => 90,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'bb2_httpbl_maxage',
    	'default_value' => 30,
    	'type' => 'text',
    	'subgroup' => 8,
    	'fieldset' => 1,
    	'selection_array' => NULL,
    	'sort' => 100,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'bb2_offsite_forms',
    	'default_value' => 0,
    	'type' => 'select',
    	'subgroup' => 8,
    	'fieldset' => 1,
    	'selection_array' => 0,
    	'sort' => 110,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'bb2_reverse_proxy',
    	'default_value' => 0,
    	'type' => 'select',
    	'subgroup' => 8,
    	'fieldset' => 1,
    	'selection_array' => 0,
    	'sort' => 120,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'bb2_reverse_proxy_header',
    	'default_value' => 'X-Forwarded-For',
    	'type' => 'text',
    	'subgroup' => 8,
    	'fieldset' => 1,
    	'selection_array' => 0,
    	'sort' => 130,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'bb2_reverse_proxy_addresses',
    	'default_value' => array(),
    	'type' => '*text',
    	'subgroup' => 8,
    	'fieldset' => 1,
    	'selection_array' => 0,
    	'sort' => 140,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
// create new section 'Advanced Configuration'
array(
	'name' => 'sg_advanced',
	'default_value' => NULL,
	'type' => 'subgroup',
	'subgroup' => 9,
	'fieldset' => 0,
	'selection_array' => NULL,
	'sort' => 0,
	'set' => TRUE,
	'group' => 'Core'
),

    // path fieldset - site tab

    array(
    	'name' => 'fs_paths',
    	'default_value' => NULL,
    	'type' => 'fieldset',
    	'subgroup' => 9,
    	'fieldset' => 1,
    	'selection_array' => NULL,
    	'sort' => 0,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'path_log',
    	'default_value' => '',
    	'type' => 'text',
    	'subgroup' => 9,
    	'fieldset' => 1,
    	'selection_array' => NULL,
    	'sort' => 20,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'path_language',
    	'default_value' => '',
    	'type' => 'text',
    	'subgroup' => 9,
    	'fieldset' => 1,
    	'selection_array' => NULL,
    	'sort' => 30,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'backup_path',
    	'default_value' => '',
    	'type' => 'text',
    	'subgroup' => 9,
    	'fieldset' => 1,
    	'selection_array' => NULL,
    	'sort' => 40,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'path_data',
    	'default_value' => '',
    	'type' => 'text',
    	'subgroup' => 9,
    	'fieldset' => 1,
    	'selection_array' => NULL,
    	'sort' => 50,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'path_images',
    	'default_value' => '',
    	'type' => 'text',
    	'subgroup' => 9,
    	'fieldset' => 1,
    	'selection_array' => NULL,
    	'sort' => 60,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'path_themes',
    	'default_value' => '',
    	'type' => 'text',
    	'subgroup' => 9,
    	'fieldset' => 1,
    	'selection_array' => NULL,
    	'sort' => 70,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'path_rss',
    	'default_value' => '',
    	'type' => 'text',
    	'subgroup' => 9,
    	'fieldset' => 1,
    	'selection_array' => NULL,
    	'sort' => 80,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
	array(
		'name' => 'fs_debug',
		'default_value' => NULL,
		'type' => 'fieldset',
		'subgroup' => 9,
		'fieldset' => 2,
		'selection_array' => NULL,
		'sort' => 0,
		'set' => TRUE,
		'group' => 'Core'
	),
	array(
		'name' => 'rootdebug',
		'default_value' => '',
		'type' => 'select',
		'subgroup' => 9,
		'fieldset' => 2,
		'selection_array' => 1,
		'sort' => 10,
		'set' => TRUE,
		'group' => 'Core'
	),
	array(
		'name' => 'enable_404_logging',
		'default_value' => 1,
		'type' => 'select',
		'subgroup' => 9,
		'fieldset' => 2,
		'selection_array' => 0,
		'sort' => 20,
		'set' => TRUE,
		'group' => 'Core'
	),
	array(
		'name' => 'debug_oauth',
		'default_value' => 0,
		'type' => 'select',
		'subgroup' => 9,
		'fieldset' => 2,
		'selection_array' => 0,
		'sort' => 30,
		'set' => TRUE,
		'group' => 'Core'
	),
	array(
		'name' => 'debug_html_filter',
		'default_value' => 0,
		'type' => 'select',
		'subgroup' => 9,
		'fieldset' => 2,
		'selection_array' => 0,
		'sort' => 40,
		'set' => TRUE,
		'group' => 'Core'
	),
	array(
		'name' => 'enable_admin_actions',
		'default_value' => 1,
		'type' => 'select',
		'subgroup' => 9,
		'fieldset' => 2,
		'selection_array' => 0,
		'sort' => 50,
		'set' => TRUE,
		'group' => 'Core'
	),
	array(
        'name' => 'sg_cache',
        'default_value' => NULL,
        'type' => 'subgroup',
        'subgroup' => 10,
        'fieldset' => 0,
        'selection_array' => NULL,
        'sort' => 0,
        'set' => TRUE,
        'group' => 'Core'
    ),
    array(
        'name' => 'fs_cache_template',
        'default_value' => NULL,
        'type' => 'fieldset',
        'subgroup' => 10,
        'fieldset' => 1,
        'selection_array' => NULL,
        'sort' => 0,
        'set' => TRUE,
        'group' => 'Core'
    ),

    array(
        'name' => 'cache_templates',
        'default_value' => '1',
        'type' => 'select',
        'subgroup' => 10,
        'fieldset' => 1,
        'selection_array' => 0,
        'sort' => 10,
        'set' => TRUE,
        'group' => 'Core'
    ),
    array(
    	'name' => 'fs_cache_backend',
    	'default_value' => NULL,
    	'type' => 'fieldset',
    	'subgroup' => 10,
    	'fieldset' => 2,
    	'selection_array' => NULL,
    	'sort' => 0,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'cache_driver',
    	'default_value' => 'files',
    	'type' => 'select',
    	'subgroup' => 10,
    	'fieldset' => 2,
    	'selection_array' => 0,
    	'sort' => 10,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'cache_timeout',
    	'default_value' => '5',
    	'type' => 'text',
    	'subgroup' => 10,
    	'fieldset' => 2,
    	'selection_array' => NULL,
    	'sort' => 20,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
// redis info
    array(
    	'name' => 'cache_redis_info',
    	'default_value' => '',
    	'type' => 'fset',
    	'subgroup' => 10,
    	'fieldset' => 2,
    	'selection_array' => NULL,
    	'sort' => 30,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'cache_redis_host',
    	'default_value' => '127.0.0.1',
    	'type' => 'text',
    	'subgroup' => 10,
    	'fieldset' => 2,
    	'selection_array' => NULL,
    	'sort' => 40,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'cache_redis_port',
    	'default_value' => '6379',
    	'type' => 'text',
    	'subgroup' => 10,
    	'fieldset' => 2,
    	'selection_array' => NULL,
    	'sort' => 50,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'cache_redis_socket',
    	'default_value' => '',
    	'type' => 'text',
    	'subgroup' => 10,
    	'fieldset' => 2,
    	'selection_array' => NULL,
    	'sort' => 60,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'cache_redis_password',
    	'default_value' => '',
    	'type' => 'text',
    	'subgroup' => 10,
    	'fieldset' => 2,
    	'selection_array' => NULL,
    	'sort' => 70,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'cache_redis_database',
    	'default_value' => '0',
    	'type' => 'text',
    	'subgroup' => 10,
    	'fieldset' => 2,
    	'selection_array' => NULL,
    	'sort' => 80,
    	'set' => TRUE,
    	'group' => 'Core'
    ),

// memcache info
    array(
    	'name' => 'cache_memcached_info',
    	'default_value' => '',
    	'type' => 'fset',
    	'subgroup' => 10,
    	'fieldset' => 2,
    	'selection_array' => NULL,
    	'sort' => 90,
    	'set' => TRUE,
    	'group' => 'Core'
    ),

    array(
    	'name' => 'cache_memcached_host',
    	'default_value' => '127.0.0.1',
    	'type' => 'text',
    	'subgroup' => 10,
    	'fieldset' => 2,
    	'selection_array' => NULL,
    	'sort' => 100,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'cache_memcached_port',
    	'default_value' => '11211',
    	'type' => 'text',
    	'subgroup' => 10,
    	'fieldset' => 2,
    	'selection_array' => NULL,
    	'sort' => 110,
    	'set' => TRUE,
    	'group' => 'Core'
    ),

    array(
    	'name' => 'cache_memcached_socket',
    	'default_value' => '',
    	'type' => 'text',
    	'subgroup' => 10,
    	'fieldset' => 2,
    	'selection_array' => NULL,
    	'sort' => 120,
    	'set' => TRUE,
    	'group' => 'Core'
    ),
    array(
    	'name' => 'cache_memcached_username',
    	'default_value' => '',
    	'type' => 'text',
    	'subgroup' => 10,
    	'fieldset' => 2,
    	'selection_array' => NULL,
    	'sort' => 130,
    	'set' => TRUE,
    	'group' => 'Core'
    ),

    array(
    	'name' => 'cache_memcached_password',
    	'default_value' => '',
    	'type' => 'text',
    	'subgroup' => 10,
    	'fieldset' => 2,
    	'selection_array' => NULL,
    	'sort' => 140,
    	'set' => TRUE,
    	'group' => 'Core'
    ),

	//  move debugging to advanced tab



);
?>
