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

jimport('joomla.application.component.controllerform');

/**
 * Email controller class.
 */
class MailtesterControllerEmail extends JControllerForm
{

    function __construct() {
        $this->view_list = 'emails';
        parent::__construct();
    }

}