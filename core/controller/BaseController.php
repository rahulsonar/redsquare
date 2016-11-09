<?php
class BaseController {
	
	public $data;
	public function __construct() {
		$this->data=array();
	}
	
	public function loadModel($modelName)
	{
		$this->{$modelName}=new $modelName();
	}
	public function loadLibrary($library)
	{
		$this->libraries[]=$library;
	}
	
	public function set($key,$value)
	{
		$this->data[$key]=$value;
	}
	public function View($view='')
	{
		$view=new Views();
		if(empty($view))
			$view->view=$view;
		else
			$view->view=($this->app->controller).DS.($this->app->action);
		
		if(!empty($this->layout))
			$view->layout=$this->layout;
		
		$view->data=$this->data;
		$view->render();
	}
}