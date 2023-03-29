<?php
include 'dbclass.php';
class processQuery extends Database{
	public function query($sql){
		$query=new Database();
		$stmt=$query->connect_sql();
		$stmt1=$stmt->prepare($sql);
		return $stmt1;
	}
}
?>