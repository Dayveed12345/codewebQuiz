<?php
include '../data/process.php';
class Quiz
{
	public $sql;
	public $sql1;
	public $processQuery;
	public $execute;
	public $query;
	public $prepare;

	// public function btnChange($sql){
// $this->processQuery= new processQuery();
// $this->execute=$this->processQuery->query("INSERT INTO ");
// return $this->execute->execute([$sql]);
// }
	public function select($c, $d)
	{
		$this->processQuery = new processQuery();
		$this->execute = $this->processQuery->query("SELECT * FROM `questionbox` WHERE course_id= ? and course= ?");
		$this->execute->execute([$c, $d]);
		return $this->execute->rowCount();
		
	}
	public function insert_result($a, $b, $c, $d, $e){
		$this->processQuery = new processQuery();
		$this->query = "INSERT INTO scoresheet (firstName,lastName,student_name,student_course,course_id)VALUES(?,?,?,?,?)";
		$this->prepare = $this->processQuery->query($this->query);
		$this->prepare->execute([$a, $b, $c, $d, $e]);
		return $this->prepare;
	}
}

?>