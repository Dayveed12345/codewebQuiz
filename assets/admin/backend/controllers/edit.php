<?php
include '../database/function.php';
$input1=$_POST['input1'];
$input2=$_POST['input2'];
$input3=$_POST['input3'];
$input4=$_POST['input4'];
$input5=$_POST['input5'];
$input6=$_POST['input6'];
$input7=$_POST['input7'];
$update=new Quiz();
$checking=$update->update($input3,$input4,$input5,$input6,$input7,$input1,$input2);
if($checking){
	echo 200;
}else{
	echo 404;
}
?>