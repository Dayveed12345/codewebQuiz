<?php
include 'database/process.php';
class Quiz{
	public $sql;
	public $sql1;
	public $processQuery;
	public $execute;
public function btnChange($sql){
$this->processQuery= new processQuery();
$this->execute=$this->processQuery->query("SELECT * FROM questionbox where id ='?'");
return $this->execute->execute([$sql]);
}
public function query($sql1){
$this->processQuery= new processQuery();
$this->execute=$this->processQuery->query("SELECT * FROM questionbox where id ='?'");
$this->execute->execute([$sql1]);
return $this->execute;
}
}

?>