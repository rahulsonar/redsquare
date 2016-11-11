<?php
class Dbconnect
{
	private static $instance;
	protected $db;
	private function __construct()
	{
		$this->db = new ezSQL_mysql(DB_USER,DB_PASSWORD,DB_NAME,DB_HOST);
	}
	
	public static function connect($dbhost, $user, $password, $dbname)
	{
		if(empty(Dbconnect::$instance))
			Dbconnect::$instance=new Dbconnect();
		
		return Dbconnect::$instance;
	}
	
	public function get_results($query)
	{
		return $this->db->get_results($query);
	}
	public function get_row($query)
	{
		return $this->db->get_row($query);
	}
	
}