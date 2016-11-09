<?php
class User extends BaseModel
{
	function __construct()
	{
		
	}
	public function getUsers()
	{
		return array(array(1,"Rahul","Sonar","sonar.soni@gmail.com"));
	}
}