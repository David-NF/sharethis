<?php
/**
*
* @package phpBB Extension - ShareThis
* @copyright (c) 2015
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace cece74\sharethis\acp;

class socialbuttons_info
{
    function module()
    {
        return array(
            'filename'    => '\cece74\sharethis\socialbuttons_module',
            'title'        => 'ACP_SOCIALBUTTONS_TITLE',
            'version'    => '1.0.6',
            'modes'        => array(
                'settings'    => array(
                    'title' => 'ACP_SOCIALBUTTONS_TITLE',
                    'auth' => 'ext_cece74/sharethis && acl_a_board', 
                    'cat' => array('ACP_SOCIALBUTTONS_TITLE')
                ),
            ),
        );
    }
}
