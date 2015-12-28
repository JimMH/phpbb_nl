<?php
/**
*
* This file is part of the phpBB Forum Software package.
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>, phpBBservice.nl <http://www.phpbbservice.nl>, phpBB.nl <http://www.phpbb.nl>
* @license GNU General Public License, version 2 (GPL-2.0)
*
* For full copyright and license information, please see
* the docs/CREDITS.txt file.
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	'ACTION'				=> 'Actie',
	'ACTION_NOTE'			=> 'Actie/Notitie',
	'ADD_FEEDBACK'			=> 'Feedback toevoegen',
	'ADD_FEEDBACK_EXPLAIN'	=> 'Als je een rapport wilt toevoegen aan dit, vul dan het volgende formulier in. Gebruik alleen platte tekst; HTML, BBCode, etc. zijn niet toegestaan.',
	'ADD_WARNING'			=> 'Waarschuwing toevoegen',
	'ADD_WARNING_EXPLAIN'	=> 'Om een waarschuwing te versturen naar deze gebruiker, vul het volgende formulier in. Gebruik alleen platte tekst; HTML, BBCode, etc. zijn niet toegestaan.',
	'ALL_ENTRIES'			=> 'Alle vermeldingen',
	'ALL_NOTES_DELETED'		=> 'Succesvol alle gebruikersnotities verwijderd.',
	'ALL_REPORTS'			=> 'Alle meldingen',
	'ALREADY_REPORTED'		=> 'Dit bericht is al gemeld.',
	'ALREADY_REPORTED_PM'	=> 'Dit privébericht is al gemeld.',
	'ALREADY_WARNED'		=> 'Een waarschuwing is al uitgegeven voor dit bericht.',
	'APPROVE'				=> 'Goedkeuren',
	'APPROVE_POST'			=> 'Bericht goedkeuren',
	'APPROVE_POST_CONFIRM'	=> 'Weet je zeker dat je dit bericht wilt goedkeuren?',
	'APPROVE_POSTS'			=> 'Berichten goedkeuren',
	'APPROVE_POSTS_CONFIRM'	=> 'Weet je zeker dat je de geselecteerde berichten wilt goedkeuren?',
	'APPROVE_TOPIC'			=> 'Onderwerp goedkeuren',
	'APPROVE_TOPIC_CONFIRM'	=> 'Weet je zeker dat je dit onderwerp wilt goedkeuren?',
	'APPROVE_TOPICS'		=> 'Onderwerpen goedkeuren',
	'APPROVE_TOPICS_CONFIRM'=> 'Weet je zeker dat je de geselecteerde onderwerpen wilt goedkeuren?',

	'CANNOT_MOVE_SAME_FORUM'=> 'Je kan een onderwerp niet verplaatsen naar het forum waar het al in staat.',
	'CANNOT_WARN_ANONYMOUS'	=> 'Je kan een niet geregistreerde gast gebruiker niet waarschuwen.',
	'CANNOT_WARN_SELF'		=> 'Je kan jezelf niet waarschuwen.',
	'CAN_LEAVE_BLANK'		=> 'Dit kan leeg gelaten worden.',
	'CHANGE_POSTER'			=> 'Verander auteur',
	'CLOSE_PM_REPORT'		=> 'Sluit PB melding',
	'CLOSE_PM_REPORT_CONFIRM'	=> 'Weet je zeker dat je de geselecteerde PB melding wilt sluiten?',
	'CLOSE_PM_REPORTS'		=> 'Sluit PB meldingen',
	'CLOSE_PM_REPORTS_CONFIRM'	=> 'Weet je zeker dat je de geselecteerde PB meldingen wilt sluiten?',
	'CLOSE_REPORT'			=> 'Sluit melding',
	'CLOSE_REPORT_CONFIRM'	=> 'Weet je zeker dat je de geselecteerde melding wilt sluiten?',
	'CLOSE_REPORTS'			=> 'Sluit meldingen',
	'CLOSE_REPORTS_CONFIRM'	=> 'Weet je zeker dat je de geselecteerde meldingen wilt sluiten?',

	'DELETE_PM_REPORT'			=> 'Verwijder PB melding',
	'DELETE_PM_REPORT_CONFIRM'	=> 'Weet je zeker dat je de geselecteerde PB melding wilt verwijderen?',
	'DELETE_PM_REPORTS'			=> 'Verwijder PB meldingen',
	'DELETE_PM_REPORTS_CONFIRM'	=> 'Weet je zeker dat je de geselecteerde PB meldingen wilt verwijderen?',
	'DELETE_POSTS'				=> 'Verwijder berichten',
	'DELETE_REPORT'				=> 'Verwijder melding',
	'DELETE_REPORT_CONFIRM'		=> 'Weet je zeker dat je de geselecteerde melding wilt verwijderen?',
	'DELETE_REPORTS'			=> 'Verwijder meldingen',
	'DELETE_REPORTS_CONFIRM'	=> 'Weet je zeker dat je de geselecteerde meldingen wilt verwijderen?',
	'DELETE_SHADOW_TOPIC'		=> 'Verwijder schaduwonderwerp',
	'DELETE_TOPICS'				=> 'Verwijder geselecteerde onderwerpen',
	'DISAPPROVE'				=> 'Afkeuren',
	'DISAPPROVE_REASON'			=> 'Afkeuringsreden',
	'DISAPPROVE_POST'			=> 'Afkeuren bericht',
	'DISAPPROVE_POST_CONFIRM'	=> 'Weet je zeker dat je dit bericht wilt afkeuren?',
	'DISAPPROVE_POSTS'			=> 'Afkeuren berichten',
	'DISAPPROVE_POSTS_CONFIRM'	=> 'Weet je zeker dat je de geselecteerde berichten wilt afkeuren?',
	'DISPLAY_LOG'				=> 'Invoer van vorige weergeven',
	'DISPLAY_OPTIONS'			=> 'Weergave opties',

	'EMPTY_REPORT'					=> 'Je moet een beschrijving invoeren wanneer je deze reden selecteert.',
	'EMPTY_TOPICS_REMOVED_WARNING'	=> 'Let op dat één of meerdere onderwerpen zijn verwijderd van de database omdat ze leeg zijn of leeg zullen worden.',

	'FEEDBACK'				=> 'Feedback',
	'FORK'					=> 'Kopieer',
	'FORK_TOPIC'			=> 'Kopieer onderwerp',
	'FORK_TOPIC_CONFIRM'	=> 'Weet je zeker dat je dit onderwerp wilt kopiëren?',
	'FORK_TOPICS'			=> 'Kopieer geselecteerde onderwerpen',
	'FORK_TOPICS_CONFIRM'	=> 'Weet je zeker dat je de geselecteerde onderwerpen wilt kopiëren?',
	'FORUM_DESC'			=> 'Beschrijving',
	'FORUM_NAME'			=> 'Forumnaam',
	'FORUM_NOT_EXIST'		=> 'Het forum dat je geselecteerd hebt bestaat niet.',
	'FORUM_NOT_POSTABLE'	=> 'Het forum dat je geselecteerd hebt kan niet in geplaatst worden.',
	'FORUM_STATUS'			=> 'Forumstatus',
	'FORUM_STYLE'			=> 'Forumstijl',

	'GLOBAL_ANNOUNCEMENT'	=> 'Algemene aankondiging',

	'IP_INFO'				=> 'IP-adres informatie',
	'IPS_POSTED_FROM'		=> 'IP-adres waarvan deze gebruiker heeft geplaatst',

	'LATEST_LOGS'				=> 'Laatste 5 gelogde acties',
	'LATEST_REPORTED'			=> 'Laatste 5 meldingen',
	'LATEST_REPORTED_PMS'		=> 'Laatste 5 PB meldingen',
	'LATEST_UNAPPROVED'			=> 'Laatste 5 berichten wachtend op goedkeuring',
	'LATEST_WARNING_TIME'		=> 'Laatst uitgegeven waarschuwing',
	'LATEST_WARNINGS'			=> 'Laatste 5 waarschuwingen',
	'LEAVE_SHADOW'				=> 'Schaduwonderwerp achterlaten',
	'LIST_REPORTS'				=> array(
		1	=> '%d melding',
		2	=> '%d meldingen',
	),
	'LOCK'						=> 'Sluit',
	'LOCK_POST_POST'			=> 'Sluit bericht',
	'LOCK_POST_POST_CONFIRM'	=> 'Weet je zeker dat je wilt voorkomen dat dit bericht gewijzigd kan worden?',
	'LOCK_POST_POSTS'			=> 'Sluit geselecteerde berichten',
	'LOCK_POST_POSTS_CONFIRM'	=> 'Weet je zeker dat je wilt voorkomen dat deze berichten gewijzigd kunnen worden?',
	'LOCK_TOPIC_CONFIRM'		=> 'Weet je zeker dat je dit onderwerp wilt sluiten?',
	'LOCK_TOPICS'				=> 'Sluit geselecteerde onderwerpen',
	'LOCK_TOPICS_CONFIRM'		=> 'Weet je zeker dat je alle geselecteerde onderwerpen wilt sluiten?',
	'LOGS_CURRENT_TOPIC'		=> 'Momenteel logs aan het bekijken van:',
	'LOGIN_EXPLAIN_MCP'			=> 'Om dit forum te modereren moet je aangemeld zijn.',
	'LOGVIEW_VIEWTOPIC'			=> 'Bekijk onderwerp',
	'LOGVIEW_VIEWLOGS'			=> 'Bekijk onderwerp log',
	'LOGVIEW_VIEWFORUM'			=> 'Bekijk forum',
	'LOOKUP_ALL'				=> 'Zoek alle IPs op',
	'LOOKUP_IP'					=> 'Zoek IP op',

	'MARKED_NOTES_DELETED'		=> 'Succesvol alle gemarkeerde gebruikersnotities verwijderd.',

	'MCP_ADD'						=> 'Waarschuwing toevoegen',

	'MCP_BAN'					=> 'Verbannen',
	'MCP_BAN_EMAILS'			=> 'Verban e-mails',
	'MCP_BAN_IPS'				=> 'Verban IPs',
	'MCP_BAN_USERNAMES'			=> 'Verban gebruikersnamen',

	'MCP_LOGS'						=> 'Moderatorlogs',
	'MCP_LOGS_FRONT'				=> 'Beginpagina',
	'MCP_LOGS_FORUM_VIEW'			=> 'Forumlogs',
	'MCP_LOGS_TOPIC_VIEW'			=> 'Onderwerpenlogs',

	'MCP_MAIN'						=> 'Begin',
	'MCP_MAIN_FORUM_VIEW'			=> 'Bekijk forum',
	'MCP_MAIN_FRONT'				=> 'Beginpagina',
	'MCP_MAIN_POST_DETAILS'			=> 'Berichtendetails',
	'MCP_MAIN_TOPIC_VIEW'			=> 'Bekijk onderwerp',
	'MCP_MAKE_ANNOUNCEMENT'			=> 'Wijzig naar “Aankondiging”',
	'MCP_MAKE_ANNOUNCEMENT_CONFIRM'	=> 'Weet je zeker dat je dit onderwerp wilt veranderen naar een “Aankondiging”?',
	'MCP_MAKE_ANNOUNCEMENTS'		=> 'Wijzig naar “Aankondigingen”',
	'MCP_MAKE_ANNOUNCEMENTS_CONFIRM'=> 'Weet je zeker dat je de geselecteerde onderwerpen wilt veranderen naar “Aankondigingen”?',
	'MCP_MAKE_GLOBAL'				=> 'Wijzig naar “Algemene aankondiging”',
	'MCP_MAKE_GLOBAL_CONFIRM'		=> 'Weet je zeker dat je dit onderwerp wilt veranderen naar een “Algemene aankondiging”?',
	'MCP_MAKE_GLOBALS'				=> 'Wijzig naar “Algemene aankondigingen”',
	'MCP_MAKE_GLOBALS_CONFIRM'		=> 'Weet je zeker dat je de geselecteerde onderwerpen wilt veranderen naar “Algemene aankondigingen”?',
	'MCP_MAKE_STICKY'				=> 'Wijzig naar “Sticky”',
	'MCP_MAKE_STICKY_CONFIRM'		=> 'Weet je zeker dat je dit onderwerp wilt veranderen naar een “Sticky”?',
	'MCP_MAKE_STICKIES'				=> 'Wijzig naar “Stickies”',
	'MCP_MAKE_STICKIES_CONFIRM'		=> 'Weet je zeker dat je de geselecteerde onderwerpen wilt veranderen naar “Stickies”?',
	'MCP_MAKE_NORMAL'				=> 'Wijzig naar “Standaard onderwerp”',
	'MCP_MAKE_NORMAL_CONFIRM'		=> 'Weet je zeker dat je dit onderwerp wilt veranderen naar een “Standaard onderwerp”?',
	'MCP_MAKE_NORMALS'				=> 'Wijzig naar “Standaard onderwerpen”',
	'MCP_MAKE_NORMALS_CONFIRM'		=> 'Weet je zeker dat je de geselecteerde onderwerpen wilt veranderen naar “Standaard onderwerpen”?',

	'MCP_NOTES'						=> 'Gebruikernotities',
	'MCP_NOTES_FRONT'				=> 'Beginpagina',
	'MCP_NOTES_USER'				=> 'Gebruikerdetails',

	'MCP_POST_REPORTS'				=> 'Meldingen uitgegeven op dit bericht',

	'MCP_PM_REPORTS'				=> 'Gemelde PBs',
	'MCP_PM_REPORT_DETAILS'			=> 'PB melding details',
	'MCP_PM_REPORTS_CLOSED'			=> 'Gesloten PB meldingen',
	'MCP_PM_REPORTS_CLOSED_EXPLAIN'	=> 'Dit is een lijst van alle meldingen over privéberichten die de vorige keer zijn opgelost.',
	'MCP_PM_REPORTS_OPEN'			=> 'Open PB meldingen',
	'MCP_PM_REPORTS_OPEN_EXPLAIN'	=> 'Dit is een lijst van alle gemelde privéberichten die nog behandeld moeten worden.',

	'MCP_REPORTS'					=> 'Gemelde berichten',
	'MCP_REPORT_DETAILS'			=> 'Melding details',
	'MCP_REPORTS_CLOSED'			=> 'Gesloten meldingen',
	'MCP_REPORTS_CLOSED_EXPLAIN'	=> 'Dit is een lijst van alle meldingen over berichten die de vorige keer zijn opgelost.',
	'MCP_REPORTS_OPEN'				=> 'Open meldingen',
	'MCP_REPORTS_OPEN_EXPLAIN'		=> 'Dit is een lijst van alle gemelde berichten die nog behandeld moeten worden.',

	'MCP_QUEUE'								=> 'Moderatie wachtrij',
	'MCP_QUEUE_APPROVE_DETAILS'				=> 'Goedkeuringsdetails',
	'MCP_QUEUE_UNAPPROVED_POSTS'			=> 'Berichten wachtend op goedkeuring',
	'MCP_QUEUE_UNAPPROVED_POSTS_EXPLAIN'	=> 'Dit is een lijst van alle berichten die nog goedgekeurd moeten worden voordat ze zichtbaar zijn voor gebruikers.',
	'MCP_QUEUE_UNAPPROVED_TOPICS'			=> 'Onderwerpen wachtend op goedkeuring',
	'MCP_QUEUE_UNAPPROVED_TOPICS_EXPLAIN'	=> 'Dit is een lijst van alle onderwerpen die nog goedgekeurd moeten worden voordat ze zichtbaar zijn voor gebruikers.',
	'MCP_QUEUE_DELETED_POSTS'				=> 'Verwijderde berichten',
	'MCP_QUEUE_DELETED_POSTS_EXPLAIN'		=> 'Dit is een lijst van alle tijdelijk verwijderde berichten. Je kan van uit dit scherm de berichten terugzetten of permanent verwijderen.',
	'MCP_QUEUE_DELETED_TOPICS'				=> 'Verwijderde onderwerpen',
	'MCP_QUEUE_DELETED_TOPICS_EXPLAIN'		=> 'Dit is een lijst van alle tijdelijk verwijderde onderwerpen. Je kan van uit dit scherm de onderwerpen terugzetten of permanent verwijderen.',

	'MCP_VIEW_USER'			=> 'Bekijk waarschuwingen van een specifieke gebruiker',

	'MCP_WARN'				=> 'Waarschuwingen',
	'MCP_WARN_FRONT'		=> 'Beginpagina',
	'MCP_WARN_LIST'			=> 'Lijst waarschuwingen',
	'MCP_WARN_POST'			=> 'Waarschuw vanwege specifiek bericht',
	'MCP_WARN_USER'			=> 'Waarschuw gebruiker',

	'MERGE_POSTS_CONFIRM'	=> 'Weet je zeker dat je de geselecteerde berichten wilt verplaatsen?',
	'MERGE_TOPIC_EXPLAIN'	=> 'Door het formulier hieronder te gebruiken, kan je de geselecteerde berichten verplaatsen naar een ander onderwerp. De berichten zullen gesplitst worden van dit onderwerp en samengevoegd worden met het andere onderwerp. Deze berichten zullen niet opnieuw gesorteerd worden en zullen voorkomen als of de gebruiker ze geplaatst heeft in het nieuwe onderwerp.<br />Vul de doel onderwerp ID in of klik op “Selecteer onderwerp” om naar één te zoeken.',
	'MERGE_TOPIC_ID'		=> 'Doel onderwerp identificatie nummer',
	'MERGE_TOPICS'			=> 'Onderwerpen samenvoegen',
	'MERGE_TOPICS_CONFIRM'	=> 'Weet je zeker dat je de geselecteerde onderwerpen wilt samenvoegen?',
	'MODERATE_FORUM'		=> 'Modereer forum',
	'MODERATE_TOPIC'		=> 'Modereer onderwerp',
	'MODERATE_POST'			=> 'Modereer bericht',
	'MOD_OPTIONS'			=> 'Moderatoropties',
	'MORE_INFO'				=> 'Meer informatie',
	'MOST_WARNINGS'			=> 'Gebruikers met de meeste waarschuwingen',
	'MOVE_TOPIC_CONFIRM'	=> 'Weet je zeker dat je het onderwerp naar een nieuw forum wilt verplaatsen?',
	'MOVE_TOPICS'			=> 'Verplaats geselecteerde onderwerpen',
	'MOVE_TOPICS_CONFIRM'	=> 'Weet je zeker dat je de geselecteerde onderwerpen naar een nieuw forum wilt verplaatsen?',

	'NOTIFY_POSTER_APPROVAL'		=> 'Informeer auteur over goedkeuring?',
	'NOTIFY_POSTER_DISAPPROVAL'		=> 'Informeer auteur over afkeuring?',
	'NOTIFY_USER_WARN'				=> 'Informeer gebruiker over waarschuwing?',
	'NOT_MODERATOR'					=> 'Je bent geen moderator van dit forum.',
	'NO_DESTINATION_FORUM'			=> 'Selecteer een forum voor doel.',
	'NO_DESTINATION_FORUM_FOUND'	=> 'Er is geen doel forum beschikbaar.',
	'NO_ENTRIES'					=> 'Geen logvermeldingen.',
	'NO_FEEDBACK'					=> 'Geen feedback bestaat voor deze gebruiker.',
	'NO_FINAL_TOPIC_SELECTED'		=> 'Je moet een doel onderwerp selecteren voor het samenvoegen van berichten.',
	'NO_MATCHES_FOUND'				=> 'Geen overeenkomsten gevonden.',
	'NO_POST'						=> 'Je moet een bericht selecteren om de gebruiker te kunnen waarschuwen voor een bericht.',
	'NO_POST_REPORT'				=> 'Dit bericht is niet gemeld.',
	'NO_POST_SELECTED'				=> 'Je moet minstens één bericht selecteren om deze actie uit te kunnen voeren.',
	'NO_POSTS_DELETED'				=> 'Er zijn geen verwijderde berichten.',
	'NO_POSTS_QUEUE'				=> 'Er zijn geen berichten die wachten op goedkeuring.',
	'NO_REASON_DISAPPROVAL'			=> 'Geef een passende reden voor afkeur.',
	'NO_REPORT'						=> 'Geen melding gevonden',
	'NO_REPORTS'					=> 'Geen meldingen gevonden',
	'NO_REPORT_SELECTED'			=> 'Je moet minstens één melding selecteren om deze actie uit te kunnen voeren.',
	'NO_TOPIC_ICON'					=> 'Geen',
	'NO_TOPIC_SELECTED'				=> 'Je moet minstens één onderwerp selecteren om deze actie uit te kunnen voeren.',
	'NO_TOPICS_DELETED'				=> 'Er zijn geen verwijderde onderwerpen.',
	'NO_TOPICS_QUEUE'				=> 'Er zijn geen onderwerpen die wachten op goedkeuring.',

	'ONLY_TOPIC'			=> 'Alleen onderwerp “%s”',
	'OTHER_USERS'			=> 'Andere gebruikers die plaatsen van dit IP',

	'QUICKMOD_ACTION_NOT_ALLOWED' => '%s niet toegestaan als quickmod',

	'PM_REPORT_CLOSED_SUCCESS'	=> 'De geselecteerde PB melding is succesvol gesloten.',
	'PM_REPORT_DELETED_SUCCESS'	=> 'De geselecteerde PB melding is succesvol verwijderd.',
	'PM_REPORTED_SUCCESS'		=> 'Dit privébericht is succesvol gemeld.',
	'PM_REPORTS_CLOSED_SUCCESS'	=> 'De geselecteerde PB meldingen zijn succesvol gesloten.',
	'PM_REPORTS_DELETED_SUCCESS'=> 'De geselecteerde PB meldingen zijn succesvol verwijderd.',
	'PM_REPORTS_TOTAL'			=> array(
		0	=> 'Er zijn geen PB meldingen om te bekijken.',
		1	=> 'In totaal is er <strong>1</strong> PB melding om te bekijken.',
		2	=> 'In totaal zijn er <strong>%d</strong> PB meldingen om te bekijken.',
	),
	'PM_REPORT_DETAILS'			=> 'Privébericht meldingsdetails',
	'POSTER'					=> 'Auteur',
	'POSTS_APPROVED_SUCCESS'	=> 'De geselecteerde berichten zijn succesvol goedgekeurd.',
	'POSTS_DELETED_SUCCESS'		=> 'De geselecteerde berichten zijn succesvol verwijderd uit de database.',
	'POSTS_DISAPPROVED_SUCCESS'	=> 'De geselecteerde berichten zijn afgekeurd.',
	'POSTS_LOCKED_SUCCESS'		=> 'De geselecteerde berichten zijn succesvol gesloten.',
	'POSTS_MERGED_SUCCESS'		=> 'De geselecteerde berichten zijn samengevoegd.',
	'POSTS_PER_PAGE'			=> 'Berichten per pagina',
	'POSTS_PER_PAGE_EXPLAIN'	=> '(Stel in op 0 om alle berichten te bekijken.)',
	'POSTS_RESTORED_SUCCESS'	=> 'De geselecteerde berichten zijn succesvol teruggezet.',
	'POSTS_UNLOCKED_SUCCESS'	=> 'De geselecteerde berichten zijn succesvol geopend.',
	'POST_APPROVED_SUCCESS'		=> 'Het geselecteerde bericht is goedgekeurd.',
	'POST_DELETED_SUCCESS'		=> 'Het geselecteerde bericht is succesvol verwijderd uit de database.',
	'POST_DISAPPROVED_SUCCESS'	=> 'Het geselecteerde bericht is afgekeurd.',
	'POST_LOCKED_SUCCESS'		=> 'Bericht succesvol gesloten.',
	'POST_NOT_EXIST'			=> 'Het bericht dat je hebt opgevraagd bestaat niet.',
	'POST_REPORTED_SUCCESS'		=> 'Dit bericht is succesvol gemeld.',
	'POST_RESTORED_SUCCESS'		=> 'Dit bericht is succesvol teruggezet.',
	'POST_UNLOCKED_SUCCESS'		=> 'Bericht succesvol geopend.',

	'READ_USERNOTES'			=> 'Gebruiker notities',
	'READ_WARNINGS'				=> 'Gebruiker waarschuwingen',
	'REPORTER'					=> 'Melder',
	'REPORTED'					=> 'Gemeld',
	'REPORTED_BY'				=> 'Gemeld door',
	'REPORTED_ON_DATE'			=> 'op',
	'REPORTS_CLOSED_SUCCESS'	=> 'De geselecteerde meldingen zijn succesvol gesloten.',
	'REPORTS_DELETED_SUCCESS'	=> 'De geselecteerde meldingen zijn succesvol verwijderd.',
	'REPORTS_TOTAL'				=> array(
		0	=> 'Er zijn geen meldingen om te bekijken.',
		1	=> 'In totaal is er <strong>1</strong> melding om te bekijken.',
		2	=> 'In totaal zijn er <strong>%d</strong> meldingen om te bekijken.',
	),
	'REPORT_CLOSED'				=> 'Deze melding is al gesloten.',
	'REPORT_CLOSED_SUCCESS'		=> 'De geselecteerde melding is succesvol gesloten.',
	'REPORT_DELETED_SUCCESS'	=> 'De geselecteerde melding is succesvol verwijderd.',
	'REPORT_DETAILS'			=> 'Melding details',
	'REPORT_MESSAGE'			=> 'Meld dit bericht',
	'REPORT_MESSAGE_EXPLAIN'	=> 'Gebruik dit formulier om het geselecteerde privé bericht te melden. Het melden moet over het algemeen alleen gebruikt worden als het bericht de forumregels overtreed. <strong>Het melden van een privé bericht zal zijn inhoud leesbaar maken voor alle moderators.</strong>',
	'REPORT_NOTIFY'				=> 'Notificeer mij',
	'REPORT_NOTIFY_EXPLAIN'		=> 'Informeert je wanneer je melding in behandeling is genomen.',
	'REPORT_POST_EXPLAIN'		=> 'Gebruik dit formulier om het geselecteerde bericht te melden aan de forum moderators en beheerders. Het melden moet over het algemeen alleen gebruikt worden als het bericht de forumregels overtreed.',
	'REPORT_REASON'				=> 'Meldingsreden',
	'REPORT_TIME'				=> 'Meldingstijd',
	'RESTORE'					=> 'Terugzetten',
	'RESTORE_POST'				=> 'Terugzetten bericht',
	'RESTORE_POST_CONFIRM'		=> 'Weet je zeker dat je dit bericht wilt terugzetten?',
	'RESTORE_POSTS'				=> 'Terugzetten berichten',
	'RESTORE_POSTS_CONFIRM'		=> 'Weet je zeker dat je de geselecteerde berichten wilt terugzetten?',
	'RESTORE_TOPIC'				=> 'Terugzetten onderwerp',
	'RESTORE_TOPIC_CONFIRM'		=> 'Weet je zeker dat je dit onderwerp wilt terugzetten?',
	'RESTORE_TOPICS'			=> 'Terugzetten onderwerpen',
	'RESTORE_TOPICS_CONFIRM'	=> 'Weet je zeker dat je de geselecteerde onderwerpen wilt terugzetten?',
	'RESYNC'					=> 'Resync',
	'RETURN_MESSAGE'			=> '%sTerug naar het bericht%s',
	'RETURN_NEW_FORUM'			=> '%sGa naar het nieuwe forum%s',
	'RETURN_NEW_TOPIC'			=> '%sGa naar het nieuwe onderwerp%s',
	'RETURN_PM'					=> '%sTerug naar het privébericht%s',
	'RETURN_POST'				=> '%sTerug naar het bericht%s',
	'RETURN_QUEUE'				=> '%sTerug naar de wachtrij%s',
	'RETURN_REPORTS'			=> '%sTerug naar de meldingen%s',
	'RETURN_TOPIC_SIMPLE'		=> '%sTerug naar het onderwerp%s',

	'SEARCH_POSTS_BY_USER'				=> 'Doorzoek berichten van',
	'SELECT_ACTION'						=> 'Selecteer gewenste actie',
	'SELECT_FORUM_GLOBAL_ANNOUNCEMENT'	=> 'Selecteer het forum waarin je deze algemene aankondiging wilt weergeven.',
	'SELECT_FORUM_GLOBAL_ANNOUNCEMENTS'	=> 'Eén of meer van de geselecteerde onderwerpen zijn algemene aankondigingen. Selecteer het forum waarin je deze wilt weergeven.',
	'SELECT_MERGE'						=> 'Selecteer voor samenvoegen',
	'SELECT_TOPICS_FROM'				=> 'Selecteer onderwerpen van',
	'SELECT_TOPIC'						=> 'Selecteer onderwerp',
	'SELECT_USER'						=> 'Selecteer gebruiker',
	'SORT_ACTION'						=> 'Log actie',
	'SORT_DATE'							=> 'Datum',
	'SORT_IP'							=> 'IP-adres',
	'SORT_WARNINGS'						=> 'Waarschuwingen',
	'SPLIT_AFTER'						=> 'Splits onderwerp vanaf geselecteerde bericht en verder',
	'SPLIT_FORUM'						=> 'Forum voor nieuw onderwerp',
	'SPLIT_POSTS'						=> 'Splits geselecteerde berichten',
	'SPLIT_SUBJECT'						=> 'Nieuw onderwerptitel',
	'SPLIT_TOPIC_ALL'					=> 'Splits onderwerp vanaf geselecteerde berichten',
	'SPLIT_TOPIC_ALL_CONFIRM'			=> 'Weet je zeker dat je dit onderwerp wilt splitsen?',
	'SPLIT_TOPIC_BEYOND'				=> 'Splits onderwerp vanaf geselecteerde bericht',
	'SPLIT_TOPIC_BEYOND_CONFIRM'		=> 'Weet je zeker dat je dit onderwerp wilt splitsen vanaf het geselecteerde bericht?',
	'SPLIT_TOPIC_EXPLAIN'				=> 'Door het gebruik van het formulier hieronder kan je een onderwerp splitsen in tweeën, door de berichten individueel te selecteren of door te splitsen vanaf een geselecteerd bericht.',

	'THIS_PM_IP'				=> 'IP voor dit privébericht',
	'THIS_POST_IP'				=> 'IP voor dit bericht',
	'TOPICS_APPROVED_SUCCESS'	=> 'De geselecteerde onderwerpen zijn goedgekeurd.',
	'TOPICS_DELETED_SUCCESS'	=> 'De geselecteerde onderwerpen zijn succesvol verwijderd van de database.',
	'TOPICS_DISAPPROVED_SUCCESS'=> 'De geselecteerde onderwerpen zijn afgekeurd.',
	'TOPICS_FORKED_SUCCESS'		=> 'De geselecteerde onderwerpen zijn succesvol gekopieerd.',
	'TOPICS_LOCKED_SUCCESS'		=> 'De geselecteerde onderwerpen zijn gesloten.',
	'TOPICS_MOVED_SUCCESS'		=> 'De geselecteerde onderwerpen zijn succesvol verplaatst.',
	'TOPICS_RESTORED_SUCCESS'	=> 'De geselecteerde onderwerpen zijn succesvol teruggezet.',
	'TOPICS_RESYNC_SUCCESS'		=> 'De geselecteerde onderwerpen zijn gesynchroniseerd.',
	'TOPICS_TYPE_CHANGED'		=> 'Onderwerptypes zijn succesvol veranderd.',
	'TOPICS_UNLOCKED_SUCCESS'	=> 'De geselecteerde onderwerpen zijn geopend.',
	'TOPIC_APPROVED_SUCCESS'	=> 'Het geselecteerde onderwerp is goedgekeurd.',
	'TOPIC_DELETED_SUCCESS'		=> 'Het geselecteerde onderwerp is succesvol verwijderd van de database.',
	'TOPIC_DISAPPROVED_SUCCESS'	=> 'Het geselecteerde onderwerp is afgekeurd.',
	'TOPIC_FORKED_SUCCESS'		=> 'Het geselecteerde onderwerp is succesvol gekopieerd.',
	'TOPIC_LOCKED_SUCCESS'		=> 'Het geselecteerde onderwerp is gesloten.',
	'TOPIC_MOVED_SUCCESS'		=> 'Het geselecteerde onderwerp is succesvol verplaatst.',
	'TOPIC_NOT_EXIST'			=> 'Het onderwerp dat je hebt geselecteerd bestaat niet.',
	'TOPIC_RESTORED_SUCCESS'	=> 'Het geselecteerde onderwerp is succesvol teruggezet.',
	'TOPIC_RESYNC_SUCCESS'		=> 'Het geselecteerde onderwerp is gesynchroniseerd.',
	'TOPIC_SPLIT_SUCCESS'		=> 'Het geselecteerde onderwerp is succesvol gesplitst.',
	'TOPIC_TIME'				=> 'Onderwerp tijd',
	'TOPIC_TYPE_CHANGED'		=> 'Onderwerptype succesvol veranderd.',
	'TOPIC_UNLOCKED_SUCCESS'	=> 'Het geselecteerde onderwerp is geopend.',
	'TOTAL_WARNINGS'			=> 'Totaal Waarschuwingen',

	'UNAPPROVED_POSTS_TOTAL'		=> array(
		0	=> 'Er zijn geen berichten die wachten op goedkeuring.',
		1	=> 'In totaal is er <strong>1</strong> bericht dat wacht op goedkeuring.',
		2	=> 'In totaal zijn er <strong>%d</strong> berichten die wachten op goedkeuring.',
	),
	'UNLOCK'						=> 'Open',
	'UNLOCK_POST'					=> 'Open bericht',
	'UNLOCK_POST_EXPLAIN'			=> 'Wijzigingen toestaan',
	'UNLOCK_POST_POST'				=> 'Bericht openen',
	'UNLOCK_POST_POST_CONFIRM'		=> 'Weet je zeker dat je het wijzigen van dit bericht wilt toestaan?',
	'UNLOCK_POST_POSTS'				=> 'Geselecteerde berichten openen',
	'UNLOCK_POST_POSTS_CONFIRM'		=> 'Weet je zeker dat je het wijzigen van de geselecteerde berichten wilt toestaan?',
	'UNLOCK_TOPIC'					=> 'Onderwerp openen',
	'UNLOCK_TOPIC_CONFIRM'			=> 'Weet je zeker dat je dit onderwerp wilt openen?',
	'UNLOCK_TOPICS'					=> 'Geselecteerde onderwerpen openen',
	'UNLOCK_TOPICS_CONFIRM'			=> 'Weet je zeker dat je alle geselecteerde onderwerpen wilt openen?',
	'USER_CANNOT_POST'				=> 'Je kan geen berichten plaatsen in dit forum.',
	'USER_CANNOT_REPORT'			=> 'Je kan geen berichten melden in dit forum.',
	'USER_FEEDBACK_ADDED'			=> 'Gebruiker feedback succesvol toegevoegd.',
	'USER_WARNING_ADDED'			=> 'Gebruiker succesvol gewaarschuwd.',

	'VIEW_DETAILS'			=> 'Bekijk details',
	'VIEW_PM'				=> 'Bekijk privébericht',
	'VIEW_POST'				=> 'Bekijk bericht',

	'WARNED_USERS'			=> 'Gewaarschuwde gebruikers',
	'WARNED_USERS_EXPLAIN'	=> 'Dit is een lijst van alle gebruikers met een nog niet verlopen waarschuwing.',
	'WARNING_PM_BODY'		=> 'Het volgende is een waarschuwing welke is gegeven naar je door een beheerder of moderator van deze site.[quote]%s[/quote]',
	'WARNING_PM_SUBJECT'	=> 'Forum waarschuwing uitgevaardigd',
	'WARNING_POST_DEFAULT'	=> 'Dit is een waarschuwing vanwege het volgende bericht dat is geplaatst door je: %s .',
	'NO_WARNINGS'	=> 'Er zijn geen waarschuwingen.',

	'YOU_SELECTED_TOPIC'	=> 'Je hebt onderwerpnummer %d: %s geselecteerd.',

	'report_reasons'		=> array(
		'TITLE'	=> array(
			'WAREZ'		=> 'Warez',
			'SPAM'		=> 'Spam',
			'OFF_TOPIC'	=> 'Off-topic',
			'OTHER'		=> 'Anders',
		),
		'DESCRIPTION' => array(
			'WAREZ'		=> 'Het bericht bevat koppelingen naar illegale software.',
			'SPAM'		=> 'Het gemelde bericht heeft als enige doel om te adverteren voor een website of een ander product.',
			'OFF_TOPIC'	=> 'Het gemelde bericht valt buiten het onderwerp.',
			'OTHER'		=> 'Het gemelde bericht val niet onder een categorie, vul het volgende informatieveld in.',
		),
	),
));
