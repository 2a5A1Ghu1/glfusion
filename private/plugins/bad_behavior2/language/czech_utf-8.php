<?php
/**
* glFusion CMS
*
* UTF-8 Language File for Bad Behavior2 Plugin
*
* @license GNU General Public License version 2 or later
*     http://www.opensource.org/licenses/gpl-license.php
*
*  Copyright (C) 2008-2018 by the following authors:
*   Mark R. Evans   mark AT glfusion DOT org
*
*  Based on prior work Copyright (C) 2000-2008 by the following authors:
*   Dirk Haun - dirk AT haun-online DOT de
*
*/

if (!defined ('GVERSION')) {
    die ('This file cannot be used on its own.');
}

$LANG_BAD_BEHAVIOR = array (
    'added'                     => 'Přidáno',
    'auto_refresh_off'          => 'Automaticky obnovit',
    'auto_refresh_on'           => 'Automaticky obnovit',
    'automatic_captcha'         => 'Automaticky přidáno (CAPTCHA)',
    'automatic_token'           => 'Automaticky přidáno (Token)',
    'automatic_hp'              => 'Automaticky přidáno (Spam X)',
    'back_to_search'            => 'Zpět na seznam hledání',
    'ban_ip'                    => 'Blokovat IP',
    'ban_list_info'             => 'Níže uvedené IP adresy jsou ze systému zakázány. Manuální zákazy jsou trvalé. Automatické zákazy vyprší po uplynutí časového období.',
    'ban_results'               => 'Na níže uvedených IP adresách se vyskytly chyby, které jim zabránily v zařazení na ban list.',
    'banned_ips'                => 'Blokované IP adresy',
    'blacklist'                 => 'Černá listina',
    'blacklist_info_text'       => 'Můžete zadat několik typů zákazů; User Agent - Začátek textu, User Agent - kdekoli v textu, User Agent Regex, URL text, Odkaž na text nebo IP adresu nebo rozsah IP adres pomocí formátu CIDR. Dokumentace <a href="https://www.glfusion.org/wiki/glfusion:bb2" target="_blank">glFusion\'s Bad Behavior2 Plugin</a> obsahuje veškeré podrobnosti o tom, jak nastavit bany.',
    'blacklist_items'           => 'Černá listina Ip adres',
    'blacklist_new'             => 'Nový příspěvek blacklistu',
    'blacklist_success_delete'  => 'Položky z blacklistu byly úspěšně odstraněny',
    'blacklist_success_save'    => 'Položka blacklistu úspěšně uložena',
    'block_title_admin'         => 'Admininstrace Bad Behavior2',
    'block_title_donate'        => 'Podpořit',
    'block_title_entry'         => 'Zobrazit detaily',
    'block_title_list'          => 'Logy Bad Behavior2',
    'blocked_ips'               => 'Blokovaná unikátní IP adresa',
    'cancel'                    => 'Zrušit',
    'captcha'                   => 'CAPTCHA',
    'date'                      => 'Date',
    'delete'                    => 'Smazat',
    'delete_bl_confirm_1'       => 'Opravdu chcete odstranit vybrané položky z blacklistu?',
    'delete_confirm_1'          => 'Jste si jisti, že chcete zrušit zákaz těchto IP?',
    'delete_confirm_2'          => 'Jste si jisti?',
    'delete_info'               => 'Odstranit zvolené položky',
    'delete_wl_confirm_1'       => 'Jste si jisti, že chcete odstranit vybrané položky na seznamu povolených?',
    'denied_reason'             => 'Důvod',
    'description'               => 'Plugin Bad Behavior doplňuje další řešení spamů tím, že funguje jako gatekeeper, zabráňuje spammerům v tom, aby vás nezahltily svým odpadem, a v mnoha případech vůbec vaše stránky číst. Tím se snižuje zatížení vašeho webu, dělá logy vašich stránek čistší y a může pomoci vyřešit odepření služeb způsobených spammery.',
    'donate_msg'                => 'Pokud shledáte tento plugin užitečným, zvažte prosím finanční příspěvek pro Michaela Hamptona, původního autora tohoto pluginu Bad Behavior. <a href="http://www.bad-behavior.ioerror.us/">Domovská stránka pluginu Bad Behavior</a>.',
    'duplicate_error'           => 'IP %s již v seznamu banů existuje.',
    'enter_ip'                  => 'Zadejte IP adresu',
    'enter_ip_info'             => 'Zadejte IP adresu pro zakázání. Ručně zadané zákazy jsou trvalé (dokud je ručně neodstraníte).',
    'error'                     => 'Chyba',
    'filter'                    => 'Výběr filtru',
    'filter'                    => 'Filtr',
    'fsockopen_failed'          => 'Nepodařilo se otevřít soket. Nemohu provést selftest.',
    'fsockopen_not_available'   => 'Lituji, ale PHP funkce <code>fsockopen</code> není dostupná. Nemohu provést selftest.',
    'go'                        => 'Přejít',
    'headers'                   => 'Záhlaví',
    'invalid_ip'                => 'IP %s není platná IPv4 adresa.',
    'ip_addr'                   => 'IP adresa',
    'ip_address'                => 'IP adresa',
    'ip_date'                   => 'IP / Datum / Stav',
    'ip_error'                  => 'Neplatná IP adresa nebo formát CIDR',
    'ip_prompt'                 => 'Zadejte IP adresu nebo rozsah',
    'item'                      => 'IP / User Agent / URL',
    'link_back'                 => 'Zpět k seznamu logů',
    'list_entries'              => 'Zobrazit log (%d)',
    'list_ips'                  => 'Seznam zakázaných IP',
    'list_no_entries'           => 'Log je prázdný.',
    'log_entries'               => 'Položky protokolu',
    'manual'                    => 'Ručně',
    'manually_added'            => 'Ručně přidáno',
    'new_entry'                 => 'Přidat Příspěvek',
    'no_bl_data_error'          => 'Nebyla zadána žádná data z černé listiny',
    'no_data'                   => 'Žádná data k dispozici',
    'no_data_error'             => 'Nebyla zadána žádná data z whitelistu',
    'no_filter'                 => 'Žádný filtr',
    'note'                      => 'Poznámky',
    'page_title'                => 'Bad Behavior2',
    'plugin_display_name'       => 'Bad Behavior2',
    'reason'                    => 'Info',
    'reason'                    => 'Důvod',
    'results'                   => 'Výsledky Bad Behavior2',
    'row_date'                  => 'Datum',
    'row_ip'                    => 'IP adresa',
    'row_method'                => 'Metoda',
    'row_protocol'              => 'Protokol',
    'row_reason'                => 'Důvod',
    'row_referer'               => 'Odkazující',
    'row_response'              => 'Odpověď',
    'row_user_agent'            => 'Prohlížeč',
    'search'                    => 'Vyhledat',
    'select_all'                => 'Vše',
    'select_iprange'            => 'IP / IP rozsah (CIDR)',
    'select_ua'                 => 'Prohlížeč',
    'select_url'                => 'Adresa URL',
    'self_test'                 => 'Test plugin Bad Behavior2',
    'spambot_ip'                => 'IP / IP rozsah (CIDR)',
    'spambot_ip_prompt'         =>  'Zadejte IP adresu nebo rozsah (CIDR) pro blokování',
    'spambot_referer'           => 'Odkazující',
    'spambot_referer_prompt'    =>  'Zadejte řetězec, který se má shodovat cokoliv v odkazující URL',
    'spambots'                  => 'UserAgent - kdekoliv',
    'spambots_0'                => 'Začátek řetězce UA',
    'spambots_0_prompt'         =>  'Zadejte řetězec pro shodu na začátku User agenta',
    'spambots_prompt'           =>  'Zadejte řetězec pro shodu kdekoli v User Agent',
    'spambots_regex'            => 'Regex User Agent',
    'spambots_regex_prompt'     =>  'Zadejte Regex (pravidelné výrazy) pro shodu v User agentovi',
    'spambots_url'              => 'URL řetězce',
    'spambots_url_prompt'       =>  'Zadejte řetězec, který se má shodovat s parametry URL',
    'stats_blocked'             => 'Blokováno',
    'stats_headline'            => 'Statistiky Bad Behavior2',
    'stats_no_hits'             => '6ádné záznamy.',
    'stats_reason'              => 'Důvod',
    'submit'                    => 'Odeslat',
    'temp_ban'                  =>  'Dočasný ban?',
    'temporary_ban'             =>  'DOČASNÝ BAN',
    'title_lookup_ip'           => 'Vyhledat IP adresu',
    'title_show_headers'        => 'Ukaž HTTP hlavičky',
    'token'                     => 'Token',
    'type'                      => 'Typ',
    'type_spambot_ip'           => 'IP adresa',
    'type_spambot_referer'      => 'Odkazující',
    'type_spambots'             => 'UA kdekoli',
    'type_spambots_0'           => 'UA',
    'type_spambots_regex'       => 'UA Regex',
    'type_spambots_url'         => 'URL',
    'ua_prompt'                 => 'Zadejte úplného User agenta',
    'unblock'                   => 'Odblokovat IP adresu',
    'url'                       => 'URL',
    'url_prompt'                => 'Zadejte URL adresu',
    'useragent'                 => 'UserAgent',
    'whitelist'                 => 'Seznam povolených',
    'whitelist_info_text'       => 'Můžete zadat IP adresu nebo škálu IP adres pomocí formátu CIDR, konkrétních User agentů nebo URL adres na vašem webu do seznamu povolených. Povolená položka nebude nikdy blokována ochranami proti spamu glFusionu, které poskytuje plugin Bad Behavior2.',
    'whitelist_items'           => 'Povolené položky',
    'whitelist_new'             => 'Nová povolená položka',
    'whitelist_success_delete'  => 'Povolené položky byly úspěšně odstraněny',
    'whitelist_success_save'    => 'Povolená položka byla úspěšně uložena',
    'invalid_item_id'           => 'Neplatné ID položky - nebyl nalezen žádný záznam',
);

$LANG_BB2_RESPONSE = array (
    '00000000' => 'Žádost proběhla - Nebyl zadán žádný User Agent',
    '136673cd' => 'IP addresa nalezena v externím blacklistu',
    '17566707' => 'Požadovaná hlavička \'Accept\' chybí',
    '17f4e8c8' => 'Prohlížeč byl nalezen v blacklistu',
    '17f4e8c9' => 'Referer byl nalezen na černé listině',
    '21f11d3f' => 'Prohlížeč se tvářil, že je AvantGo, byl však falešný',
    '2b021b1f' => 'IP adaresa nalezena v http:BL blacklistu',
    '2b90f772' => 'Připojení: přítomný TE, není podporován MSIE',
    '35ea7ffa' => 'Specifikován nesprávný jazyk',
    '408d7e72' => 'POST přišel příliš rychle po GET',
    '41feed15' => 'Záhlaví \'Pragma\' bez \'Cache-Control\' je zakázáno pro požadavky HTTP/1.1',
    '45b35e30' => 'Záhlaví \'Referer\' je poškozeno',
    '57796684' => 'Přítomno zakázané záhlaví \'X-Aaaaaaaaaa\' nebo \'X-Aaaaaaaaaaaa\'',
    '582ec5e4' => 'Záhlaví \'TE\' je přítomno, ale TE není specifikováno v \'Connection\' záhlaví',
    '69920ee5' => 'Záhlaví \'Referer\' je přítomno, ale prázdné',
    '6c502ff1' => 'Bot nevyhovuje plně RFC 2965',
    '70e45496' => 'Uživatelský agent prohlásil, že je CloudFlare, asi nepravdivě',
    '71436a15' => 'Uživatelský agent tvrdil, že je Yahoo, asi nepravdivě',
    '799165c2' => 'Detekováno cyklování prohlížeče',
    '7a06532b' => 'Vyžadované záhlaví \'Accept-Encoding\' chybí',
    '7ad04a8a' => 'Přítomno zakázané záhlaví \'Range\'',
    '7d12528e' => 'Zakázané záhlaví \'Range\' nebo \'Content-Range\' v požadavku POST',
    '939a6fbb' => 'Používá se zakázaný proxy server',
    '96c0bd29' => 'URL vzor nalezen na černé listině',
    '9c9e4979' => 'Přítomno zakázané záhlaví \'via\'',
    'a0105122' => 'Záhlaví \'Expect\' je zakázáno; Pošlete znovu bez Expect',
    'a1084bad' => 'Prohlížeč se tváří, že je MSIE, ale se špatnou verzí Windows',
    'a52f0448' => 'Záhlaví \'Connection\' obsahuje neplatné hodnoty',
    'b0924802' => 'Nesprávný formát HTTP/1.0 Keep-Alive',
    'b40c8ddc' => 'POST více jak dva dny po GET',
    'b7830251' => 'Přítomno zakázané záhlaví \'Proxy-Connection\'',
    'b9cc1d86' => 'Přítomno zakázané záhlaví \'X-Aaaaaaaaaa\' nebo \'X-Aaaaaaaaaaaa\'',
    'c1fa729b' => 'Detekováno použití cyklického proxy serveru',
    'cd361abb' => 'Požadavek nesměroval na formulář na této stránce',
    'd60b87c7' => 'Trackback došel přes proxy server',
    'e3990b47' => 'Obržen falešný tracback',
    'dfd9b1ad' => 'Požadavek obsahoval škodlivý JavaScript nebo útok vložením SQL',
    'e4de0453' => 'Prohlížeč se neúspěšně tvářil, že je msnbot',
    'e87553e1' => 'Znám tě a nemám tě rád, všivej spamere.',
    'f0dcb3fd' => 'Prohlížeč se pokusil poslat trackback',
    'f1182195' => 'Prohlížeč se neúspěšně tvářil, že je Googlebot.',
    'f9f2b8b9' => 'User-Agent je vyžadováno, ale žádný nebyl poskytnutý.',
    'f9f3b8b0' => 'Otazník na konci dotazu.',
    '96c0bd29' => 'Zjištěna SQL injekce',
    'f9f3b8b1' => 'registrujte BOT Útok',
    'f9f3b8b2' => '/RK=0/RS= BOT',
    '96c0bd30' => 'Zakázané adresy IP',
    '96c0bd40' => 'Zakázáno černou listinou',
);

$PLG_bad_behavior_MESSAGE1  = 'Pokud vidíte tuto zprávu, tak Bad Behavior2 <b>není</b> správně nainstalován! Přečtěte si prosím znovu pozorně instalační pokyny.';
$PLG_bad_behavior_MESSAGE100 = 'IP adresa byla odblokována.';
$PLG_bad_behavior_MESSAGE101 = 'Problém s odblokováním IP adresy.';
?>