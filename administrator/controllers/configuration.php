<?php
/**
 * @package     School Management
 * @subpackage  Admin  Controller
 * @copyright   Copyright (C) 2012. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 * @author      Gnanakeethan Balasubramaniam <gnanakeethan@gmail.com> - 
 */

// No direct access
defined('_JEXEC') or die;

jimport('joomla.application.component.controllerform');

/**
 * Configuration controller class.
 */
class SchoolControllerConfiguration extends JControllerForm
{

    function __construct() {
        $this->view_list = 'configuration';
        parent::__construct();
    }

}
