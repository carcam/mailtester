<?php
/**
 * @version     1.0.0
 * @package     com_mailtester
 * @copyright   Copyright (C) 2015. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 * @author      Carlos Cámara <carlos@hepta.es> - http://www.heptatechnologies.com
 */

defined('_JEXEC') or die;

// Include dependancies
jimport('joomla.application.component.controller');

// Execute the task.
$controller	= JControllerLegacy::getInstance('Mailtester');
$controller->execute(JFactory::getApplication()->input->get('task'));
$controller->redirect();
