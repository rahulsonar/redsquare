<?php

define('BASEPATH',dirname(__FILE__));
define('DS',"/");


define('CORE_DIR',BASEPATH.DS.'core');
define('APP_DIR',BASEPATH.DS.'app');

define('CORE_CONFIG_DIR',CORE_DIR.DS.'config');
define('APP_CONFIG_DIR',APP_DIR.DS.'config');


require_once(CORE_CONFIG_DIR.DS.'bootstrap.php');

define('DEFAULT_CONTROLLER','landing');
define('DEFAULT_ACTION','index');

$request=(!empty($_GET['r']))?$_GET['r']:"";
$params=$requests=explode("/",$request);

if(!empty($params[0])) {
	$controller=$params[0];
}
else {
	$controller=DEFAULT_CONTROLLER;
}

array_shift($params);

if(!empty($params[0])) {
$action=$params[0];
}
else {
	$action=DEFAULT_ACTION;
}
array_shift($params);
$controllerClass=ucfirst($controller)."Controller";
if(class_exists($controllerClass)) {
$controllerObj=new $controllerClass();
}
else {
	echo "ERROR 1";
	die();
}

if(method_exists($controllerObj,$action)) {
call_user_func_array(array($controllerObj,$action),$params);
}
else {
	echo "ERROR 2";
}