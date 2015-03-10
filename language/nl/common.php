<?php
/**
*
* @package phpBB Extension - ShareThis
* @copyright (c) 2015
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
* Dutch translation by Dutch Translators (https://github.com/dutch-translators)
*
*/

if (!defined('IN_PHPBB'))
{
    exit;
}

if (empty($lang) || !is_array($lang))
{
    $lang = array();
}

$lang = array_merge($lang, array(
    'SOCIAL_BUTTONS'			=> 'Delen via',
	'SHARE_FACEBOOK'			=> 'Delen en liken op Facebook',
	'SHARE_TWITTER'				=> 'Delen via Twitter',
	'SHARE_GOOGLEPLUS'			=> 'Delen via Google+',
	'SHARE_LINKEDIN'			=> 'Delen via Linkedin',
	'ACP_SETTINGS'				=> 'Instellingen',
	'ACP_POSITION'				=> 'Positie',
	'ACP_POSITION_EXPLAIN'		=> 'Kies de plaats waar je de sociale media knoppen wilt weergeven.',
	'ACP_SUBMIT'				=> 'Wijzigingen opslaan',
	'ACP_POSITION_ALL'			=> 'Aan de bovenkant en aan de onderkant',
	'ACP_POSITION_TOP'			=> 'Aan de bovenkant',
	'ACP_POSITION_BOTTOM'		=> 'Aan de onderkant',
	'ACP_CACHETIME'				=> 'Cache-tijd',
	'ACP_CACHETIME_EXPLAIN'		=> 'Hoe lang moeten de gegevens van aantal keren dat een bericht/pagina is gedeeld worden bewaard?',
	'ACP_MULTIPLICATOR_SECONDS'	=> 'Secondes',
	'ACP_MULTIPLICATOR_MINUTES'	=> 'Minuten',
	'ACP_MULTIPLICATOR_HOURS'	=> 'Uren',
	'ACP_SET_PLATFORMS'			=> 'Sociale media platforms in/uitschakelen',
	'ACP_FACEBOOK'				=> 'Facebook',
	'ACP_TWITTER'				=> 'Twitter',
	'ACP_GOOGLE'				=> 'Google Plus',
	'ACP_LINKEDIN'				=> 'All',
	'ACP_SAVED'					=> 'Instellingen sociale media knoppen bijgewerkt.',
	'CACHE_PATH_NOT_WRITEABLE'	=> 'De cache-map "%s" is niet schrijfbaar!',
	'ACP_CACHE_PURGE_SUCCESS'	=> 'Alle bestanden uit de cache succesvol verwijderd.',
	'ACP_SHOWSHARES'			=> 'Deel teller',
	'ACP_SHOWSHARES_EXPLAIN'	=> 'Het aantal keren dat het bericht of de pagina is gedeeld weergeven',
	'ACP_PURGE_CACHE'			=> 'Cache legen',
	'ACP_PURGE_CACHE_EXPLAIN'	=> 'Verwijder alle bestanden uit de cache',
	'RUN_NOW'					=> 'Nu uitvoeren',
	'ACP_OG_TAGS'				=> 'OG Meta-Tags',
	'ACP_ENABLE_OG_TAGS'		=> 'Activeer OG Meta-Tags',
	'ACP_OG_EXPLAIN'			=> 'Activeert <a href="http://ogp.me/">Open Graph</a> Meta-Tags om sociale media platforms informatie over de pagina die gedeeld wordt te geven',
	'ACP_OG_IMAGE'				=> 'Afbeelding',
	'ACP_OG_IMAGE_EXPLAIN'		=> 'Geef de link naar de afbeelding, die je wilt gebruiken bij je berichten die gedeeld worden.',
	'ACP_ENABLE_OG_TITLE'		=> 'Titel',
	'ACP_OG_TITLE_EXPLAIN'		=> 'Indien geactiveerd, wordt de onderwerptitel gebruikt als og:title',
	'ACP_ENABLE_OG_DESC'		=> 'Omschrijving ',
	'ACP_OG_DESC_EXPLAIN'		=> 'Indien geactiveerd, wordt het eerste bericht gebruikt als og:description.<br /><span style="color:#f00;">LET OP! Als je deze optie activeert kan het eerste bericht door iedereen gezien worden, ook al is het forum privé.</span>Dit voorkomt dat het sociale media platform de aanmeldtekst gebruikt als omschrijving.',
	'ACP_USE_SEO_URLS'			=> 'URL herschrijven',
	'ACP_USE_SEO_URLS_EXPLAIN'	=> 'Activeer deze optie als er een extensie wordt gebruikt om links te herschrijven.',
	'ACP_ENABLE_FORUMS'			=> 'Activeer sociale media knoppen',
	'ACP_ENABLE_FORUMS_EXPLAIN'	=> 'Selecteer de forumonderdelen waar je de sociale media knoppen wilt weergeven.',
));
