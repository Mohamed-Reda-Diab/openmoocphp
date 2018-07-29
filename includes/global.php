<?php
/**
 * define pass constant
 */
define('DS', DIRECTORY_SEPARATOR);
define('root',dirname(__FILE__).DS.'..');
define('INCLUDES',root.'/includes');
define('CONTROLLERS',root.'/includes/controllers');
define('MODELS',root.'/includes/models');
define('VIEWS',root.'/includes/views');

/**
 * define special constant for project
 */
  define('IN_APP_INCLUDE',true);
require INCLUDES.'/config.php';

require MODELS.'/model.php';


//require root.'/includes/config.php';
