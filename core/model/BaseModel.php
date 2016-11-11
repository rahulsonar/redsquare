<?php
class BaseModel {
	
	protected $db;
	public function __construct() {
		if(empty($this->db))
		$this->db=Dbconnect::connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
	}
	
}