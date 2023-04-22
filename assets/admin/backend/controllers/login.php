<?php
session_start();
include '../database/function.php';
	$userName=$_POST['input1'];
	$Password=$_POST['input2'];
	$quiz=new Quiz();
	$select_admin=$quiz->login_admin($userName,$Password);
	if($select_admin<=0){
		echo 0;
	}else{
		$_SESSION['user']=$userName;
		$_SESSION['pass']=$Password;
		echo 1;
	}
?>