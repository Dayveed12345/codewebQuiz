<?php
session_start();
include "loginFunctions.php";
	$firstName=$_POST['input1'];
	$lastName=$_POST['input2'];
	$courseID=$_POST['input3'];
	$courseName=$_POST['input4'];
	$quiz=new Quiz();
	$select_result=$quiz->select($courseID,$courseName);
	if($select_result>0){
		$result=$quiz->query($firstName,$lastName);
		$_SESSION['fn']=$firstName;
		$_SESSION['ln']=$lastName;
		$_SESSION['cID']=$courseID;
		$_SESSION['cn']=$courseName;
		
		echo 1;
	}else{
		echo 0;
	}
?>