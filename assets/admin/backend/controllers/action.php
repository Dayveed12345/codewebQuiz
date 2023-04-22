<?php
session_start();
include '../database/function.php';
$uname = $_SESSION['user'];
$oldpassword = $_POST['oldpass1'];
$newpassword = $_POST['newpass1'];
$update_pass = new Quiz();
$update = $update_pass->update_pass($newpassword, $oldpassword, $uname);
if($update){
echo 1;
}else{
	echo 0;
}

?>