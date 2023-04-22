<?php
session_start();
include "functions.php";
	$firstName=$_POST['input1'];
	$lastName=$_POST['input2'];
	$courseID=$_POST['input3'];
	$courseName=$_POST['input4'];
	$email=$_POST['input5'];
	$quiz=new Quiz();
	$select_result=$quiz->select($courseID,$courseName);
	$check_student=$quiz->select_student($firstName,$lastName,$courseID);
	if($check_student>0){
		echo 2;
	}else{
		if($select_result>0){
		$_SESSION['fn']=$firstName;
		$_SESSION['ln']=$lastName;
		$_SESSION['cID']=$courseID;
		$_SESSION['cn']=$courseName;
		$_SESSION['email']=$email;
		echo 1;
	}else{
		echo 0;
	}

	}
	?>
