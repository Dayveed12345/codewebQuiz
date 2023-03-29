<?php
class Database{
	private$pdo;
	public function connect_sql(){
		$this->pdo=new PDO("mysql:host=localhost;dbname=codequiz",'root','');
		return $this->pdo;
	}
}
?>