<?php
class BaseModel {
	
	protected $db;
	public function __construct() {
		
		$this->db = new ezSQL_mysql(DB_USER,DB_PASSWORD,DB_NAME,DB_HOST);
	}
	
}