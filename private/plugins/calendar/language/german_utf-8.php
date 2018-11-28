<?php
/**
* glFusion CMS
*
* UTF-8 Language File for Calendar Plugin
*
* @license GNU General Public License version 2 or later
*     http://www.opensource.org/licenses/gpl-license.php
*
*  Copyright (C) 2008-2018 by the following authors:
*   Mark R. Evans   mark AT glfusion DOT org
*
*  Based on prior work Copyright (C) 2001-2005 by the following authors:
*   Tony Bibbs - tony AT tonybibbs DOT com
*   Trinity Bays - trinity93 AT gmail DOT com
*
*/

if (!defined ('GVERSION')) {
    die ('This file cannot be used on its own.');
}

global $LANG32;

###############################################################################
# Array Format:
# $LANGXX[YY]:  $LANG - variable name
#               XX    - file id number
#               YY    - phrase id number
###############################################################################

# index.php
$LANG_CAL_1 = array(
    1 => 'Terminkalender',
    2 => 'Es gibt keine Termine anzuzeigen.',
    3 => 'Wann',
    4 => 'Wo',
    5 => 'Beschreibung',
    6 => 'Termin hinzufügen',
    7 => 'Anstehende Termine',
    8 => 'Wenn Du diesen Termin zu Deinem Kalender hinzufügst, kannst Du Dir schneller einen Überblick über die Termine verschaffen, die Dich interessieren, indem Du einfach auf "Mein Kalender" klickst.',
    9 => 'Zu Meinem Kalender hinzufügen',
    10 => 'Aus Meinem Kalender entfernen',
    11 => 'Termin wird zum Kalender von %s hinzugefügt',
    12 => 'Termin',
    13 => 'Beginnt',
    14 => 'Endet',
    15 => 'Zurück zum Kalender',
    16 => 'Kalender',
    17 => 'Datum-Beginn',
    18 => 'Datum-Ende',
    19 => 'Kalender-Einsendungen',
    20 => 'Titel',
    21 => 'Datum-Beginn',
    22 => 'URL',
    23 => 'Meine Termine',
    24 => 'Allgemeine Termine',
    25 => 'Es stehen keine Termine an',
    26 => 'Einen Termin einsenden',
    27 => "<ul><li>Wenn Du einen Termin bei {$_CONF['site_name']} einsendest, wird er in den Kalender aufgenommen, von wo aus ihn andere Benutzer in ihren persönlichen Kalender übernehmen können.</li><li>Dies ist <b>NICHT</b> dazu gedacht, private Termine und Ereignisse wie etwa Geburtstage zu verwalten.</li><li>Wenn Du einen Termin einsendest, wird er an die Administratoren weitergeleitet und sobald er von diesen akzeptiert wird, wird er im Kalender erscheinen.</li></ul>",
    28 => 'Titel',
    29 => 'Uhrzeit-Ende',
    30 => 'Uhrzeit-Beginn',
    31 => 'Ganztägiger Termin',
    32 => 'Address-Zeile 1',
    33 => 'Address-Zeile 2',
    34 => 'Stadt',
    35 => 'Bundesland',
    36 => 'Postleitzahl',
    37 => 'Art des Termins',
    38 => 'Termin-Arten ändern',
    39 => 'Ort',
    40 => 'Termin hinzufügen zu',
    41 => 'Öffentlicher Kalender',
    42 => 'Persönlicher Kalender',
    43 => 'Link',
    44 => 'HTML ist nicht erlaubt',
    45 => 'Absenden',
    46 => 'Anzahl Termine',
    47 => 'Top 10 der Termine',
    48 => 'Angezeigt',
    49 => 'Es wurden noch keine Termine eingetragen.',
    50 => 'Termine',
    51 => 'Löschen',
    52 => 'Eingereicht von',
    53 => 'Kalender-Ansicht',
);

$_LANG_CAL_SEARCH = array(
    'results' => 'Gefundene Termine',
    'title' => 'Titel',
    'date_time' => 'Datum und Uhrzeit',
    'location' => 'Ort',
    'description' => 'Beschreibung'
);

###############################################################################
# calendar.php ($LANG30)

$LANG_CAL_2 = array(
    8 => 'Persönlichen Termin eintragen',
    9 => '%s Termin',
    10 => 'Termine am',
    11 => 'Öffentlicher Kalender',
    12 => 'Persönlicher Kalender',
    25 => 'Zurück zu  ',
    26 => 'Ganztägig',
    27 => 'Woche',
    28 => 'Persönlicher Kalender für',
    29 => 'Öffentlicher Kalender',
    30 => 'Termin löschen',
    31 => 'Hinzufügen',
    32 => 'Termin',
    33 => 'Datum',
    34 => 'Uhrzeit',
    35 => 'Neuer Termin',
    36 => 'Absenden',
    37 => 'Der persönliche Kalender ist auf dieser Seite leider deaktiviert.',
    38 => 'Persönliche Termin-Verwaltung',
    39 => 'Tag',
    40 => 'Woche',
    41 => 'Monat',
    42 => 'Öffentlichen Termin eintragen',
    43 => 'Termin-Einsendungen'
);

###############################################################################
# admin/plugins/calendar/index.php, formerly admin/event.php ($LANG22)

$LANG_CAL_ADMIN = array(
    1 => 'Termin-Editor',
    2 => 'Fehler',
    3 => 'Titel',
    4 => 'URL',
    5 => 'Datum-Beginn',
    6 => 'Datum-Ende',
    7 => 'Ort',
    8 => 'Beschreibung',
    9 => '(mit http://)',
    10 => 'Es müssen mindestens Datum und Uhrzeit, Titel und Beschreibung eingegeben werden!',
    11 => 'Termin-Verwaltung',
    12 => '<ul><li>Auf das Bearbeiten-Icon klicken, um einen Termin zu bearbeiten oder zu löschen.</li><li>Mit "Neu anlegen" wird ein neuer Termin angelegt.</li><li>Das Kopie-Icon erzeugt eine Kopie eines vorhandenen Termins.</li></ul>',
    13 => 'Autor',
    14 => 'Datum-Beginn',
    15 => 'Datum-Ende',
    16 => '',
    17 => "Du hast keine Berechtigung auf diesen Termin zuzugreifen. Dieser Zugriffsversuch wurde protokolliert. <a href=\"{$_CONF['site_admin_url']}/plugins/calendar/index.php\">Zurück zur Termin-Verwaltung</a>.",
    18 => '',
    19 => '',
    20 => 'Speichern',
    21 => 'Abbruch',
    22 => 'Löschen',
    23 => 'Datum-Beginn ungültig!',
    24 => 'Datum-Ende ungültig!',
    25 => 'FEHLER: Datum-Ende ist vor Datum-Beginn.',
    26 => 'Alte Einträge löschen',
    27 => 'Diese Termine sind älter als ',
    28 => ' Monate.<ul><li>Aktualisiere den Zeitraum, wie gewünscht, und klicken dann auf "Liste aktualisieren".</li><li>Wähle einen oder mehrere Termine aus den angezeigten Ergebnissen aus.</li><li>Klicke anschließend auf das Symbol Löschen, um diese Termine aus Deiner Datenbank zu entfernen.</li><li>Nur Termine, die auf dieser Seite angezeigt und ausgewählt sind, werden gelöscht.</li></ul>',
    29 => '',
    30 => 'Liste aktualisieren',
    31 => 'Bist Du sicher, dass Du alle ausgewählten Benutzer dauerhaft löschen möchtest?',
    32 => 'Alle auflisten',
    33 => 'Keine Termine zum löschen ausgewählt',
    34 => 'Termin ID',
    35 => 'konnte nicht gelöscht werden',
    36 => 'Erfolgreich gelöscht',
    37 => 'Termine überprüfen',
    38 => 'Bereinigen',
    39 => 'Termin-Verwaltung',
    40 => 'Termin-Liste',
    41 => 'Hier kannst Du neue Termine erstellen oder vorhandene Einträge bearbeiten oder löschen.',
);

$LANG_CAL_AUTOTAG = array(
    'desc_calendar' => 'Link: zu einem Kalender-Eintrag; link_text defaults to event title: [calendar:<i>event_id</i> {link_text}]',
);

$LANG_CAL_MESSAGE = array(
    'save' => 'Der Termin wurde erfolgreich gespeichert.',
    'delete' => 'Der Termin wurde erfolgreich gelöscht.',
    'private' => 'Der Termin wurde erfolgreich in Deinen Kalender eingetragen.',
    'login' => 'Du musst angemeldet sein, um auf Deinen persönlichen Kalender zugreifen zu können.',
    'removed' => 'Der Termin wurde erfolgreich aus Deinem persönlichen Kalender entfernt.',
    'noprivate' => 'Persönliche Kalender sind auf dieser Site nicht verfügbar.',
    'unauth' => 'Du hast keinen Zugriff auf die Termin-Verwaltung. Alle Versuche, auf Bereiche ohne entsprechende Berechtigung zuzugreifen, werden protokolliert.',
    'delete_confirm' => 'Bist Du sicher. dass Du diesen Termin löschen willst?'
);

$PLG_calendar_MESSAGE4 = "{$_CONF['site_name']} bedankt sich für Deine Einsendung. Dein Termin wurde erfolgreich an unser Team weitergeleitet. Sobald er akzeptiert wird, wird er im <a href=\"{$_CONF['site_url']}/calendar/index.php\">Kalender</a> erscheinen.";
$PLG_calendar_MESSAGE17 = 'Dein Termin wurde erfolgreich gespeichert.';
$PLG_calendar_MESSAGE18 = 'Der Termin wurde erfolgreich gelöscht.';
$PLG_calendar_MESSAGE24 = 'Der Termin wurde erfolgreich in Deinen Kalender eingetragen.';
$PLG_calendar_MESSAGE26 = 'Der Termin wurde erfolgreich gelöscht.';

// Messages for the plugin upgrade
$PLG_calendar_MESSAGE3001 = 'Plugin-Aktualisierung wird nicht unterstützt.';
$PLG_calendar_MESSAGE3002 = $LANG32[9];

// Localization of the Admin Configuration UI
$LANG_configsections['calendar'] = array(
    'label' => 'Kalender',
    'title' => 'Kalender-Einstellungen'
);

$LANG_confignames['calendar'] = array(
    'calendarloginrequired' => 'Zur Einsicht anmelden nötig?',
    'hidecalendarmenu' => 'Menüeintrag ausblenden?',
    'personalcalendars' => 'Persönliche Kalender?',
    'eventsubmission' => 'Einträge prüfen?',
    'showupcomingevents' => 'Zukünftige Termine anzeigen?',
    'upcomingeventsrange' => 'Zeitraum zukünftige Termine',
    'event_types' => 'Art der Termine',
    'hour_mode' => 'Stunden-Modus',
    'notification' => 'Benachrichtigungs E-Mail?',
    'delete_event' => 'Termine mit Benutzer löschen?',
    'aftersave' => 'Nach speichern des Termins',
    'default_permissions' => 'Standard-Terminrechte',
    'only_admin_submit' => 'Nur Admins das Eintragen erlauben',
    'displayblocks' => 'glFusion Blöcke anzeigen',
);

$LANG_configsubgroups['calendar'] = array(
    'sg_main' => 'Haupteinstellungen'
);

$LANG_fs['calendar'] = array(
    'fs_main' => 'Allgemeine-Einstellungen',
    'fs_permissions' => 'Standard-Berechtigungen'
);

$LANG_configSelect['calendar'] = array(
    0 => array(1=> 'Ja', 0 => 'Nein'),
    1 => array(true => 'Ja', false => 'Ja'),
    6 => array(12 => '12', 24 => '24'),
    9 => array('item'=>'Zum Termin weiterleiten', 'list'=>'Admin Liste anzeigen', 'plugin'=>'Kalender anzeigen', 'home'=>'Startseite anzeigen', 'admin'=>'Kommandozentrale'),
    12 => array(0=>'Kein Zugang', 2=>'Nur lesen', 3=>'Lesen-Schreiben'),
    13 => array(0=>'Linke Blöcke', 1=>'Rechte Blöcke', 2=>'Linke & Rechte Blöcke', 3=>'Keine')
);

?>
