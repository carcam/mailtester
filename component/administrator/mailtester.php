<?php
/**
 * @version     1.0.0
 * @package     com_mailtester
 * @copyright   Copyright (C) 2015. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 * @author      Carlos Cámara <carlos@hepta.es> - http://www.heptatechnologies.com
 */


// no direct access
defined('_JEXEC') or die;

// Access check.
if (!JFactory::getUser()->authorise('core.manage', 'com_mailtester')) 
{
	throw new Exception(JText::_('JERROR_ALERTNOAUTHOR'));
}

// Include dependancies
jimport('joomla.application.component.controller');

$controller	= JControllerLegacy::getInstance('Mailtester');
$controller->execute(JFactory::getApplication()->input->get('task'));
$controller->redirect();
