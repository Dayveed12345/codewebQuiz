<?php
include '../backend/data/process.php';
class Quiz{
	public $sql;
	public $sql1;
	public $processQuery;
	public $execute;
	private $query;
	private $prepare;
public function btnChange($sql){
$this->processQuery= new processQuery();
$this->execute=$this->processQuery->query("SELECT * FROM questionbox where id ='?'");
return $this->execute->execute([$sql]);
}
public function query($sql1){
$this->processQuery= new processQuery();
$this->query="SELECT * FROM questionbox where id =?";
$this->prepare=$this->processQuery->query($this->query);
$this->prepare->execute([$sql1]);
return $this->prepare;
}
public function btn(){
$this->processQuery= new processQuery();
$this->query="SELECT * FROM questionbox";
$this->prepare=$this->processQuery->query($this->query);
$this->prepare->execute();
return $this->prepare;
}
}


?>