<?php
include '../data/process.php';
class Quiz
{
	public $sql;
	public $sql1;
	public $processQuery;
	public $execute;

	// public function btnChange($sql){
// $this->processQuery= new processQuery();
// $this->execute=$this->processQuery->query("INSERT INTO ");
// return $this->execute->execute([$sql]);
// }
	public function query($a, $b)
	{
		$this->processQuery = new processQuery();
		$this->execute = $this->processQuery->query("INSERT INTO student(firstName,lastName)VALUES(?,?)");
		$this->execute->execute([$a, $b]);
		return $this->execute;
	}
	public function select($c, $d)
	{
		$this->processQuery = new processQuery();
		$this->execute = $this->processQuery->query("SELECT * FROM `questionbox` WHERE course_id= ? and course= ?");
		$this->execute->execute([$c, $d]);
		return $this->execute->rowCount();
		
	}
}

?>