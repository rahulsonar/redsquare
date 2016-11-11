<?php
class App
{
	public $action;
	public $controller;
	public $admin;
	
	function init()
	{
		$this->request=(!empty($_GET['r']))?$_GET['r']:"";
		
		$this->params=$requests=explode("/",$this->request);
		$admin="";
		if($this->params[0]=='admin')
		{
			$this->admin='admin_';
		}
		array_shift($this->params);
		if(!empty($this->params[0])) {
			$this->controller=$this->params[0];
		}
		else {
			$this->controller=DEFAULT_CONTROLLER;
		}

		array_shift($this->params);


		if(!empty($this->params[0])) {
			$this->action=$this->admin.$this->params[0];
		}
		else {
			$this->action=$this->admin.DEFAULT_ACTION;
		}
		array_shift($this->params);
		$this->params=$this->params;
		$this->controllerClass=ucfirst($this->controller)."Controller";
		
		
		
	}
	
}