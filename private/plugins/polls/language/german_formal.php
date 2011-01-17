<?php
###############################################################################
# german_formal.php
#
# This is the German language file for the glFusion Polls Plugin,
# addressing the user as "Sie" (formal German).
#
# Authors: Dirk Haun <dirk AT haun-online DOT de>
#          Markus Wollschl�ger
#
# This program is free software; you can redistribute it and/or
# modify it under the terms of the GNU General Public License
# as published by the Free Software Foundation; either version 2
# of the License, or (at your option) any later version.
#
# This program is distributed in the hope that it will be useful,
# but WITHOUT ANY WARRANTY; without even the implied warranty of
# MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
# GNU General Public License for more details.
#
# You should have received a copy of the GNU General Public License
# along with this program; if not, write to the Free Software
# Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA.
#
###############################################################################

if (!defined ('GVERSION')) {
    die ('This file can not be used on its own.');
}

global $LANG32;

###############################################################################
# Array Format:
# $LANGXX[YY]:  $LANG - variable name
#               XX    - file id number
#               YY    - phrase id number
###############################################################################

$LANG_POLLS = array(
    'polls' => 'Umfragen',
    'results' => 'Ergebnisse',
    'pollresults' => 'Umfrage-Ergebnisse',
    'votes' => 'Stimmen',
    'vote' => 'Abstimmen',
    'pastpolls' => '�ltere Umfragen',
    'savedvotetitle' => 'Stimme gespeichert',
    'savedvotemsg' => 'Stimme wurde f�r die Umfrage gespeichert: ',
    'pollstitle' => 'Umfragen im System',
    'polltopics' => 'Andere Umfragen',
    'stats_top10' => 'Top Ten der Umfragen',
    'stats_topics' => 'Umfragekategorie',
    'stats_votes' => 'Stimmen',
    'stats_none' => 'Es gibt keine Umfragen oder es wurden keine Stimmen abgegeben.',
    'stats_summary' => 'Anzahl Umfragen (Stimmen)',
    'open_poll' => 'Abstimmen m�glich',
    'answer_all' => 'Bitte alle �brigen Fragen beantworten',
    'not_saved' => 'Ergebnis nicht gespeichert',
    'upgrade1' => 'Neue Version des Umfrage-Plugins installiert. Bitte',
    'upgrade2' => 'upgraden',
    'editinstructions' => 'Bitte f�r die Umfrage-ID mindestens eine Frage und zwei Antworten eintragen.',
    'pollclosed' => 'Diese Umfrage ist f�r die Abstimmung geschlossen.',
    'pollhidden' => 'Sie haben bereits abgestimmt. Diese Umfrage-Ergebnisse werden nur angezeigt, wenn eine Abstimmung abgegeben werden.',
    'start_poll' => 'Umfrage starten',
    'deny_msg' => 'Der Zugang zu dieser Umfrage wird verweigert. Entweder wurde die Umfrage verschoben, entfernt, oder Sie verf�gen nicht �ber ausreichende Berechtigungen.'
);

###############################################################################
# admin/plugins/polls/index.php

$LANG25 = array(
    1 => 'Kommentaranzeige',
    2 => 'Bitte eine Kategorie, mindestens eine Frage und eine Antwort f�r die Frage eintragen.',
    3 => 'Umfrage erstellt',
    4 => 'Umfrage %s gespeichert',
    5 => 'Umfrage bearbeiten',
    6 => 'Umfrage-ID',
    7 => '(keine Leerzeichen benutzen)',
    8 => 'Erscheint im Umfrageblock',
    9 => 'Kategorie',
    10 => 'Antworten / Abstimmungen / Bemerkungen',
    11 => 'Es trat ein Fehler auf beim Holen der Antwortdaten f�r Umfrage %s',
    12 => 'Es trat ein Fehler auf beim Holen der Fragedaten f�r Umfrage %s',
    13 => 'Umfrage erstellen',
    14 => 'speichern',
    15 => 'abbrechen',
    16 => 'l�schen',
    17 => 'Bitte Umfrage-ID eingeben',
    18 => 'Liste der Umfragen',
    19 => 'Um eine Umfrage zu bearbeiten oder zu l�schen, auf das Bearbeiten-Icon klicken.  Um eine neue Umfrage zu er�ffnen, bitte auf "Neu anlegen" oben klicken.',
    20 => 'Umfrageende',
    21 => 'Kein Zugang',
    22 => "Sie versuchen auf eine Umfrage zuzugreifen, f�r die Sie keine Berechtigung haben. Dieser Versuch wurde aufgezeichnet. Bitte <a href=\"{$_CONF['site_admin_url']}/poll.php\">gehen Sie zur�ck zur Umfrage-Administration</a>.",
    23 => 'Neue Umfrage',
    24 => 'Kommandozentrale',
    25 => 'Ja',
    26 => 'Nein',
    27 => 'Bearbeiten',
    28 => 'Senden',
    29 => 'Suchen',
    30 => 'Ergebnisse eingrenzen',
    31 => 'Frage',
    32 => 'Um diese Frage aus der Umfrage zu entfernen, den Fragetext l�schen.',
    33 => 'Umfrage l�uft',
    34 => 'Umfrage-Kategorie:',
    35 => 'Diese Umfrage hat noch ',
    36 => 'Fragen.',
    37 => 'Ergebnisse ausblenden wenn Umfrage l�uft',
    38 => 'W�hrend diese Umfrage l�uft, k�nnen nur der Eigent�mer &amp; Root die Ergebnisse sehen.',
    39 => 'Die Kategorie wird nur angezeigt, wenn sie mehr als eine Frage enth�lt.',
    40 => 'Alle Antworten zu dieser Umfrage ansehen',
    41 => 'Are you sure you want to delete this Poll?',
    42 => 'Are you absolutely sure you want to delete this Poll?  All questions, answers and comments that are associated with this Poll will also be permanently deleted from the database.'
);

$PLG_polls_MESSAGE19 = 'Umfrage wurde gespeichert.';
$PLG_polls_MESSAGE20 = 'Umfrage wurde gel�scht.';

// Messages for the plugin upgrade
$PLG_polls_MESSAGE3001 = 'Plugin-Upgrade nicht unterst�tzt.';
$PLG_polls_MESSAGE3002 = $LANG32[9];

// Localization of the Admin Configuration UI
$LANG_configsections['polls'] = array(
    'label' => 'Umfragen',
    'title' => 'Umfragekonfiguration'
);

$LANG_confignames['polls'] = array(
    'pollsloginrequired' => 'Zur Einsicht anmelden erforderlich?',
    'hidepollsmenu' => 'Men�eintrag ausblenden?',
    'maxquestions' => 'Max. Fragen pro Umfrage',
    'maxanswers' => 'Max. M�glichkeiten pro Frage',
    'answerorder' => 'Ergebnisse sortieren ...',
    'pollcookietime' => 'Voter Cookie g�ltig f�r',
    'polladdresstime' => 'Voter IP-Adresse g�ltig f�r',
    'delete_polls' => 'Umfragen mit Benutzer l�schen?',
    'aftersave' => 'Nach speichern der Umfrage',
    'default_permissions' => 'Standardeinstellungen Umfragen',
    'displayblocks' => 'Anzeige glFusion Bl�cke'
);

$LANG_configsubgroups['polls'] = array(
    'sg_main' => 'Haupteinstellungen'
);

$LANG_fs['polls'] = array(
    'fs_main' => 'Allgemeine Umfrageeinstellungen',
    'fs_permissions' => 'Standardberechtigeungen - Umfragen'
);

// Note: entries 0, 1, and 12 are the same as in $LANG_configselects['Core']
$LANG_configselects['polls'] = array(
    0 => array('Ja' => 1, 'Nein' => 0),
    1 => array('Ja' => true, 'Nein' => false),
    2 => array('Wie eingesandt' => 'submitorder', 'Nach Abstimmung' => 'voteorder'),
    9 => array('Zur Umfrage weiterleiten' => 'item', 'Admin Liste anzeigen' => 'list', '�ffentliche Liste anzeigen' => 'plugin', 'Startseite anzeigen' => 'home', 'Kommandozentrale' => 'admin'),
    12 => array('Kein Zugang' => 0, 'Nur lesen' => 2, 'Lesen-Schreiben' => 3),
    13 => array('Linker Block' => 0, 'Rechter Block' => 1, 'Linker & Rechter Block' => 2, 'Keine' => 3)
);

?>