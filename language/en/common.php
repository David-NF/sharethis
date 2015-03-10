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
	'SHARE_FACEBOOK'			=> 'Share and like on Facebook',
	'SHARE_TWITTER'				=> 'Share on Twitter',
	'SHARE_GOOGLEPLUS'			=> 'Share on Google+',
	'SHARE_LINKEDIN'			=> 'Share on Linkedin',
	'ACP_SETTINGS'				=> 'Settings',
	'ACP_POSITION'				=> 'Position',
	'ACP_POSITION_EXPLAIN'		=> 'Choose a position where the buttons should be displayed.',
	'ACP_SUBMIT'				=> 'Update changes',
	'ACP_POSITION_ALL'			=> 'At the top and at the bottom',
	'ACP_POSITION_TOP'			=> 'At the top',
	'ACP_POSITION_BOTTOM'		=> 'At the bottom',
	'ACP_CACHETIME'				=> 'Cachetime',
	'ACP_CACHETIME_EXPLAIN'		=> 'How long should the data for the number of shared be cached?',
	'ACP_MULTIPLICATOR_SECONDS'	=> 'Seconds',
	'ACP_MULTIPLICATOR_MINUTES'	=> 'Minutes',
	'ACP_MULTIPLICATOR_HOURS'	=> 'Hours',
	'ACP_SET_PLATFORMS'			=> 'Enable platforms',
	'ACP_FACEBOOK'				=> 'Facebook',
	'ACP_TWITTER'				=> 'Twitter',
	'ACP_GOOGLE'				=> 'Google Plus',
	'ACP_LINKEDIN'				=> 'All',
	'ACP_SAVED'					=> 'Social Media Buttons settings updated.',
	'CACHE_PATH_NOT_WRITEABLE'	=> 'The cache path "%s" is not writeable!',
	'ACP_CACHE_PURGE_SUCCESS'	=> 'Deleted all files from cache.',
	'ACP_SHOWSHARES'			=> 'Display shares',
	'ACP_SHOWSHARES_EXPLAIN'	=> 'Display the number of shares behind the button',
	'ACP_PURGE_CACHE'			=> 'Purge Cache',
	'ACP_PURGE_CACHE_EXPLAIN'	=> 'Delete all files from cache',
	'RUN_NOW'					=> 'Run Now',
	'ACP_OG_TAGS'				=> 'OG Meta-Tags',
	'ACP_ENABLE_OG_TAGS'		=> 'Activate OG Meta-Tags',
	'ACP_OG_EXPLAIN'			=> 'Activates <a href="http://ogp.me/">Open Graph</a> Meta-Tags to give the Social Media platforms inormations about the page to share',
	'ACP_OG_IMAGE'				=> 'Image',
	'ACP_OG_IMAGE_EXPLAIN'		=> 'Enter the URL to an image that you whant to use in the share.',
	'ACP_ENABLE_OG_TITLE'		=> 'Title',
	'ACP_OG_TITLE_EXPLAIN'		=> 'If activated the topic title is used as og:title',
	'ACP_ENABLE_OG_DESC'		=> 'Description',
	'ACP_OG_DESC_EXPLAIN'		=> 'If activated the first post will be used as og:description.<br /><span style="color:#f00;">Attention! If activated the first post can be seen by everyone even if the forum is private.</span> This prevents that the platforms use the login text as description.',
	'ACP_USE_SEO_URLS'			=> 'URL Rewriting',
	'ACP_USE_SEO_URLS_EXPLAIN'	=> 'Activate this option if a URL rewriting extension is used.',
	'ACP_ENABLE_FORUMS'			=> 'Activate buttons',
	'ACP_ENABLE_FORUMS_EXPLAIN'	=> 'Select the forums where the buttons should be displayed.',
));
