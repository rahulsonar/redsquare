<?php
class RedSquare
{
	public $app;
	public function application()
	{
		$this->app=new App();
		$this->app->init();
		$this->run();
	}
	
	function run()
	{
		if(class_exists($this->app->controllerClass)) {
		$controllerObj=new $this->app->controllerClass();
		}
		else {
			echo "ERROR 1";
			die();
		}

		$controllerObj->app=$this->app;
		if(method_exists($controllerObj,$this->app->action)) {
		call_user_func_array(array($controllerObj,$this->app->action),$this->app->params);
		}
		else {
			echo "ERROR 2";
		}

		$controllerObj->view();
	}
}