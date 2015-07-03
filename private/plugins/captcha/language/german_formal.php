<?php
// +--------------------------------------------------------------------------+
// | CAPTCHA Plugin - glFusion CMS                                            |
// +--------------------------------------------------------------------------+
// | german_formal.php                                                        |
// |                                                                          |
// | German language file                                                     |
// | Modifiziert: August 09 Tony Kluever	                                    |
// +--------------------------------------------------------------------------+
// | Copyright (C) 2002-2008 by the following authors:                        |
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

$LANG_CP00 = array(
    'menulabel' => 'CAPTCHA',
    'plugin' => 'CAPTCHA',
    'access_denied' => 'Zugriff verweigert',
    'access_denied_msg' => 'Sie besitzen nicht die n�tigen Berechtigungen, um auf diese Seite zuzugreifen.  Ihr Benutzername und IP wurden aufgezeichnet.',
    'admin' => 'CAPTCHA-Administration',
    'install_header' => 'CAPTCHA-Plugin - Installation/Deinstallation',
    'installed' => 'CAPTCHA ist installiert',
    'uninstalled' => 'CAPTCHA ist nicht installiert',
    'install_success' => 'CAPTCHA-Installation erfolgreich.  <br /><br />Bitte lesen Sie die Dokumentation durch und gehen in die <a href="%s">Admin-Sektion</a> um sicherzustellen, dass ihre Einstellungen zu ihrer Hosting-Umgebung passen.',
    'install_failed' => 'Installation fehlgeschlagen -- Schauen Sie in die Datei error.log f�r weitere Infos.',
    'uninstall_msg' => 'Plugin erfolgreich deinstalliert',
    'install' => 'Installieren',
    'uninstall' => 'Deinstallieren',
    'warning' => 'Warnung! Plugin ist noch akiviert',
    'enabled' => 'Deaktivieren Sie das Plugin, bevor Sie es deinstallieren.',
    'readme' => 'CAPTCHA-Plugin-Installation',
    'installdoc' => "<a href=\"{$_CONF['site_admin_url']}/plugins/captcha/install_doc.html\">Installationsanleitung</a>",
    'overview' => 'CAPTCHA ist ein natives glFusion-Plugin, dass zus�tzlichen Schutz vor Spambots gew�hrt. <br /><br />Ein CAPTCHA (ein Akronym f�r "Completely Automated Public Turing test to tell Computers and Humans Apart", TM by Carnegie Mellon University) ist ein Frage/Antwort-Test, um festzustellen, ob der Benutzer ein Mensch oder nicht. Durch das Anzeigen eine schwer lesbaren Grafik mit Buchstaben und Zahlen, geht man davon aus, dass nur ein Mensch sie lesen und die entsprechenden Zeichen eingeben kann. Das Implementieren von CAPTCHA soll helfen, die Anzahl der Spambots auf Deiner Seite zu reduzieren.',
    'details' => 'Das CAPTCHA-Plugin verwendet statische (vorab generierte) CAPTCHA-Bilder, es sei denn, Sie konfigurieren CAPTCHA so, dass dynamisch Bilder mittels der GD Graphic Library oder ImageMagick generiert werden.  Um die GD Libraries oder ImageMagick zu verwenden, m�ssen True-Type-Schriftarten unterst�tzen.  Erkundigen Sie sich bei ihrem Webhoster, ob sie TTF unterst�tzen.',
    'preinstall_check' => 'CAPTCHA erfordert folgendes:',
    'glfusion_check' => 'glFusion v1.0.1 oder gr��er, gemeldete Version ist <b>%s</b>.',
    'php_check' => 'PHP v4.3.0 oder gr��er, gemeldete Version ist <b>%s</b>.',
    'preinstall_confirm' => "F�r alle Details zum Installieren von CAPTCHA, schauen Sie bitte in die <a href=\"{$_CONF['site_admin_url']}/plugins/captcha/install_doc.html\">Installationsanleitung</a>.",
    'captcha_help' => 'Solve the Problem',
    'bypass_error' => 'Sie haben versucht CAPTCHA auf dieser Seite zu umgehen, bitte verwenden Sie den Neuer-Benutzer-Link zur Registrierung.',
    'bypass_error_blank' => 'Sie haben versucht CAPTCHA auf dieser Seite zu umgehen, bitte geben Sie eine g�ltige CAPTCHA-Zeichenfolge ein.',
    'entry_error' => 'Die eingegebene CAPTCHA-Zeichenfolge stimmt nicht mit den Zeichen in der Grafik �berein, bitte versuchen Sie es erneut. <b>Gro�-und Kleinschreibung!</b>',
    'entry_error_pic' => 'The selected CAPTCHA images did not match the request on the graphic, please try again.',
    'captcha_info' => 'Das CAPTCHA-Plugin bietet Deiner Seite zus�tzlichen Schutz vor Spambots.  Schauen Sie in das <a href="%s">Online-Dokumentation-Wiki</a> f�r weitere Infos.',
    'enabled_header' => 'Aktuelle CAPTCHA-Einstellungen',
    'on' => 'An',
    'off' => 'Aus',
    'captcha_alt' => 'Sie m�ssen den grafischen Text eingeben - kontaktieren Sie den Seiten-Admin, wenn es Ihnen nicht m�glich ist, die Grafik zu lesen',
    'save' => 'Speichern',
    'cancel' => 'Abbruch',
    'success' => 'Konfigurationsoptionen erfolgreich gespeichert.',
    'reload' => 'Neues Bild',
    'reload_failed' => "Sorry, Sie k�nnen das CAPTCHA-Bild nicht neuladen\nSenden Sie das Formular ab und ein neues CAPTCHA wird geladen",
    'reload_too_many' => 'Sie k�nnent max. 5 neue Bilder generieren lassen',
    'session_expired' => 'Ihre CAPTCHA-Session ist abgelaufen, bitte versuchen Sie es erneut',
    'picture' => 'Bild',
    'characters' => 'Zeichen',
    'ayah_error' => 'Sorry, but we were not able to verify you as human. Please try again.',
    'captcha_math' => 'Enter the answer',
    'captcha_prompt' => 'Are You Human?'
);

// Localization of the Admin Configuration UI
$LANG_configsections['captcha'] = array(
    'label' => 'CAPTCHA',
    'title' => 'CAPTCHA-Konfiguration'
);

$LANG_confignames['captcha'] = array(
    'gfxDriver' => 'Grafiktreiber',
    'gfxFormat' => 'Grafikformate',
    'imageset' => 'Statisches Bildset',
    'debug' => 'Debug',
    'gfxPath' => 'Kompletter Pfad zu ImageMagick\'s Konvertierungstool',
    'remoteusers' => 'CAPTCHA f�r alle Remote-Benutzer erzwingen',
    'logging' => 'Aufzeichnen ung�ltiger CAPTCHA-Versuche',
    'anonymous_only' => 'Nur f�r G�ste',
    'enable_comment' => 'F�r Kommentare',
    'enable_story' => 'F�r Artikel',
    'enable_registration' => 'F�r Registrierung',
    'enable_contact' => 'F�r Kontakt',
    'enable_emailstory' => 'F�r Artikel per E-Mail',
    'enable_forum' => 'F�r Forum',
    'enable_mediagallery' => 'F�r Mediengalerie (Postkarten)',
    'enable_rating' => 'F�r Rating-Plugin',
    'enable_links' => 'F�r Links-Plugin',
    'enable_calendar' => 'F�r Kalender-Plugin',
    'expire' => 'Wieviele Sekunden eine CAPTCHA-Session g�ltig ist',
    'publickey' => 'reCAPTCHA Public Key - <a href="https://www.google.com/recaptcha/admin/create">reCAPTCHA Signup</a>',
    'privatekey' => 'reCAPTCHA Private Key',
    'recaptcha_theme' => 'reCAPTCHA Theme',
    'ay_publickey' => 'Are You a Human Publisher Key - <a href="http://areyouahuman.com/" target=_blank>Are You a Human Signup</a>',
    'ay_privatekey' => 'Are You a Human Scoring Key'
);

$LANG_configsubgroups['captcha'] = array(
    'sg_main' => 'Haupteinstellungen'
);

$LANG_fs['captcha'] = array(
    'cp_public' => 'Allgemeine Einstellungen',
    'cp_integration' => 'CAPTCHA-Integration'
);

// Note: entries 0, 1, and 12 are the same as in $LANG_configselects['Core']
$LANG_configselects['captcha'] = array(
    0 => array('Ja' => 1, 'Nein' => 0),
    1 => array('Ja' => true, 'Nein' => false),
    2 => array('GD Libs' => 0, 'ImageMagick' => 1, 'Stat. Bilder' => 2, 'reCAPTCHA' => 3, 'Are You Human Game' => 5, 'Math Equation' => 6),
    4 => array('Standard' => 'default', 'Einfach' => 'simple'),
    5 => array('JPG' => 'jpg', 'PNG' => 'png'),
    6 => array('clean' => 'clean', 'red' => 'red', 'white' => 'white', 'blackglass' => 'blackglass')
);
$PLG_captcha_MESSAGE1 = 'CAPTCHA-Plugin Upgrade: Update erfolgreich abgeschlossen.';
$PLG_captcha_MESSAGE2 = 'CAPTCHA Plugin Successfully Installed';
$PLG_captcha_MESSAGE3 = 'CAPTCHA Plugin Successfully Installed';

?>