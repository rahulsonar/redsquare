<?php
class User extends BaseModel
{
	function __construct()
	{
		parent::__construct();
	}
	public function getUsers()
	{
		$users=$this->db->get_results("SELECT * FROM users");
		return $users;
	}
	public function getUser($id)
	{
		$user=$this->db->get_results("SELECT * FROM users where id=".$id);
		return $user;
	}
}