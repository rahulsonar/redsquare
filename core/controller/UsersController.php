<?php
class UsersController extends BaseController
{
	public function __construct()
	{
		parent::__construct();
		$this->loadModel('User');
	}
	function admin_add()
	{
		
		$users=$this->User->getUsers();
		$this->set("users",$users);
		
	}
}