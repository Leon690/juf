<?php
class Conectar{
	protected $db;
	public function __construct() {
    	$this->db = new PDO('mysql:host=localhost;dbname=juf;charset=utf8', 'juf', 'juf');
    }	
    public function getConnection(){
    	return $this->db;
    }
}
?>