<?php
class UsersController extends BaseController
{
	public function __construct()
	{
		parent::__construct();
		$this->loadModel('User');
	}
	
	public function admin_index()
	{
		$users=$this->User->getUsers();
		$this->set("users",$users);
	}
	function admin_add()
	{
		
		$users=$this->User->getUsers();
		$this->set("users",$users);
		
	}
	function admin_edit($id)
	{
		
		$user=$this->User->getUser($id);
		$this->set("user",$user);
		
	}
}