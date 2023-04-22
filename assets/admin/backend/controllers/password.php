<?php
session_start();
include '../database/function.php';
if (isset($_POST['oldpass'])) {
	$oldpassword = $_POST['oldpass'];
	$pass = new Quiz();
	$checking_pass = $pass->oldpass($_SESSION['user'],$oldpassword);
	if ($checking_pass > 0) {
		echo 1;
		}
	 else {
		echo -1;
	}
}
?>