<?php
session_start();
use PHPMailer\PHPMailer\PHPMailer;
require "phpmailer/src/Exception.php";
require "phpmailer/src/PHPMailer.php";
require "phpmailer/src/SMTP.php";

if (isset($_POST['fixed'])) {
	$mess=$_POST['fixed'];
	$firstname=$_SESSION['fn'];
	$lastname=$_SESSION['ln'];
	$message="
	<div style='height:35%;
	width:35%;
	font-size:15px;
	color:black;'>
	<h4> Congratulations to you  $firstname $lastname, as you receive the outcome of your exam do have a nice day</h4>
	<h2 style=margin-top:20px;><span style='color:green;font-weight:bolder;'>$mess</span></h2>
	</div>
	";
	$mail = new PHPMailer(true);
	$mail->isSMTP();
	$mail->Host='smtp.gmail.com';
	$mail->SMTPAuth=true;
	$mail->Username='dayveed1814@gmail.com';
	$mail->Password='funuyohoolcabkvk';
	$mail->SMTPSecure='ssl';
	$mail->Port = 465;
	$mail->setFrom('dayveed1814@gmail.com');
	$mail->addAddress($_SESSION['email']);
	$mail->isHTML(true);
	$mail->Subject = 'CodeWeb Student Result';
	$mail->Body = $message;
	$mail->send();
	session_start();
	session_unset();
	session_destroy();

}

?>