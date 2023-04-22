<?php
session_start();
use PHPMailer\PHPMailer\PHPMailer;

require "phpmailer/src/Exception.php";
require "phpmailer/src/PHPMailer.php";
require "phpmailer/src/SMTP.php";
include '../../admin/backend/database/function.php';
if (isset($_POST['fixed'])) {
	$mess = $_POST['fixed'];
	$firstname = $_SESSION['fn'];
	$lastname = $_SESSION['ln'];
	$courseId=$_SESSION['cID'];
	$courseName=$_SESSION['cn'];
	$date = date('D-M-Y');
	if(empty($firstname)&&empty($lastname)&&empty($courseId)&&empty($courseName)){
		echo 1;
	}else{
	$insert = new Quiz();
	$result = $insert->insert_score($mess,$courseName,$date,$courseId,$firstname,$lastname);
	$upper=strtoupper($courseName);
	if($result){
		if($mess>=50){
			$remark=" Congratulations to you  $firstname $lastname, your hard work has finally paid off kudos to you😍😍 in $upper course";
		}else{
			$remark="Ohh!! 😥😥😥 $firstname $lastname, you need to put in more effort next time";
		}
		$message = "
	<div style='height:40%;
	width:35%;
	font-size:15px;
	word-spacing:1.5;
	letter-spacing:1.3'>
	<h4 style='margin-bottom:10px;'>$remark</h4>
	<h2 style=margin-top:20px;><span style='color:green;font-weight:bolder;'>you scored $mess</span></h2>
	</div>
	";
		// $mail = new PHPMailer(true);
		// $mail->isSMTP();
		// $mail->Host = 'smtp.gmail.com';
		// $mail->SMTPAuth = true;
		// $mail->Username = 'dayveed1814@gmail.com';
		// $mail->Password = 'funuyohoolcabkvk';
		// $mail->SMTPSecure = 'ssl';
		// $mail->Port = 465;
		// $mail->setFrom('dayveed1814@gmail.com');
		// $mail->addAddress($_SESSION['email']);
		// $mail->isHTML(true);
		// $mail->Subject = 'CodeWeb Student Result';
		// $mail->Body = $message;
		// $mail->send();
	echo 200;
	session_unset();
	session_destroy();
	die();
	}
	else{
		echo "It wasnt able to send  your score through Email and error occured";
	}
}
	
}else{
	echo "something is wrong with the server you do not have a score contact the Admins";
}

?>