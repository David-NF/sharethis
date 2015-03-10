<?php
/**
*
* @package phpBB Extension - ShareThis
* @copyright (c) 2015
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace cece74\sharethis\migrations;

class initial_module extends \phpbb\db\migration\migration
{
	public function update_data()
	{
		return array(
			// Add configs
			array('config.add', array('socialbuttons_style', '1')),
			array('config.add', array('socialbuttons_multiplicator', '3600')),
			array('config.add', array('socialbuttons_cachetime', '24')),
			array('config.add', array('socialbuttons_position', '2')),
			array('config.add', array('socialbuttons_facebook', '1')),
			array('config.add', array('socialbuttons_twitter', '1')),
			array('config.add', array('socialbuttons_google', '1')),
			array('config.add', array('socialbuttons_linkedin', '1')),
			array('config.add', array('socialbuttons_showshares', '1')),
			array('config.add', array('socialbuttons_enable_og', '1')),
			array('config.add', array('socialbuttons_og_image', '')),
			array('config.add', array('socialbuttons_enable_og_title', '1')),
			array('config.add', array('socialbuttons_enable_og_desc', '1')),
			array('config.add', array('socialbuttons_enable_og_desc_forums', '')),
			array('config.add', array('socialbuttons_use_seo_urls', '0')),
			array('config.add', array('socialbuttons_enable_forums', '')),
			array('config.add', array('socialbuttons_enable', '')),
			// Keep track of version in the database
			array('config.add', array('socialbuttons_version', '0.4.1')),
			
			// Add ACP module
			array('module.add', array(
				'acp',
				'ACP_CAT_DOT_MODS',
				'ACP_SOCIALBUTTONS_TITLE'
			)),
			array('module.add', array(
				'acp',
				'ACP_SOCIALBUTTONS_TITLE',
				array(
					'module_basename'	=> '\cece74\sharethis\acp\socialbuttons_module',
					'modes'				=> array('settings'),
				),
			)),
		);
	}
}
