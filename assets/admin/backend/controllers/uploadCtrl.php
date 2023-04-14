<?php
include '../database/function.php';
	$Id = $_POST['courseId'];
	$Name = $_POST['courseName'];
	$ques=$_POST['question'];
	$ans=$_POST['input1'];
	$wrong1=$_POST['input2'];
	$wrong2=$_POST['input3'];
	$wrong3=$_POST['input4'];
	$quiz=new Quiz();
	$validate=$quiz->insert($Id,$Name,$ques,$ans,$wrong1,$wrong2,$wrong3);
	if($validate){
		echo 1;

	}else{
		echo 0;
	}

?>