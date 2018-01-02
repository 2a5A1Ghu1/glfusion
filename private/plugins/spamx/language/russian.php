<?php
/**
 * File: russian.php
 * This is the Russian-1251 language page for the glFusion Spam-X Plug-in!
 * 
 * Copyright (C) 2006 by the following authors:
 * Author        Pavel Kovalenko        rumata AT dragons DOT ru
 * 
 * Licensed under GNU General Public License
 *
 * $Id: russian.php 2846 2008-07-29 00:52:10Z mevans0263 $
 */

if (!defined ('GVERSION')) {
    die ('This file cannot be used on its own.');
}

global $LANG32;

$LANG_SX00 = array(
    'inst1' => '<p>���� �� ��� ��������, ������ ',
    'inst2' => '������ ������������� � ������������� ��� ������ ������, ��� �������� ������� ����� ����������� ���� ������.',
    'inst3' => '</p><p>���� ��� ���� ��� �������� � �� ������ ����� �� ������, ',
    'inst4' => '��������� ����������� �� ����� <a href="mailto:spamx@pigstye.net">spamx@pigstye.net</a>. ',
    'inst5' => '��� ������� ����������� � ��������������.',
    'submit' => '���������',
    'subthis' => '�������� ���������� � ����������� ���� Spam-X',
    'secbut' => '������ ������ ������� rdf feed, ������������ ����������� ������������� ��� ������.',
    'sitename' => '��� �����: ',
    'URL' => 'URL ��� ������ Spam-X: ',
    'RDF' => 'RDF url: ',
    'impinst1a' => '����� �������������� Spam-X ��������� ����������� � ����� ���������� ����� ��� ��������� � ������� ������ ������ ������� ������� ������.',
    'impinst1b' => ' ������� ������ ��������� ��� ������. (�� ������ ���������.)',
    'impinst2' => '������ ��������� �������� ������ ����� �� ����� Gplugs/Spam-X, ����� ���� ��� ����� �������� � ������� ������ ',
    'impinst2a' => '������, ��������������� ���� ������ ������. (����������: ���� � ��� ��������� ������, �� �������� �� ������ ���������� ���� ��� ',
    'impinst2b' => '������� � ������� ������ ��� ��������. ��� �������� ���������� ����� ������ � ������ ����� ������.) ',
    'impinst2c' => '����� �������� ������ \'���������\', �������� [�����] � ����� ��������, ����� ��������� ����.',
    'impinst3' => '��������� ������ ����� ����������: (��������� ��, ���� ��� ������������).',
    'availb' => '��������� ������ ������',
    'clickv' => '������� ��� ��������� ������ �������',
    'clicki' => '������� ��� ������� ������ �������',
    'ok' => 'OK',
    'rsscreated' => '��������� RSS Feed',
    'add1' => '����������� ',
    'add2' => ' ������ �� ',
    'add3' => ' ������ ������.',
    'adminc' => '�������:',
    'mblack' => '��� ������ ������:',
    'rlinks' => '������� ������:',
    'e3' => '��� ���������� ���� �� glFusions CensorList ������� ������:',
    'addcen' => '�������� ������ ����������� ����',
    'addentry' => '�������� ������',
    'e1' => '��� �������� ������ ������� �� ���.',
    'e2' => '��� ���������� ������ �������� �� ��� � ������� ��������. ������ ����� ������������ ����������� ���������� ��������� ����.',
    'pblack' => '������� ������ Spam-X',
    'conmod' => '������������ ������������� Spam-X',
    'acmod' => '������ �������� Spam-X',
    'exmod' => '������ �������� Spam-X',
    'actmod' => '����������� ������',
    'avmod' => '��������� ������',
    'coninst' => '<hr>��� �������� ������������ ������ ������� �� ����, ��� ���������� ������� �� ��������� ������.<br>������ ����������� �� ������� � ������.',
    'fsc' => '������ ���� ����������� ',
    'fsc1' => ' ������������ ',
    'fsc2' => ' � IP ',
    'uMTlist' => '�������� MT-Blacklist',
    'uMTlist2' => ': ��������� ',
    'uMTlist3' => ' ������� � ������� ',
    'entries' => ' �������.',
    'uPlist' => '�������� ������� ������ ������',
    'entriesadded' => '��������� �������',
    'entriesdeleted' => '������� �������',
    'viewlog' => '�������� ���� Spam-X',
    'clearlog' => '�������� ���� ����',
    'logcleared' => '- ��� Spam-X ������',
    'plugin' => '������',
    'access_denied' => '������ ��������',
    'access_denied_msg' => '������ �������������� ����� ������ � ������ ��������.  ��� ����� � IP ����� ���� �������������.',
    'admin' => '���������� ��������',
    'install_header' => '����������/�������� ������',
    'installed' => '������ ����������',
    'uninstalled' => '������ �������',
    'install_success' => '��������� ������ �������',
    'install_failed' => '��������� ����������� -- �������� ��� ������, ����� �������� �������.',
    'uninstall_msg' => '������ ������� ������������',
    'install' => '����������',
    'uninstall' => '�������������',
    'warning' => '��������! ������ ��-�������� �������',
    'enabled' => '��������� ������ ����� ����������.',
    'readme' => '����! ����� ���������� ����������� ��������',
    'installdoc' => ' �������� ���������.',
    'spamdeleted' => '������� ���� �����������',
    'foundspam' => '������ ���� ����������� ',
    'foundspam2' => ' ������������ ',
    'foundspam3' => ' � IP ',
    'deletespam' => '������� ����',
    'numtocheck' => '���������� ������������ ��� ��������',
    'note1' => '<p>����������: �������� �������� ����������� � ������',
    'note2' => ' ���� �� ����� ����� ���� ������������ Spam-X �� ��������.  <ul><li>������� ������� ������ �� ����������� ������������� ����� ����� ',
    'note3' => '� �������� � ���� ������ ������.</li><li>����� ',
    'note4' => '��������� � � ������� Spam-X ��������� ��������� �����������.</li></ul>����������� ',
    'note5' => '��������� �� ����� ����� �� ����� ������ -- ���������� �������� ',
    'note6' => '������� �������� �������.</p>',
    'masshead' => '<hr><h1 align="center">�������� �������� ���� ������������</h1>',
    'masstb' => '<hr><h1 align="center">�������� �������� ����� Trackback</h1>',
    'comdel' => ' ������������ �������.',
    'initial_Pimport' => '<p>������ ������� ������"',
    'initial_import' => '��������� ������ MT-Blacklist',
    'import_success' => '<p>������� ������������� %d ������� ������� ������.',
    'import_failure' => '<p><strong>������:</strong> ������� �� �������.',
    'allow_url_fopen' => '<p>��������, ������������ ������ ���������� �� ��������� ������ ��������� ������, ����� (<code>allow_url_fopen</code> ���������). ��������� ������ �� ���������� URL � ��������� ��� � ������� ������, <tt>%s</tt>, ������ ��� ����������� ��������� �������:',
    'documentation' => '������������ ������ Spam-X',
    'emailmsg' => "����� ���� ��� ������� � \"%s\"\nUID ������������: \"%s\"\n\n����������:\"%s\"",
    'emailsubject' => '���� � %s',
    'ipblack' => '������ Spam-X IP',
    'ipofurlblack' => '������ Spam-X IP ��� URL',
    'headerblack' => '������ Spam-X ���������� HTTP',
    'headers' => '������������� ���������:',
    'stats_headline' => '���������� Spam-X',
    'stats_page_title' => '������ ������',
    'stats_entries' => '������',
    'stats_mtblacklist' => 'MT-Blacklist',
    'stats_pblacklist' => '������������ ������ ������',
    'stats_ip' => '��������������� IP',
    'stats_ipofurl' => '���������� IP ��� URL',
    'stats_header' => '��������� HTTP',
    'stats_deleted' => '��������� ������� ��� ����',
    'plugin_name' => 'Spam-X',
    'slvwhitelist' => 'SLV Whitelist',
    'instructions' => 'Spam-X allows you to define words, URLs, and other items that can be used to block spam posts on your site.',
    'invalid_email_or_ip' => 'Invalid e-mail address or IP address has been blocked',
    'filters' => 'Filters',
    'edit_filters' => 'Edit Filters',
    'scan_comments' => 'Scan Comments',
    'scan_trackbacks' => 'Scan Trackbacks',
    'auto_refresh_on' => 'Auto Refresh On',
    'auto_refresh_off' => 'Auto Refresh Off',
    'type' => 'Type',
    'blocked' => 'Blocked',
    'no_blocked' => 'No spam has been blocked by this module',
    'filter' => 'Filter',
    'all' => 'All',
    'blacklist' => 'Blacklist',
    'http_header' => 'HTTP Header',
    'ip_blacklist' => 'IP Blacklist',
    'ipofurl' => 'IP of URL',
    'filter_instruction' => 'Here you can define filters which will be applied to each registration and post on the site. If any of the checks return true, the registration / post will be blocked as spam',
    'value' => 'Value',
    'no_filter_data' => 'No filters have been defined',
    'delete' => 'Delete',
    'delete_confirm' => 'Are you sure you want to delete this item?',
    'delete_confirm_2' => 'Are you REALLY SURE you want to delete this item',
    'new_entry' => 'New Entry',
    'blacklist_prompt' => 'Enter words to trigger spam',
    'http_header_prompt' => 'Header',
    'ip_prompt' => 'Enter IP to block',
    'ipofurl_prompt' => 'Enter IP of links to block',
    'content' => 'Content',
    'new_filter_entry' => 'New Filter Entry',
    'cancel' => 'Cancel',
    'ip_error' => 'The entry does not appear to be a valid IP or IP range',
    'no_bl_data_error' => 'No errors',
    'blacklist_success_save' => 'Spam-X Filter Saved Successfully',
    'blacklist_success_delete' => 'Selected items successfully deleted',
    'invalid_item_id' => 'Invalid ID',
    'edit_filter_entry' => 'Edit Filter',
    'spamx_filters' => 'Spam-X Filters'
);

// Define Messages that are shown when Spam-X module action is taken
$PLG_spamx_MESSAGE128 = '��������� ���� � ��������� ��� ����������� �������.';
$PLG_spamx_MESSAGE8 = '��������� ����. �������������� ���������� �����������.';

// Messages for the plugin upgrade
$PLG_spamx_MESSAGE3001 = 'Plugin upgrade not supported.';
$PLG_spamx_MESSAGE3002 = $LANG32[9];

// Localization of the Admin Configuration UI
$LANG_configsections['spamx'] = array(
    'label' => 'Spam-X',
    'title' => 'Spam-X Configuration'
);

$LANG_confignames['spamx'] = array(
    'action' => 'Spam-X Actions',
    'notification_email' => 'Notification Email',
    'admin_override' => 'Don\'t Filter Admin Posts',
    'logging' => 'Enable Logging',
    'timeout' => 'Timeout',
    'sfs_username_check' => 'Enable User name validation',
    'sfs_email_check' => 'Enable email validation',
    'sfs_ip_check' => 'Enable IP address validation',
    'sfs_username_confidence' => 'Minimum confidence level on Username match to trigger spam block',
    'sfs_email_confidence' => 'Minimum confidence level on Email match to trigger spam block',
    'sfs_ip_confidence' => 'Minimum confidence level on IP address match to trigger spam block',
    'slc_max_links' => 'Maximum Links allowed in post',
    'debug' => 'Debug Logging',
    'akismet_enabled' => 'Akismet Module Enabled',
    'akismet_api_key' => 'Akismet API Key (Required)',
    'fc_enable' => 'Enable Form Check',
    'sfs_enable' => 'Enable Stop Forum Spam',
    'slc_enable' => 'Enable Spam Link Counter',
    'action_delete' => 'Delete Identified Spam',
    'action_mail' => 'Mail Admin when Spam Caught'
);

$LANG_configsubgroups['spamx'] = array(
    'sg_main' => 'Main Settings'
);

$LANG_fs['spamx'] = array(
    'fs_main' => 'Spam-X Main Settings',
    'fs_sfs' => 'Stop Forum Spam Settings',
    'fs_slc' => 'Spam Link Counter',
    'fs_akismet' => 'Akismet',
    'fs_formcheck' => 'Form Check'
);

// Note: entries 0, 1, 9, and 12 are the same as in $LANG_configselects['Core']
$LANG_configselects['spamx'] = array(
    0 => array('True' => 1, 'False' => 0),
    1 => array('True' => true, 'False' => false)
);

?>