<?php

define('BASEPATH',dirname(__FILE__));
define('DS',"/");


define('CORE_DIR',BASEPATH.DS.'core');
define('APP_DIR',BASEPATH.DS.'app');

define('CORE_CONFIG_DIR',CORE_DIR.DS.'config');
define('APP_CONFIG_DIR',APP_DIR.DS.'config');
define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_PASSWORD','root');
define('DB_NAME','redsquare');


require_once(CORE_CONFIG_DIR.DS.'bootstrap.php');
require_once(CORE_DIR.DS.'app.php');
require_once(CORE_DIR.DS.'RedSquare.php');
require_once(CORE_DIR.DS.'Views.php');
require_once(CORE_DIR.DS.'libraries'.DS.'ez_sql_core.php');
require_once(CORE_DIR.DS.'libraries'.DS.'ez_sql_mysql.php');


define('DEFAULT_CONTROLLER','landing');
define('DEFAULT_ACTION','index');



$rs=new RedSquare();
$rs->application();



