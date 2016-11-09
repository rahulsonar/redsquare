<?php
class Views
{
	public $view;
	public $data;
	public $layout;
	
	public function __construct()
	{
		if(empty($this->layout))
			$this->layout='default';
	}
	public function render()
	{
		extract($this->data);
		include(APP_DIR.DS.'views'.DS.$this->view.'.php');
	}
}