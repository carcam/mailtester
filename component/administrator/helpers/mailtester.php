<?php

/**
 * @version     1.0.0
 * @package     com_mailtester
 * @copyright   Copyright (C) 2015. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 * @author      Carlos Cámara <carlos@hepta.es> - http://www.heptatechnologies.com
 */
// No direct access
defined('_JEXEC') or die;

/**
 * Mailtester helper.
 */
class MailtesterHelper {

    /**
     * Configure the Linkbar.
     */
    public static function addSubmenu($vName = '') {
        		JHtmlSidebar::addEntry(
			JText::_('COM_MAILTESTER_TITLE_EMAILS'),
			'index.php?option=com_mailtester&view=emails',
			$vName == 'emails'
		);

    }

    /**
     * Gets a list of the actions that can be performed.
     *
     * @return	JObject
     * @since	1.6
     */
    public static function getActions() {
        $user = JFactory::getUser();
        $result = new JObject;

        $assetName = 'com_mailtester';

        $actions = array(
            'core.admin', 'core.manage', 'core.create', 'core.edit', 'core.edit.own', 'core.edit.state', 'core.delete'
        );

        foreach ($actions as $action) {
            $result->set($action, $user->authorise($action, $assetName));
        }

        return $result;
    }


}
