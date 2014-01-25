<?php
/**
*
* mcp [Dutch]
*
* @package language
* @copyright (c) 2005 phpBB Group
* @copyright (c) 2007 phpBB.nl
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
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
	'ACTION_NOTE'			=> 'Actie/Opmerking',
	'ADD_FEEDBACK'			=> 'Feedback toevoegen',
	'ADD_FEEDBACK_EXPLAIN'	=> 'Vul het volgende formulier in als je een melding wilt toevoegen. Gebruik alleen tekst zonder opmaak; HTML, BBCode, enz. zijn niet toegestaan.',
	'ADD_WARNING'			=> 'Voeg waarschuwing toe',
	'ADD_WARNING_EXPLAIN'	=> 'Vul het volgende formulier in om een waarschuwing naar deze gebruiker te sturen. Gebruik alleen tekst zonder opmaak; HTML, BBCode, enz. zijn niet toegestaan.',
	'ALL_ENTRIES'			=> 'Alle toevoegingen',
	'ALL_NOTES_DELETED'		=> 'Alle opmerkingen van gebruikers zijn verwijderd.',
	'ALL_REPORTS'			=> 'Alle meldingen',
	'ALREADY_REPORTED'		=> 'Dit bericht is reeds gemeld.',
	'ALREADY_REPORTED_PM'	=> 'Dit privébericht is reeds gemeld.',
	'ALREADY_WARNED'		=> 'Er is reeds een waarschuwing voor dit bericht verstuurd.',
	'APPROVE'				=> 'Goedkeuren',
	'APPROVE_POST'			=> 'Bericht goedkeuren',
	'APPROVE_POST_CONFIRM'	=> 'Weet je zeker dat je dit bericht wilt goedkeuren?',
	'APPROVE_POSTS'			=> 'Berichten goedkeuren',
	'APPROVE_POSTS_CONFIRM'	=> 'Weet je zeker dat je de geselecteerde berichten wilt goedkeuren?',

	'CANNOT_MOVE_SAME_FORUM'=> 'Het onderwerp staat al in dit forum. Selecteer een ander forum om naar te verplaatsen.',
	'CANNOT_WARN_ANONYMOUS'	=> 'Je kunt een gast niet waarschuwen.',
	'CANNOT_WARN_SELF'		=> 'Je kunt jezelf niet waarschuwen.',
	'CAN_LEAVE_BLANK'		=> 'Je mag dit leeg laten.',
	'CHANGE_POSTER'			=> 'Wijzig auteur',
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
	'DELETE_POSTS'				=> 'Berichten verwijderen',
	'DELETE_POSTS_CONFIRM'		=> 'Weet je zeker dat je deze berichten wilt verwijderen?',
	'DELETE_POST_CONFIRM'		=> 'Weet je zeker dat je dit bericht wilt verwijderen?',
	'DELETE_REPORT'				=> 'Verwijder melding',
	'DELETE_REPORT_CONFIRM'		=> 'Weet je zeker dat je de geselecteerde melding wilt verwijderen?',
	'DELETE_REPORTS'			=> 'Verwijder meldingen',
	'DELETE_REPORTS_CONFIRM'	=> 'Weet je zeker dat je de geselecteerde meldingen wilt verwijderen?',
	'DELETE_SHADOW_TOPIC'		=> 'Verwijder schaduwonderwerp',
	'DELETE_TOPICS'				=> 'Geselecteerde onderwerpen verwijderen',
	'DELETE_TOPICS_CONFIRM'		=> 'Weet je zeker dat je deze onderwerpen wilt verwijderen?',
	'DELETE_TOPIC_CONFIRM'		=> 'Weet je zeker dat je dit onderwerp wilt verwijderen?',
	'DISAPPROVE'				=> 'Afkeuren',
	'DISAPPROVE_REASON'			=> 'Reden van afkeuring',
	'DISAPPROVE_POST'			=> 'Afgekeurd bericht',
	'DISAPPROVE_POST_CONFIRM'	=> 'Weet je zeker dat je dit bericht wilt afkeuren?',
	'DISAPPROVE_POSTS'			=> 'Afgekeurde berichten',
	'DISAPPROVE_POSTS_CONFIRM'	=> 'Weet je zeker dat je deze berichten wilt afkeuren?',
	'DISPLAY_LOG'				=> 'Toon vorige toevoegingen',
	'DISPLAY_OPTIONS'			=> 'Toon opties',

	'EMPTY_REPORT'					=> 'Je dient bij deze reden een omschrijving op te geven.',
	'EMPTY_TOPICS_REMOVED_WARNING'	=> 'Waarschuwing: Eén van de onderwerpen is verwijderd uit de database omdat het leeg is.',

	'FEEDBACK'				=> 'Feedback',
	'FORK'					=> 'Kopiëren',
	'FORK_TOPIC'			=> 'Onderwerp kopiëren',
	'FORK_TOPIC_CONFIRM'	=> 'Weet je zeker dat je dit onderwerp wilt kopiëren?',
	'FORK_TOPICS'			=> 'Geselecteerde onderwerpen kopiëren',
	'FORK_TOPICS_CONFIRM'	=> 'Weet je zeker dat je de geselecteerde onderwerpen wilt kopiëren?',
	'FORUM_DESC'			=> 'Omschrijving',
	'FORUM_NAME'			=> 'Forumnaam',
	'FORUM_NOT_EXIST'		=> 'Het geselecteerde forum bestaat niet (meer).',
	'FORUM_NOT_POSTABLE'	=> 'In het geselecteerde forum kun je niet posten.',
	'FORUM_STATUS'			=> 'Forumstatus',
	'FORUM_STYLE'			=> 'Forumstijl',

	'GLOBAL_ANNOUNCEMENT'	=> 'Globale mededeling',

	'IP_INFO'				=> 'IP-informatie',
	'IPS_POSTED_FROM'		=> 'IP-adressen waar vanaf de gebruiker berichten heeft geplaatst',

	'LATEST_LOGS'				=> '5 laatst gelogde acties',
	'LATEST_REPORTED'			=> '5 laatste meldingen',
	'LATEST_REPORTED_PMS'		=> '5 laatste PB meldingen',
	'LATEST_UNAPPROVED'			=> '5 laatste berichten die wachten op hun goedkeuring',
	'LATEST_WARNING_TIME'		=> 'Laatst gestuurde waarschuwing',
	'LATEST_WARNINGS'			=> '5 laatste waarschuwingen',
	'LEAVE_SHADOW'				=> 'Plaats een link naar dit onderwerp in het oude forum',
	'LIST_REPORT'				=> '1 melding',
	'LIST_REPORTS'				=> '%d meldingen',
	'LOCK'						=> 'Sluit',
	'LOCK_POST_POST'			=> 'Bericht sluiten',
	'LOCK_POST_POST_CONFIRM'	=> 'Weet je zeker dat je wilt voorkomen dat dit bericht wordt bewerkt?',
	'LOCK_POST_POSTS'			=> 'Geselecteerde berichten sluiten',
	'LOCK_POST_POSTS_CONFIRM'	=> 'Weet je zeker dat je wilt voorkomen dat de geselecteerde berichten worden bewerkt?',
	'LOCK_TOPIC_CONFIRM'		=> 'Weet je zeker dat je dit onderwerp wilt sluiten?',
	'LOCK_TOPICS'				=> 'Geselecteerde onderwerpen sluiten',
	'LOCK_TOPICS_CONFIRM'		=> 'Weet je zeker dat je de geselecteerde onderwerpen wilt sluiten?',
	'LOGS_CURRENT_TOPIC'		=> 'Huidige log van:',
	'LOGIN_EXPLAIN_MCP'			=> 'Om dit forum te modereren moet je ingelogd zijn.',
	'LOGVIEW_VIEWTOPIC'			=> 'Toon onderwerp',
	'LOGVIEW_VIEWLOGS'			=> 'Toon onderwerplogs',
	'LOGVIEW_VIEWFORUM'			=> 'Toon forum',
	'LOOKUP_ALL'				=> 'Zoek op alle IP’s',
	'LOOKUP_IP'					=> 'Zoek op IP',

	'MARKED_NOTES_DELETED'		=> 'Alle gemarkeerde opmerkingen van gebruikers zijn verwijderd.',

	'MCP_ADD'						=> 'Voeg een waarschuwing toe',

	'MCP_BAN'					=> 'Bannen',
	'MCP_BAN_EMAILS'			=> 'Ban e-mails',
	'MCP_BAN_IPS'				=> 'Ban IP’s',
	'MCP_BAN_USERNAMES'			=> 'Ban gebruikersnamen',

	'MCP_LOGS'						=> 'Moderatorslog',
	'MCP_LOGS_FRONT'				=> 'Hoofdpagina',
	'MCP_LOGS_FORUM_VIEW'			=> 'Forumlogs',
	'MCP_LOGS_TOPIC_VIEW'			=> 'Onderwerplogs',

	'MCP_MAIN'						=> 'Algemeen',
	'MCP_MAIN_FORUM_VIEW'			=> 'Toon forum',
	'MCP_MAIN_FRONT'				=> 'Hoofdpagina',
	'MCP_MAIN_POST_DETAILS'			=> 'Details bericht',
	'MCP_MAIN_TOPIC_VIEW'			=> 'Toon onderwerp',
	'MCP_MAKE_ANNOUNCEMENT'			=> 'Wijzig in mededeling',
	'MCP_MAKE_ANNOUNCEMENT_CONFIRM'	=> 'Weet je zeker dat je dit onderwerp wilt wijzigen in een mededeling?',
	'MCP_MAKE_ANNOUNCEMENTS'		=> 'Wijzig in mededelingen',
	'MCP_MAKE_ANNOUNCEMENTS_CONFIRM'=> 'Weet je zeker dat je de geselecteerde onderwerpen wilt wijzigen in mededelingen?',
	'MCP_MAKE_GLOBAL'				=> 'Wijzig in globale mededeling',
	'MCP_MAKE_GLOBAL_CONFIRM'		=> 'Weet je zeker dat je dit onderwerp wilt wijzigen in een globale mededeling?',
	'MCP_MAKE_GLOBALS'				=> 'Wijzig in globale mededelingen',
	'MCP_MAKE_GLOBALS_CONFIRM'		=> 'Weet je zeker dat je de geselecteerde onderwerpen wilt wijzigen in globale mededelingen?',
	'MCP_MAKE_STICKY'				=> 'Wijzig in sticky',
	'MCP_MAKE_STICKY_CONFIRM'		=> 'Weet je zeker dat je dit onderwerp wilt wijzigen in een sticky onderwerp?',
	'MCP_MAKE_STICKIES'				=> 'Wijzig in stickies',
	'MCP_MAKE_STICKIES_CONFIRM'		=> 'Weet je zeker dat je de geselecteerde onderwerpen wilt wijzigen in sticky onderwerpen?',
	'MCP_MAKE_NORMAL'				=> 'Wijzig in normaal onderwerp',
	'MCP_MAKE_NORMAL_CONFIRM'		=> 'Weet je zeker dat je dit onderwerp wilt wijzigen in een normaal onderwerp?',
	'MCP_MAKE_NORMALS'				=> 'Wijzig in normale onderwerpen',
	'MCP_MAKE_NORMALS_CONFIRM'		=> 'Weet je zeker dat je de geselecteerde onderwerpen wilt wijzigen in normale onderwerpen?',

	'MCP_NOTES'						=> 'Gebruikersopmerkingen',
	'MCP_NOTES_FRONT'				=> 'Hoofdpagina',
	'MCP_NOTES_USER'				=> 'Details gebruiker',

	'MCP_POST_REPORTS'				=> 'Meldingen met betrekking tot dit bericht',

	'MCP_PM_REPORTS'				=> 'Gemelde privéberichten',
	'MCP_PM_REPORT_DETAILS'			=> 'PB melding details',
	'MCP_PM_REPORTS_CLOSED'			=> 'Gesloten PB meldingen',
	'MCP_PM_REPORTS_CLOSED_EXPLAIN'	=> 'Dit is een lijst van alle gemelde privéberichten waar reeds een beslissing over is genomen.',
	'MCP_PM_REPORTS_OPEN'			=> 'Open PB meldingen',
	'MCP_PM_REPORTS_OPEN_EXPLAIN'	=> 'Dit is een lijst van alle gemelde privéberichten waar nog geen beslissing over is genomen.',

	'MCP_REPORTS'					=> 'Gemelde berichten',
	'MCP_REPORT_DETAILS'			=> 'Details melding',
	'MCP_REPORTS_CLOSED'			=> 'Gesloten meldingen',
	'MCP_REPORTS_CLOSED_EXPLAIN'	=> 'Dit is een lijst van alle gemelde berichten waar reeds een beslissing over is genomen.',
	'MCP_REPORTS_OPEN'				=> 'Open meldingen',
	'MCP_REPORTS_OPEN_EXPLAIN'		=> 'Dit is een lijst van alle gemelde berichten waar nog geen beslissing over is genomen.',

	'MCP_QUEUE'								=> 'Moderatie wachtrij',
	'MCP_QUEUE_APPROVE_DETAILS'				=> 'Goedkeuring details',
	'MCP_QUEUE_UNAPPROVED_POSTS'			=> 'Berichten wachtend op goedkeuring',
	'MCP_QUEUE_UNAPPROVED_POSTS_EXPLAIN'	=> 'Dit is een lijst van alle berichten die nog moeten worden goedgekeurd, voordat ze voor alle gebruikers zichtbaar zijn.',
	'MCP_QUEUE_UNAPPROVED_TOPICS'			=> 'Onderwerpen wachtend op goedkeuring',
	'MCP_QUEUE_UNAPPROVED_TOPICS_EXPLAIN'	=> 'Dit is een lijst van alle onderwerpen die nog moeten worden goedgekeurd, voordat ze voor alle gebruikers zichtbaar zijn.',

	'MCP_VIEW_USER'			=> 'Toon waarschuwingen van een specifieke gebruiker',

	'MCP_WARN'				=> 'Waarschuwingen',
	'MCP_WARN_FRONT'		=> 'Hoofdpagina',
	'MCP_WARN_LIST'			=> 'Lijst waarschuwingen',
	'MCP_WARN_POST'			=> 'Waarschuw voor specifiek bericht',
	'MCP_WARN_USER'			=> 'Waarschuw gebruiker',

	'MERGE_POSTS_CONFIRM'	=> 'Weet je zeker dat je de geselecteerde berichten wilt verplaatsen?',
	'MERGE_TOPIC_EXPLAIN'	=> 'Met het formulier hieronder kun je de geselecteerde berichten verplaatsen naar een ander onderwerp. De berichten uit dit onderwerp worden gesplitst en vervolgens samengevoegd met het andere onderwerp. De berichten worden niet opnieuw gesorteerd, het zal lijken alsof je nieuwe berichten plaatst in een onderwerp.<br />Geef het ID van het onderwerp op waarnaar je de berichten wilt verplaatsen, of klik op "Onderwerp selecteren" om er een te zoeken.',
	'MERGE_TOPIC_ID'		=> 'Doelonderwerp ID',
	'MERGE_TOPICS'			=> 'Onderwerpen samenvoegen',
	'MERGE_TOPICS_CONFIRM'	=> 'Weet je zeker dat je de geselecteerde onderwerpen wilt samenvoegen?',
	'MODERATE_FORUM'		=> 'Modereer forum',
	'MODERATE_TOPIC'		=> 'Modereer onderwerp',
	'MODERATE_POST'			=> 'Modereer bericht',
	'MOD_OPTIONS'			=> 'Moderator opties',
	'MORE_INFO'				=> 'Verdere informatie',
	'MOST_WARNINGS'			=> 'Gebruikers met de meeste waarschuwingen',
	'MOVE_TOPIC_CONFIRM'	=> 'Weet je zeker dat je het onderwerp naar een ander forum wilt verplaatsen?',
	'MOVE_TOPICS'			=> 'Verplaats selecteerde onderwerpen',
	'MOVE_TOPICS_CONFIRM'	=> 'Weet je zeker dat je de geselecteerde onderwerpen naar een ander forum wilt verplaatsen?',

	'NOTIFY_POSTER_APPROVAL'		=> 'Auteur informeren over goedkeuring?',
	'NOTIFY_POSTER_DISAPPROVAL'		=> 'Auteur informeren over afkeuring?',
	'NOTIFY_USER_WARN'				=> 'Auteur informeren over waarschuwing?',
	'NOT_MODERATOR'					=> 'Je bent geen moderator van dit forum.',
	'NO_DESTINATION_FORUM'			=> 'Selecteer een doelforum.',
	'NO_DESTINATION_FORUM_FOUND'	=> 'Er is geen doelforum beschikbaar.',
	'NO_ENTRIES'					=> 'Geen logs voor deze periode.',
	'NO_FEEDBACK'					=> 'Er is geen feedback van deze gebruiker.',
	'NO_FINAL_TOPIC_SELECTED'		=> 'Je hebt geen doelonderwerp geselecteerd voor het samenvoegen van de onderwerpen.',
	'NO_MATCHES_FOUND'				=> 'Geen resultaten gevonden.',
	'NO_POST'						=> 'Je moet een bericht selecteren als je een gebruiker wilt waarschuwen over het bericht.',
	'NO_POST_REPORT'				=> 'Dit bericht is niet gemeld.',
	'NO_POST_SELECTED'				=> 'Je moet minimaal één bericht selecteren om deze actie uit te voeren.',
	'NO_REASON_DISAPPROVAL'			=> 'Geef een duidelijke reden voor het afkeuren.',
	'NO_REPORT'						=> 'Geen melding gevonden',
	'NO_REPORTS'					=> 'Geen meldingen gevonden',
	'NO_REPORT_SELECTED'			=> 'Je moet minimaal één melding selecteren om deze actie te kunnen uitvoeren.',
	'NO_TOPIC_ICON'					=> 'Geen',
	'NO_TOPIC_SELECTED'				=> 'Je moet minimaal één onderwerp selecteren om deze actie uit te voeren.',
	'NO_TOPICS_QUEUE'				=> 'Er zijn geen onderwerpen die op goedkeuring wachten.',

	'ONLY_TOPIC'			=> 'Alleen onderwerp "%s"',
	'OTHER_USERS'			=> 'Andere gebruikers (die berichten plaatsen) met dit IP',

	'PM_REPORT_CLOSED_SUCCESS'	=> 'De geselecteerde privébericht-melding is succesvol gesloten.',
	'PM_REPORT_DELETED_SUCCESS'	=> 'De geselecteerde privébericht-melding is succesvol verwijderd.',
	'PM_REPORTED_SUCCESS'		=> 'Het privébericht is gemeld.',
	'PM_REPORT_TOTAL'			=> 'Er is <strong>1</strong> openstaande PB melding.',
	'PM_REPORTS_CLOSED_SUCCESS'	=> 'De geselecteerde PB meldingen zijn gesloten.',
	'PM_REPORTS_DELETED_SUCCESS'=> 'De geselecteerde PB melding is verwijderd.',
	'PM_REPORTS_TOTAL'			=> 'Er zijn <strong>%d</strong> openstaande PB meldingen.',
	'PM_REPORTS_ZERO_TOTAL'		=> 'Er zijn geen openstaande PB meldingen.',
	'PM_REPORT_DETAILS'			=> 'Privébericht-melding details',
	'POSTER'					=> 'Auteur',
	'POSTS_APPROVED_SUCCESS'	=> 'De geselecteerde berichten zijn goedgekeurd.',
	'POSTS_DELETED_SUCCESS'		=> 'De geselecteerde berichten zijn verwijderd.',
	'POSTS_DISAPPROVED_SUCCESS'	=> 'De geselecteerde berichten zijn afgekeurd.',
	'POSTS_LOCKED_SUCCESS'		=> 'De geselecteerde berichten zijn gesloten.',
	'POSTS_MERGED_SUCCESS'		=> 'De geselecteerde berichten zijn samengevoegd.',
	'POSTS_UNLOCKED_SUCCESS'	=> 'De geselecteerde berichten zijn heropend.',
	'POSTS_PER_PAGE'			=> 'Berichten per pagina',
	'POSTS_PER_PAGE_EXPLAIN'	=> '(Stel in op 0, om alle berichten te tonen.)',
	'POST_APPROVED_SUCCESS'		=> 'Het geselecteerde bericht is goedgekeurd.',
	'POST_DELETED_SUCCESS'		=> 'Het geselecteerde bericht is verwijderd.',
	'POST_DISAPPROVED_SUCCESS'	=> 'Het geselecteerde bericht is afgekeurd.',
	'POST_LOCKED_SUCCESS'		=> 'Het bericht is gesloten.',
	'POST_NOT_EXIST'			=> 'Het opgevraagde bericht bestaat niet.',
	'POST_REPORTED_SUCCESS'		=> 'Het bericht is gemeld.',
	'POST_UNLOCKED_SUCCESS'		=> 'Het bericht is heropend.',

	'READ_USERNOTES'			=> 'Opmerkingen over gebruiker',
	'READ_WARNINGS'				=> 'Waarschuwingen over gebruiker',
	'REPORTER'					=> 'Melder',
	'REPORTED'					=> 'Gemeld',
	'REPORTED_BY'				=> 'Gemeld door',
	'REPORTED_ON_DATE'			=> 'op',
	'REPORTS_CLOSED_SUCCESS'	=> 'De geselecteerde meldingen zijn gesloten.',
	'REPORTS_DELETED_SUCCESS'	=> 'De geselecteerde meldingen zijn verwijderd.',
	'REPORTS_TOTAL'				=> 'Er zijn <strong>%d</strong> openstaande meldingen.',
	'REPORTS_ZERO_TOTAL'		=> 'Er zijn geen openstaande meldingen.',
	'REPORT_CLOSED'				=> 'Deze melding is reeds gesloten.',
	'REPORT_CLOSED_SUCCESS'		=> 'De geselecteerde melding is gesloten.',
	'REPORT_DELETED_SUCCESS'	=> 'De geselecteerde melding is verwijderd.',
	'REPORT_DETAILS'			=> 'Details van de melding',
	'REPORT_MESSAGE'			=> 'Meld dit bericht',
	'REPORT_MESSAGE_EXPLAIN'	=> 'Gebruik dit formulier om de geselecteerde privéberichten te melden. Het bericht hoef je alleen te melden als het in strijd is met de forumregels. <strong>Het melden van een privébericht maakt de inhoud zichtbaar voor alle moderators.</strong>',
	'REPORT_NOTIFY'				=> 'Informeer me',
	'REPORT_NOTIFY_EXPLAIN'		=> 'Informeer me als de melding wordt behandeld.',
	'REPORT_POST_EXPLAIN'		=> 'Gebruik dit formulier om de geselecteerde berichten te melden bij de beheerders. Het bericht hoef je alleen te melden als het in strijd is met de forumregels.',
	'REPORT_REASON'				=> 'Reden van melding',
	'REPORT_TIME'				=> 'Tijdstip van melding',
	'REPORT_TOTAL'				=> 'Er is <strong>1</strong> openstaande melding.',
	'RESYNC'					=> 'Synchroniseer',
	'RETURN_MESSAGE'			=> '%sGa terug naar het bericht%s',
	'RETURN_NEW_FORUM'			=> '%sGa naar het nieuwe forum%s',
	'RETURN_NEW_TOPIC'			=> '%sGa naar het nieuwe onderwerp%s',
	'RETURN_PM'					=> '%sGa terug naar het privébericht%s',
	'RETURN_POST'				=> '%sGa terug naar het bericht%s',
	'RETURN_QUEUE'				=> '%sGa terug naar de wachtrij%s',
	'RETURN_REPORTS'			=> '%sGa terug naar de meldingen%s',
	'RETURN_TOPIC_SIMPLE'		=> '%sGa terug naar het onderwerp%s',

	'SEARCH_POSTS_BY_USER'				=> 'Zoek berichten van',
	'SELECT_ACTION'						=> 'Actie selecteren',
	'SELECT_FORUM_GLOBAL_ANNOUNCEMENT'	=> 'Selecteer het forum waarin deze globale mededeling moet worden weergegeven.',
	'SELECT_FORUM_GLOBAL_ANNOUNCEMENTS'	=> 'Een of meer van de geselecteerde onderwerpen zijn globale mededelingen. Selecteer het forum waarin deze globale mededeling(en) moet(en) worden weergegeven.',
	'SELECT_MERGE'						=> 'Selecteren voor samenvoeging',
	'SELECT_TOPICS_FROM'				=> 'Selecteer onderwerpen van',
	'SELECT_TOPIC'						=> 'Onderwerp selecteren',
	'SELECT_USER'						=> 'Gebruiker selecteren',
	'SORT_ACTION'						=> 'Log actie',
	'SORT_DATE'							=> 'Datum',
	'SORT_IP'							=> 'IP-adres',
	'SORT_WARNINGS'						=> 'Waarschuwingen',
	'SPLIT_AFTER'						=> 'Splits onderwerp vanaf geselecteerde bericht',
	'SPLIT_FORUM'						=> 'Forum voor het nieuwe onderwerp',
	'SPLIT_POSTS'						=> 'Splits de geselecteerde berichten',
	'SPLIT_SUBJECT'						=> 'Nieuwe titel',
	'SPLIT_TOPIC_ALL'					=> 'Splits het onderwerp van de geselecteerde berichten',
	'SPLIT_TOPIC_ALL_CONFIRM'			=> 'Weet je zeker dat je dit onderwerp wilt splitsen?',
	'SPLIT_TOPIC_BEYOND'				=> 'Splits het onderwerp vanaf dit bericht',
	'SPLIT_TOPIC_BEYOND_CONFIRM'		=> 'Weet je zeker dat je het onderwerp vanaf dit bericht wilt splitsen?',
	'SPLIT_TOPIC_EXPLAIN'				=> 'Met onderstaand formulier kun je een onderwerp naar twee onderwerpen splitsen door berichten te selecteren, of vanaf een geselecteerd bericht.',

	'THIS_PM_IP'				=> 'IP van dit privé bericht',
	'THIS_POST_IP'				=> 'IP van dit bericht',
	'TOPICS_APPROVED_SUCCESS'	=> 'De geselecteerde onderwerpen zijn goedgekeurd.',
	'TOPICS_DELETED_SUCCESS'	=> 'De geselecteerde onderwerpen zijn verwijderd.',
	'TOPICS_DISAPPROVED_SUCCESS'=> 'De geselecteerde onderwerpen zijn afgekeurd.',
	'TOPICS_FORKED_SUCCESS'		=> 'De geselecteerde onderwerpen zijn gekopieerd.',
	'TOPICS_LOCKED_SUCCESS'		=> 'De geselecteerde onderwerpen zijn gesloten.',
	'TOPICS_MOVED_SUCCESS'		=> 'De geselecteerde onderwerpen zijn verplaatst.',
	'TOPICS_RESYNC_SUCCESS'		=> 'De geselecteerde onderwerpen zijn gesynchroniseerd.',
	'TOPICS_TYPE_CHANGED'		=> 'Het onderwerptype is gewijzigd.',
	'TOPICS_UNLOCKED_SUCCESS'	=> 'De geselecteerde onderwerpen zijn heropend.',
	'TOPIC_APPROVED_SUCCESS'	=> 'Het geselecteerde onderwerp is goedgekeurd.',
	'TOPIC_DELETED_SUCCESS'		=> 'Het geselecteerde onderwerp is verwijderd.',
	'TOPIC_DISAPPROVED_SUCCESS'	=> 'De geselecteerde onderwerp is afgekeurd.',
	'TOPIC_FORKED_SUCCESS'		=> 'Het geselecteerde onderwerp is gekopieerd.',
	'TOPIC_LOCKED_SUCCESS'		=> 'Het geselecteerde onderwerp is gesloten.',
	'TOPIC_MOVED_SUCCESS'		=> 'Het geselecteerde onderwerp is verplaatst.',
	'TOPIC_NOT_EXIST'			=> 'Het geselecteerde onderwerp bestaat niet (meer).',
	'TOPIC_RESYNC_SUCCESS'		=> 'Het geselecteerde onderwerp is gesynchroniseerd.',
	'TOPIC_SPLIT_SUCCESS'		=> 'Het geselecteerde onderwerp is gesplitst.',
	'TOPIC_TIME'				=> 'Tijdstip onderwerp',
	'TOPIC_TYPE_CHANGED'		=> 'Het onderwerp is gewijzigd.',
	'TOPIC_UNLOCKED_SUCCESS'	=> 'Het geselecteerde onderwerp is heropend.',
	'TOTAL_WARNINGS'			=> 'Totaal aantal waarschuwingen',

	'UNAPPROVED_POSTS_TOTAL'		=> 'Er staan in totaal <strong>%d</strong> berichten voor goedkeuring in de wachtrij.',
	'UNAPPROVED_POSTS_ZERO_TOTAL'	=> 'Er staan geen berichten voor goedkeuring in de wachtrij.',
	'UNAPPROVED_POST_TOTAL'			=> 'Er staat <strong>1</strong> bericht voor goedkeuring in de wachtrij.',
	'UNLOCK'						=> 'Heropen',
	'UNLOCK_POST'					=> 'Heropen bericht',
	'UNLOCK_POST_EXPLAIN'			=> 'Sta wijzigingen toe',
	'UNLOCK_POST_POST'				=> 'Heropen bericht',
	'UNLOCK_POST_POST_CONFIRM'		=> 'Weet je zeker dat je wilt toestaan om het geselecteerde bericht te wijzigen?',
	'UNLOCK_POST_POSTS'				=> 'Heropen de geselecteerde berichten',
	'UNLOCK_POST_POSTS_CONFIRM'		=> 'Weet je zeker dat je wilt toestaan om de geselecteerde berichten te wijzigen?',
	'UNLOCK_TOPIC'					=> 'Heropen onderwerp',
	'UNLOCK_TOPIC_CONFIRM'			=> 'Weet je zeker dat je dit onderwerp wilt heropenen?',
	'UNLOCK_TOPICS'					=> 'Heropen de geselecteerde onderwerpen',
	'UNLOCK_TOPICS_CONFIRM'			=> 'Weet je zeker dat je de geselecteerde onderwerpen wilt heropenen?',
	'USER_CANNOT_POST'				=> 'Je kunt geen berichten plaatsen in dit forum.',
	'USER_CANNOT_REPORT'			=> 'Je kunt geen berichten melden in dit forum.',
	'USER_FEEDBACK_ADDED'			=> 'Feedback gebruiker toegevoegd',
	'USER_WARNING_ADDED'			=> 'De gebruiker is gewaarschuwd',

	'VIEW_DETAILS'			=> 'Toon details',
	'VIEW_PM'				=> 'Toon privébericht',
	'VIEW_POST'				=> 'Toon bericht',

	'WARNED_USERS'			=> 'Gewaarschuwde gebruikers',
	'WARNED_USERS_EXPLAIN'	=> 'Dit is een lijst van gebruikers met openstaande waarschuwingen.',
	'WARNING_PM_BODY'		=> 'Er is een waarschuwing naar je verstuurd door een beheerder of een moderator van dit forum. Inhoud van deze waarschuwing: [quote]%s[/quote]',
	'WARNING_PM_SUBJECT'	=> 'Forumwaarschuwing verstuurd',
	'WARNING_POST_DEFAULT'	=> 'Dit is een waarschuwing omtrent het door jou geplaatste bericht: %s .',
	'WARNINGS_ZERO_TOTAL'	=> 'Geen waarschuwingen.',

	'YOU_SELECTED_TOPIC'	=> 'Het geselecteerde onderwerpnummer %d: %s.',

	'report_reasons'		=> array(
		'TITLE'	=> array(
			'WAREZ'		=> 'Warez',
			'SPAM'		=> 'Spam',
			'OFF_TOPIC'	=> 'Off-topic',
			'OTHER'		=> 'Anders'
		),
		'DESCRIPTION' => array(
			'WAREZ'		=> 'Link(s) naar illegale software.',
			'SPAM'		=> 'Reclame voor een website of product.',
			'OFF_TOPIC'	=> 'Doet niet ter zake in het onderwerp.',
			'OTHER'		=> 'Het past niet binnen een categorie, gebruik het omschrijvingveld.'
		)
	),
));

?>