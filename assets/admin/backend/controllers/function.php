<?php
include(dirname(__DIR__)).'/database/processclass.php';
declare(strict_types=1);
class Quiz{
	public $sql;
	public $sql1;
	public $processQuery;
	public $execute;
	private $query;
	private $prepare;
	public $course
;public function view()
{
$this->processQuery= new processQuery();
$this->query="SELECT * FROM questionbox WHERE course_id=?";
$this->prepare=$this->processQuery->query($this->query);
$this->prepare->execute([$this->course]);
return $this->prepare;
}
public function select(string $username, $password){
	$this->processQuery= new processQuery();
	$this->query="SELECT * FROM admin where username=? and pword=?";
	$this->prepare=$this->processQuery->query($this->query);
	$this->prepare->execute([$username,$password]);
	return $this->prepare;
	}
public function update($question,$answer,$wrong1,$wrong2,$wrong3){
	$this->processQuery= new processQuery();
	$this->query="UPDATE questionbox SET question=? and answer=? and wrong1=? and wrong2=? and wrong3=?";
	$this->prepare=$this->processQuery->query($this->query);
	$this->prepare->execute([$question,$answer,$wrong1,$wrong2,$wrong3]);
	return $this->prepare;
	}
	
public function insert($course_id,$course,$question,$answer,$wrong1,$wrong2,$wrong3){
	$this->processQuery= new processQuery();
	$this->query="INSERT INTO questionbox (course_id,course,question,answer,wrong1,wrong2,wrong3)VALUES(?,?,?,?,?,?,?)";
	$this->prepare=$this->processQuery->query($this->query);
	$this->prepare->execute([$course_id,$course,$question,$answer,$wrong1,$wrong2,$wrong3]);
	return $this->prepare;
	}
public function score(){
	$this->processQuery= new processQuery();
	$this->query="SELECT * FROM scoresheet ";
	$this->prepare=$this->processQuery->query($this->query);
	$this->prepare->execute();
	return $this->prepare;
}
public function leaderboard($courses){
	$this->processQuery= new processQuery();
	$this->query="SELECT * FROM scoresheet where student_course=?";
	$this->prepare=$this->processQuery->query($this->query);
	$this->prepare->execute([$courses]);
	return $this->prepare;
}
}
?>