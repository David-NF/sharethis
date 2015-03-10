<?php
/**
*
* @package phpBB Extension - ShareThis
* @copyright (c) 2015
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
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
    'SOCIAL_BUTTONS'			=> 'Share This',
	'SHARE_FACEBOOK'			=> 'Condividi e Like di Facebook',
	'SHARE_TWITTER'				=> 'Condividi con Twitter',
	'SHARE_GOOGLEPLUS'			=> 'Condividi con Google+',
	'SHARE_LINKEDIN'			=> 'Tutti i social',
	'ACP_SETTINGS'				=> 'Opzioni',
	'ACP_POSITION'				=> 'Posizioni',
	'ACP_POSITION_EXPLAIN'		=> 'Scegli la posizione dei pulsanti nei topic del forum.',
	'ACP_SUBMIT'				=> 'Salva cambiamenti',
	'ACP_POSITION_ALL'			=> 'Sia sopra che sotto',
	'ACP_POSITION_TOP'			=> 'Sopra',
	'ACP_POSITION_BOTTOM'		=> 'Sotto',
	'ACP_CACHETIME'				=> 'Tempo della Cache',
	'ACP_CACHETIME_EXPLAIN'		=> 'Tempo per la cache delle condivisioni ?',
	'ACP_MULTIPLICATOR_SECONDS'	=> 'Secondi',
	'ACP_MULTIPLICATOR_MINUTES'	=> 'Minuti',
	'ACP_MULTIPLICATOR_HOURS'	=> 'Ore',
	'ACP_SET_PLATFORMS'			=> 'Abilita Pulsanti',
	'ACP_FACEBOOK'				=> 'Facebook',
	'ACP_TWITTER'				=> 'Twitter',
	'ACP_GOOGLE'				=> 'Google Plus',
	'ACP_LINKEDIN'				=> 'Tutti',
	'ACP_SAVED'					=> 'Opzioni salvate.',
	'CACHE_PATH_NOT_WRITEABLE'	=> 'La cache "%s" non è stata vuotata!',
	'ACP_CACHE_PURGE_SUCCESS'	=> 'Cancella tutti i file dalla cache.',
	'ACP_SHOWSHARES'			=> 'Visualizza pulsanti',
	'ACP_SHOWSHARES_EXPLAIN'	=> 'Display the number of shares behind the button',
	'ACP_PURGE_CACHE'			=> 'Cancella cache',
	'ACP_PURGE_CACHE_EXPLAIN'	=> 'Cancella tutti i file dalla cache',
	'RUN_NOW'					=> 'Cancella',
	'ACP_OG_TAGS'				=> 'OG Meta Tags',
	'ACP_ENABLE_OG_TAGS'		=> 'Attiva OG Meta-Tags',
	'ACP_OG_EXPLAIN'			=> 'Attivare <a href="http://ogp.me/">Open Graph</a> Meta-Tags, i Social network prenderanno inormazioni dalle pagine condivise',
	'ACP_OG_IMAGE'				=> 'Immagine',
	'ACP_OG_IMAGE_EXPLAIN'		=> 'Inserisci un url di un immagine per le condivisioni come un logo',
	'ACP_ENABLE_OG_TITLE'		=> 'Titolo',
	'ACP_OG_TITLE_EXPLAIN'		=> 'Se attivato: og:title',
	'ACP_ENABLE_OG_DESC'		=> 'Descrizione',
	'ACP_OG_DESC_EXPLAIN'		=> 'Se attivato: og:description.',
	'ACP_USE_SEO_URLS'			=> 'URL Riscrittura',
	'ACP_USE_SEO_URLS_EXPLAIN'	=> 'Attiva questa opzione se hai estensioni per la riscrittura delle url.',
	'ACP_ENABLE_FORUMS'			=> 'Attiva pulsanti',
	'ACP_ENABLE_FORUMS_EXPLAIN'	=> 'Seleziona i forum dove vuoi far visualizzare i pulsanti.',
));
