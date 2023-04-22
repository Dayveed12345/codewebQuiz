<?php
include 'processclass.php';
class Quiz
{
	public $sql;
	public $sql1;
	public $processQuery;
	public $execute;
	public $query;
	public $prepare;
	public function view($course)
	{
		// SELECT * FROM tabledb where name LIKE '{$name}%
		$this->processQuery = new processQuery();
		$this->query = "SELECT * FROM questionbox where course_id==";
		$this->prepare = $this->processQuery->query($this->query);
		$this->prepare->execute([$course]);
		return $this->prepare;
	}
	public function defaultView()
	{
		$this->processQuery = new processQuery();
		$this->query = "SELECT * FROM questionbox limit 10";
		$this->prepare = $this->processQuery->query($this->query);
		$this->prepare->execute();
		return $this->prepare;
	}
	public function select(string $username, $password)
	{
		$this->processQuery = new processQuery();
		$this->query = "SELECT * FROM admin where username=? and pword=?";
		$this->prepare = $this->processQuery->query($this->query);
		$this->prepare->execute([$username, $password]);
		return $this->prepare;
	}
	public function update($question, $answer, $wrong1, $wrong2, $wrong3,$id,$course_id)
	{
		$this->processQuery = new processQuery();
		$this->query = "UPDATE questionbox SET question=?, answer=?, wrong1=?, wrong2=?, wrong3=? where id=? and course_id=?";
		$this->prepare = $this->processQuery->query($this->query);
		$this->prepare->execute([$question, $answer, $wrong1, $wrong2, $wrong3,$id,$course_id]);
		return $this->prepare;
	}

	public function insert($a, $b, $c, $d, $e, $f, $g)
	{
		$this->processQuery = new processQuery();
		$this->query = "INSERT INTO questionbox (course_id,course,question,answer,wrong1,wrong2,wrong3)VALUES(?,?,?,?,?,?,?)";
		$this->prepare = $this->processQuery->query($this->query);
		$this->prepare->execute([$a, $b, $c, $d, $e, $f, $g]);
		return $this->prepare;
	}
	public function score()
	{
		$this->processQuery = new processQuery();
		$this->query = "SELECT * FROM scoresheet ORDER BY id DESC ";
		$this->prepare = $this->processQuery->query($this->query);
		$this->prepare->execute();
		return $this->prepare;
	}
	public function search($courses)
	{
		$this->processQuery = new processQuery();
		$this->query = "SELECT * FROM scoresheet where course_id like ?% && lastName like ?% $$  ORDER BY desc student_score ";
		$this->prepare = $this->processQuery->query($this->query);
		$this->prepare->execute([$courses]);
		return $this->prepare;
	}
	public function edit($id)
	{
		$this->processQuery = new processQuery();
		$this->query = "SELECT * FROM questionbox where id=? ";
		$this->prepare = $this->processQuery->query($this->query);
		$this->prepare->execute([$id]);
		return $this->prepare;
	}
	public function insert_score($a,$b,$c,$d,$e,$f){
		$this->processQuery = new processQuery();
		$this->query = "INSERT INTO scoresheet (student_score,student_course,time_of_exam,course_id,firstName,lastName)VALUES(?,?,?,?,?,?)";
		$this->prepare = $this->processQuery->query($this->query);
		$this->prepare->execute([$a, $b, $c, $d, $e, $f]);
		return $this->prepare;
	}
	
	public function login_admin($c, $d)
	{
		$this->processQuery = new processQuery();
		$this->execute = $this->processQuery->query("SELECT * FROM `admin` WHERE username= ? and pword= ?");
		$this->execute->execute([$c, $d]);
		return $this->execute->rowCount();
	}
	public function login_pass($c, $d)
	{
		$this->processQuery = new processQuery();
		$this->execute = $this->processQuery->query("SELECT * FROM `admin` WHERE username= ? and pword= ?");
		$this->execute->execute([$c, $d]);
		return $this->execute->rowCount();
	}
	public function checking_name($pass,$uname){
		$this->processQuery = new processQuery();
		$this->query = "SELECT * FROM admin where pword=?  and username=?";
		$this->prepare = $this->processQuery->query($this->query);
		$this->prepare->execute([$pass,$uname]);
		return $this->prepare;
	}
	public function update_pass($newpass,$oldpass,$uname){
		$this->processQuery = new processQuery();
		$this->query = "UPDATE admin SET pword=? where pword=?  and username=?";
		$this->prepare = $this->processQuery->query($this->query);
		$this->prepare->execute([$newpass,$oldpass,$uname]);
		return $this->prepare;
	}
	public function oldpass($uname,$pass){
		$this->processQuery = new processQuery();
		$this->query = "SELECT * FROM admin where username=? and pword=?";
		$this->prepare = $this->processQuery->query($this->query);
		$this->prepare->execute([$uname,$pass]);
		return $this->prepare->rowCount();
	}
	public function update_name($username,$uname,$pword){
		$this->processQuery = new processQuery();
		$this->query = "UPDATE admin SET username=? where username=?  and pword=?";
		$this->prepare = $this->processQuery->query($this->query);
		$this->prepare->execute([$username,$uname,$pword]);
		return $this->prepare;
	}
}
?>