<?php
include 'dbclass.php';
class processQuery extends Database{
	private function query($sql){
		$query=new Database();
		$stmt=$query->connect_sql();
		$stmt1=$stmt->prepare($sql);
		return $stmt1;
	}
}
?>