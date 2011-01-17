<?php
// +--------------------------------------------------------------------------+
// | Site Tailor Plugin - glFusion CMS                                        |
// +--------------------------------------------------------------------------+
// | german_formal.php                                                        |
// |                                                                          |
// | German language file                                                     |
// | Modifiziert: August 09 Tony Kluever						                   			  |
// +--------------------------------------------------------------------------+
// | Copyright (C)  2008 by the following authors:                            |
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

###############################################################################

$LANG_ST00 = array(
    'menulabel' => 'Site-Tailor',
    'plugin' => 'Sitetailor',
    'access_denied' => 'Zugriff verweigert',
    'access_denied_msg' => 'Sie Haben nicht die Berechtigung auf diese Seite zuzugreifen. Ihr Benutzername und IP wurden aufgezeichnet.',
    'admin' => 'Site-Tailor-Administration',
    'install_header' => 'Site Tailor - Installation/Deinstallation',
    'installed' => 'Site-Tailor ist installiert',
    'uninstalled' => 'Site-Tailor ist nicht installiert',
    'install_success' => 'Site-Tailor-Plugin wurde erfolgreich installiert.<br' . XHTML . '><br' . XHTML . '>Bitte schau in dei Systemdokumentation und such auch die  <a href="%s">Admin-Sektion</a> auf, um sicherzustellen, dass Deine Einstellungen mit Deiner Hosting-Umgebung �bereinstimmen.',
    'install_failed' => 'Installation fehlgeschlagen -- Schau in die Datei error.log f�r mehr Infos.',
    'uninstall_msg' => 'Plugin erfolgreich deinstalliert',
    'install' => 'Installieren',
    'uninstall' => 'Deinstallieren',
    'warning' => 'Warnung! Plugin ist noch aktiviert',
    'enabled' => 'Deaktiviere das Plugin vor dem Deinstallieren.',
    'readme' => 'Site-Tailor-Plugin - Installation',
    'installdoc' => "<a href=\"{$_CONF['site_admin_url']}/plugins/sitetailor/install_doc.html\">Installationsanleitung</a>",
    'thank_you' => 'Danke f�r das Upgraden auf die letzte Version von Site-Tailor. Bitte �berpr�fen Sie ihre Systemkonfigurationsoptionen, da es viele neues Features in diesem Release geben k�nnte, die Sie konfigurieren m�ssen.',
    'support' => 'F�r Support, Fragen oder Verbesserungsw�nsche, besuchen Sie bitte <a href="http://www.gllabs.org">gl Labs</a>.  F�r die aktuelleste Dokumentation, besucheen Sie das <a href="http://www.gllabs.org/wiki/">Site-Tailor Wiki</a>.',
    'success_upgrade' => 'Site-Tailor-Upgrade erfolgreich',
    'template_cache' => 'Template-Cache-Library installiert',
    'env_check' => 'Environment-Check',
    'gl_version_error' => 'glFusion version ist nicht v1.0.0 oder h�her',
    'gl_version_ok' => 'glFusion version ist v1.0.0 oder h�her',
    'tc_error' => 'Caching-Template-Library ist nicht installiert',
    'tc_ok' => 'Caching-Template-Library ist installiert',
    'ml_error' => 'php.ini <strong>memory_limit</strong> ist kleiner als 48M.',
    'ml_ok' => 'php.ini <strong>memory_limit</strong> ist 48M oder gr��er.',
    'recheck_env' => 'Umgebung neu pr�fen',
    'fix_install' => 'Bitte beheben Sie die obigen Punkte vor dem Installieren.',
    'need_cache' => 'Site-Tailor ben�tigt die <a href="http://www.gllabs.org/filemgmt/index.php?id=156">Caching-Template-Library-Erweiterung</a>. Bitte downloade und installiere diese Library.',
    'need_memory' => 'Site-Tailor empfiehlt, dass mindestens 48M f�r <strong>memory_limit</strong> in der php.ini eingestellt sind.',
    'overview' => 'Site-Tailor ist ein ben�tigtes CMS-Plugin, dass benutzerdef. �nderungen an der Seite erm�glicht.',
    'preinstall_check' => 'Site Tailor ben�tigt folgendes:',
    'glfusion_check' => 'glFusion v1.0.0 oder gr��er, gemeldete Version ist <b>%s</b>.',
    'php_check' => 'PHP v4.3.0 oder gr��er, gemeldete Version ist <b>%s</b>.',
    'preinstall_confirm' => "F�r Details zur Installation von Site-Tailor, schauen Sie bitte in die <a href=\"{$_CONF['site_admin_url']}/plugins/sitetailor/install_doc.html\">Installationsanleitung</a>."
);

$LANG_ST01 = array(
    'instructions' => 'Mit Site Tailor k�nnen Sie leicht Ihr Website-Logo und die Anzeige des Website-Slogan anpassen.',
    'javascript_required' => 'Site-Tailor ben�tigt aktiviertes JavaScript.',
    'logo_options' => 'Site-Tailor - Logo-Optionen',
    'use_graphic_logo' => 'Grafik-Logo verwenden',
    'use_text_logo' => 'Text-Logo verwenden',
    'use_no_logo' => 'Kein Logo anzeigen',
    'display_site_slogan' => 'Seiten-Slogan anzeigen',
    'upload_logo' => 'Neues Logo hochladen',
    'current_logo' => 'Aktuelles Logo',
    'no_logo_graphic' => 'Keine Logo-Grafik verf�gbar',
    'logo_help' => 'Hochgeladene Grafik-Logos sind nicht skaliert, die Standardgr��e f�r Seite-Tailor-Logos sollte 100 Pixel hoch und nicht breiter als 500 Pixel sein. Du kannst gr��ere Bilder hochladen, aber Du wirst das CSS der Seite in styles.css �ndern m�ssen, damit die Anzeige korrekt ist.',
    'save' => 'Speichern',
    'create_element' => 'Men�element erstellen',
    'add_new' => 'Neues Men�objekt hinzuf�gen',
    'add_newmenu' => 'Neues Men� erstellen',
    'edit_menu' => 'Men� bearbeiten',
    'menu_list' => 'Men�liste',
    'configuration' => 'Konfiguration',
    'edit_element' => 'Men�objekt bearbeiten',
    'menu_element' => 'Men�element',
    'menu_type' => 'Men�typ',
    'elements' => 'Elemente',
    'enabled' => 'Aktiviert',
    'edit' => 'Bearbeiten',
    'delete' => 'L�schen',
    'move_up' => 'Hoch schieben',
    'move_down' => 'Runter schieben',
    'order' => 'Sortierung',
    'id' => 'ID',
    'parent' => '�bergeordnet',
    'label' => 'Men�name',
    'elementlabel' => 'Elementname',
    'display_after' => 'Anzeigen nach',
    'type' => 'Typ',
    'url' => 'URL',
    'php' => 'PHP-Funktion',
    'coretype' => 'glFusion-Men�',
    'group' => 'Gruppe',
    'permission' => 'Sichtbar f�r',
    'active' => 'Aktiv',
    'top_level' => 'Top-Level-Men�',
    'confirm_delete' => 'M�chten Sie dieses Men�bjekt wirklich l�schen?',
    'type_submenu' => 'Untermen�',
    'type_url_same' => '�bergordnetes Fenster',
    'type_url_new' => 'Neues Fenster mit Navigation',
    'type_url_new_nn' => 'Neues Fenster ohne Navigation',
    'type_core' => 'glFusion-Men�',
    'type_php' => 'PHP-Funktion',
    'gl_user_menu' => 'Benutzermen�',
    'gl_admin_menu' => 'Admin-Menu',
    'gl_topics_menu' => 'Kategorien-Men�',
    'gl_sp_menu' => 'Statische-Seiten-Men�',
    'gl_plugin_menu' => 'Plugin-Men�',
    'gl_header_menu' => 'Header-Men�',
    'plugins' => 'Plugin',
    'static_pages' => 'Statische Seiten',
    'glfusion_function' => 'glFusion-Funktion',
    'cancel' => 'Abbruch',
    'action' => 'Aktion',
    'first_position' => 'Erste Position',
    'info' => 'Info',
    'non-logged-in' => 'Nur nicht-engeloggte Benutzer',
    'target' => 'URL-Fenster',
    'same_window' => 'Gleiches Fenster',
    'new_window' => 'Neues Fenster',
    'menu_color_options' => 'Men�farben-Optionen',
    'top_menu_bg' => 'Hauptmen� HG',
    'top_menu_hover' => 'Hauptmen� Hover',
    'top_menu_text' => 'Hauptmen� Text',
    'top_menu_text_hover' => 'Hauptmen� Text Hover / Untermen� Text',
    'sub_menu_text_hover' => 'Untermen� Text Hover',
    'sub_menu_text' => 'Untermen� Textfarbe',
    'sub_menu_bg' => 'Untermen� HG',
    'sub_menu_hover_bg' => 'Untermen� Hover-HG',
    'sub_menu_highlight' => 'Untermen� Highlight',
    'sub_menu_shadow' => 'Untermen� Schatten',
    'menu_builder' => 'Men�-Builder',
    'logo' => 'Logo',
    'menu_colors' => 'Men�optionen',
    'options' => 'Optionen',
    'menu_graphics' => 'Men�grafiken',
    'graphics_or_colors' => 'Grafiken oder Farben verwenden?',
    'graphics' => 'Grafiken',
    'colors' => 'Farben',
    'menu_bg_image' => 'Hauptmen� Men�-HG Bild',
    'currently' => 'Aktuell',
    'menu_hover_image' => 'Hauptmen� Hover Bild',
    'parent_item_image' => 'Untermen� �bergordnet. Indikator',
    'not_used' => 'Nicht verwendet, wenn "Grafiken verwenden" unten ausgew�hlt wurde.',
    'select_color' => 'Farbe w�hlen',
    'menu_alignment' => 'Men�ausrichtung',
    'alignment_question' => 'Men� ausrichten nach',
    'align_left' => 'Links',
    'align_right' => 'Rechts',
    'blocks' => 'Block-Stile',
    'reset' => 'Formular zur�cksetzen',
    'defaults' => 'Auf Standardwerte zur�cksetzen',
    'confirm_reset' => 'Dies setzt die Men�farben und Grafiken auf die Installationswerte zur�ck und l�scht automatisch den Template-Cache. M�chten Sie wirklich weitermachen? Wenn fertig, dann l�schen Sie auch den Cache ihres Browsers.',
    'menu_properties' => 'Men�eigenschaften f�r',
    'disabled_plugin' => 'Nicht gefunden oder deaktiviertes Plugin',
    'clone' => 'Kopieren',
    'clone_menu_label' => 'Name f�r geklontes Men�',
    'topic' => 'Topics'
);

$LANG_HC = array(
    'main_menu_bg_color' => 'Hauptmen� HG',
    'main_menu_hover_bg_color' => 'Hauptmen� Hover',
    'main_menu_text_color' => 'Hauptmen� Text',
    'main_menu_hover_text_color' => 'Hauptmen� Text Hover / Untermen� Text',
    'submenu_hover_text_color' => 'Untermen� Text Hover',
    'submenu_background_color' => 'Untermen� HG',
    'submenu_hover_bg_color' => 'Untermen� HG',
    'submenu_highlight_color' => 'Untermen� Highlight',
    'submenu_shadow_color' => 'Untermen� Schatten'
);

$LANG_HS = array(
    'main_menu_text_color' => 'Text',
    'main_menu_hover_text_color' => 'Hover',
    'submenu_highlight_color' => 'Trenner'
);

$LANG_VC = array(
    'main_menu_bg_color' => 'Men� BG',
    'main_menu_hover_bg_color' => 'Men� BG Hover',
    'main_menu_text_color' => 'Men� Text',
    'main_menu_hover_text_color' => 'Men� Text Hover',
    'submenu_text_color' => 'Untermen� Text',
    'submenu_hover_text_color' => 'Untermen� Text Hover',
    'submenu_highlight_color' => 'Rahmen'
);

$LANG_VS = array(
    'main_menu_text_color' => 'Men� Text',
    'main_menu_hover_text_color' => 'Men� Text Hover'
);

$LANG_ST_MENU_TYPES = array(
    1 => 'Horizontal - Kaskadierend',
    2 => 'Horizontal - Einfach',
    3 => 'Vertikal - Kaskadierend',
    4 => 'Vertikal - Einfach'
);

$LANG_ST_TYPES = array(
    1 => 'Untermen�',
    2 => 'glFusion-Aktion',
    3 => 'glFusion-Men�',
    4 => 'Plugin',
    5 => 'Statische Seite',
    6 => 'Externe URL',
    7 => 'PHP-Funktion',
    8 => 'Label',
    9 => 'Topic'
);

$LANG_ST_TARGET = array(
    1 => '�bergeordnetes Fenster',
    2 => 'Neues Fenster mit Navigation',
    3 => 'Neues Fenster ohne Navigation'
);

$LANG_ST_GLFUNCTION = array(
    0 => 'Startseite',
    1 => 'Mitmachen',
    2 => 'Verzeichnis',
    3 => 'Pr�ferenzen',
    4 => 'Suche',
    5 => 'Seitenstatistik'
);

$LANG_ST_GLTYPES = array(
    1 => 'Benutzermen�',
    2 => 'Admin-Men�',
    3 => 'Kategorien-Men�',
    4 => 'Statische-Seiten - Men�',
    5 => 'Plugin-Men�',
    6 => 'Header-Men�'
);

$LANG_ST_ADMIN = array(
    1 => 'Men�-Builder erlaubt Dir das Erstellen und bearbeiten von Men�s f�r Deine Seite. Um ein neues Men� hinzuzuf�gen, klicke auf den Neues-Men�-erstellen Link oben. Um ein Men�objekt zu bearbeiten, klicke auf das Icon unter der Elemente-Spalte. Um die Men�farben zu �ndern, klicke auf das Icon unter der Optionen-Spalte.',
    2 => 'Um ein neues Men� zu erstellen, geben Sie unten einen Men�namen und Men�typ an. Sie k�nnen auch den aktiven Status setzen und welche Gruppen das Men� sehen k�nnen, indem Sie die Aktiv und Sichtbar-f�r Felder verwenden.',
    3 => 'Klick auf das Icon unter der Bearbeiten-Spalte, um die Eigenschaften eines Men�objekts zu bearbeiten. Ordne die Objekte, indem Du sie mit den Pfeilen unter der Sortierung-Spalte, hoch oder unter schiebst.',
    4 => 'Um ein neues Men�element zu erstellen, geben Sie unten die Details und Berechtigungen ein.',
    5 => 'Sobald ein Element erstellt wurde, k�nne Sie immer zur�ck gehen und seine Details und Berechtigungen unten bearbeiten.',
    6 => 'Men�-Builder erlaubt Ihnen, das Aussehen ihrer Men�s auf einfach Art zu �ndern. Bearbeiten Sie die Werte unten, um einen besonderen Men�stil zu erstellen.'
);

$PLG_sitetailor_MESSAGE1 = 'Site-Tailor - Logo-Optionen erfolgreich gespeichert.';
$PLG_sitetailor_MESSAGE2 = 'Hochgeladenes Logo war kein JPG, GIF, oder PNG image.';
$PLG_sitetailor_MESSAGE3 = 'Es trat ein Problem beim Upgraden von Site-Tailor auf, schau bitte in die Datei error.log f�r mehr Infos.';
$PLG_sitetailor_MESSAGE4 = 'Logo �berschreitet die max. erlaubte H�he oder Breite.';

?>