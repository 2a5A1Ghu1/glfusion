<?php
// +--------------------------------------------------------------------------+
// | Bad Behavior Plugin - glFusion CMS                                       |
// +--------------------------------------------------------------------------+
// | german_formal.php                                                        |
// |                                                                          |
// | German formal language file, addressing the user as "Sie"                |
// +--------------------------------------------------------------------------+
// | Bad Behavior - detects and blocks unwanted Web accesses                  |
// | Copyright (C) 2005-2014 Michael Hampton                                  |
// +--------------------------------------------------------------------------+
// |                                                                          |
// | Copyright (C) 2000-2008 by the following authors:                        |
// |                                                                          |
// | Authors: Dirk Haun         - dirk AT haun-online DOT de                  |
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

$LANG_BAD_BEHAVIOR = array(
    'plugin_display_name' => 'Bad Behavior2',
    'page_title' => 'Bad Behavior2',
    'block_title_admin' => 'Bad Behavior2-Administration',
    'description' => 'Bad Behavior complements other link spam solutions by acting as a gatekeeper, preventing spammers from ever delivering their junk, and in many cases, from ever reading your site in the first place. This keeps your site\'s load down, makes your site logs cleaner, and can help prevent denial of service conditions caused by spammers.',
    'block_title_list' => 'Logdatei-Eintr�ge',
    'block_title_entry' => 'Detailansicht',
    'block_title_donate' => 'Spende',
    'list_entries' => 'Logdatei-Eintr�ge anzeigen (%d)',
    'list_no_entries' => 'Keine Logdatei-Eintr�ge',
    'row_ip' => 'IP-Addresse',
    'row_user_agent' => 'User Agent',
    'row_referer' => 'Referrer',
    'row_response' => 'Response',
    'row_method' => 'Methode',
    'row_protocol' => 'Protokoll',
    'row_date' => 'Datum',
    'row_reason' => 'Grund',
    'self_test' => 'Bad Behavior-Selbsttest',
    'link_back' => 'Zur�ck zur Liste der Logdatei-Eintr�ge',
    'title_show_headers' => 'HTTP-Header zeigen',
    'title_lookup_ip' => 'Informationen zur IP-Adresse',
    'error' => 'Fehler',
    'fsockopen_not_available' => 'Die PHP-Funktion <code>fsockopen</code> ist leider nicht verf�gbar. Selbsttest nicht durchf�hrbar.',
    'fsockopen_failed' => 'Konnte keine Socket-Verbindung �ffnen. Selbsttest nicht durchf�hrbar.',
    'donate_msg' => 'Wenn Sie dieses Plugin n�tzlich finden, denken Sie doch bitte �ber eine Spende an den Autor von Bad Behavior, Michael Hampton, nach. <a href="http://www.bad-behavior.ioerror.us/">Zur Bad Behavior-Homepage</a>.',
    'denied_reason' => 'Grund',
    'results' => 'Bad Behavior-Eintr�ge',
    'search' => 'Suchen',
    'stats_headline' => 'Bad Behavior - Statistiken',
    'stats_reason' => 'Grund',
    'stats_blocked' => 'Gesperrt',
    'stats_no_hits' => 'Keine Eintr�ge.',
    'blocked_ips' => 'Abgeblockte Requests nach IP-Adresse',
    'unblock' => 'IP-Adresse freigeben',
    'ip_date' => 'IP / Date / Status',
    'headers' => 'Headers'
);

$LANG_BB2_RESPONSE = array(
    '00000000' => 'Request Passed - No User Agent Specified',
    '136673cd' => 'IP-Adresse in externer Blacklist gefunden',
    '17566707' => 'Ben�tigte Header \'Accept \' fehlt',
    '17f4e8c8' => 'User-Agent wurde in Blacklist gefunden',
    '21f11d3f' => 'User-Agent gibt vor AvantGo zu sein',
    '2b021b1f' => 'IP-Adresse auf http:BL Blacklist gefunden',
    '2b90f772' => 'Anschluss: TE vorhanden, wird nicht von MSIE unterst�tzt',
    '35ea7ffa' => 'Ung�ltige Sprache angegeben',
    '408d7e72' => 'POST zu schnell erhalten',
    '41feed15' => 'Header \'Pragma\' ohne \'Cache-Control\'; f�r HTTP/1.1 Anfragen verboten',
    '45b35e30' => 'Header \'Referer\' ist besch�digt',
    '57796684' => 'Verbotene Header \'X-AAAAAAAAAA\' oder \'X-aaaaaaaaaaaa\' erhalten',
    '582ec5e4' => 'Header \'TE \' vorhanden, aber TE nicht in \'Connection \'-Kopfzeile engegeben',
    '69920ee5' => 'Header \'Referer\' vorhanden, aber leer',
    '6c502ff1' => 'Bot nicht vollst�ndig konform mit RFC 2965',
    '71436a15' => 'User-Agent gibt vor Yahoo zu sein',
    '799165c2' => 'Wiederholt sich �ndernde User-Agenten erkannt',
    '7a06532b' => 'Header \'Referer\' vorhanden, aber leer',
    '7ad04a8a' => 'Verbotene Header \'Range\' erhalten',
    '7d12528e' => 'Verbotene Header \'Range\' oder \'Content-Range\' in POST-Anfrage',
    '939a6fbb' => 'Gebannter Proxy-Server im Einsatz',
    '9c9e4979' => 'Verbotene Header \'via\' vorhanden',
    'a0105122' => 'Header \'Expect\' verboten; erneut erhalten',
    'a1084bad' => 'User-Agent gibt vor MSIE zu sein; mit falscher Windowsversion',
    'a52f0448' => 'Header \'Connection\' enth�lt ung�ltige Werte',
    'b40c8ddc' => 'POST �ber 2 Tage sp�ter erhalten  ',
    'b7830251' => 'Verbotene Header \'Proxy-Connection\' vorhanden',
    'b9cc1d86' => 'Verbotene Header \'X-Aaaaaaaaaa\' oder \'X-Aaaaaaaaaaaa\' vorhanden',
    'c1fa729b' => 'Wiederholt sich �ndernde Proxy-Server erkannt',
    'cd361abb' => 'Referer deutete nicht auf ein Formular auf dieser Seite',
    'd60b87c7' => 'Trackback empfangen �ber Proxy-Server',
    'e3990b47' => 'Offensichtlich gef�lschte Trackback erhalten',
    'dfd9b1ad' => 'Anfrage enthielt einen b�sartigen JavaScript- oder SQL-Injection-Angriff',
    'e4de0453' => 'User-Agent gibt vor MSNBot zu sein',
    'e87553e1' => 'Ich wei�, wir m�gen uns nicht - schmutziger Spammer.',
    'f0dcb3fd' => 'Web-Browser versucht, einen Trackback senden',
    'f1182195' => 'User-Agent gibt vor Googlebot zu sein',
    'f9f2b8b9' => 'Ein User-Agent ist erforderlich aber es wurde keiner bereitgestellt.',
    'f9f3b8b0' => 'Fragezeichen am Ende der Abfrage.',
    '96c0bd29' => 'SQL Injection festgestellt'
);

$PLG_bad_behavior_MESSAGE1 = 'Wenn Sie diesen Hinweis sehen, dann ist Bad Behavior <b>nicht</b> korrekt installiert. Bitte lesen SIe die Installationsanleitung noch einmal sorgf�ltig durch.';
$PLG_bad_behavior_MESSAGE100 = 'Die IP-Adresse wurde wieder freigegeben.';
$PLG_bad_behavior_MESSAGE101 = 'Es gab ein Problem beim Freigeben der IP-Adresse.';

?>