<?php
include '../backend/data/process.php';
class Quiz{
	public $sql;
	public $sql1;
	public $processQuery;
	public $execute;
	private $query;
	private $prepare;
	public $course
;public function query(){
$this->processQuery= new processQuery();
$this->course=$_SESSION['cID'];
$this->query="SELECT * FROM questionbox WHERE course_id='$this->course' ORDER BY rand()";
$this->prepare=$this->processQuery->query($this->query);
$this->prepare->execute();
return $this->prepare;
}
public function btn(){
	$this->processQuery= new processQuery();
	$this->course=$_SESSION['cID'];
	$this->query="SELECT * FROM questionbox WHERE course_id='$this->course'";
	$this->prepare=$this->processQuery->query($this->query);
	$this->prepare->execute();
	return $this->prepare;
	}
}

?>