<?php
class Views
{
	public $view;
	public $data;
	public function render()
	{
		extract($this->data);
		include(APP_DIR.DS.'views'.DS.$this->view.'.php');
	}
}