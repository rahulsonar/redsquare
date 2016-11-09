<?php

define('BASEPATH',dirname(__FILE__));
define('DS',"/");


define('CORE_DIR',BASEPATH.DS.'core');
define('APP_DIR',BASEPATH.DS.'app');

define('CORE_CONFIG_DIR',CORE_DIR.DS.'config');
define('APP_CONFIG_DIR',APP_DIR.DS.'config');


require_once(CORE_CONFIG_DIR.DS.'bootstrap.php');
require_once(CORE_DIR.DS.'app.php');
require_once(CORE_DIR.DS.'RedSquare.php');
require_once(CORE_DIR.DS.'Views.php');


define('DEFAULT_CONTROLLER','landing');
define('DEFAULT_ACTION','index');



$rs=new RedSquare();
$rs->application();



