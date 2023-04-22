<?php
session_start();
include '../database/function.php';
$uname = $_SESSION['user'];
$username = $_POST['username'];
$password = $_POST['pass'];
$update_name = new Quiz();
$update = $update_name->update_name($username,$uname,$password);
if ($update) {
	$_SESSION['user']=$username;
	echo 1;
}else{
	echo 0;
}
?>