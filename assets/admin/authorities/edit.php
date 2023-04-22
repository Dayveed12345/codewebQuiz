<?php
session_start();
if (!$_SESSION['user'] && !$_SESSION['pass']) {
	header('location:../../../index.html');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Student-Dashboard{}</title>
	<link rel="stylesheet" href="../style/css/main.css">
	<link rel="stylesheet" href="../source/css/responsive/student-dashboard.css">
</head>

<body>
	<!-- HEADER SECTION -->
	<main>
		<div class="flex-container">
			<div class="main-container">
				<div class="logo">Logo</div>
				<div class="nav">
					<ul class="nav-list">
						<a class="a b " href="view.php">
							<l1>View Questions</l1>
						</a>
						<a class="a b " href="upload.php">
							<l1>Create Exam</l1>
						</a>
						<a class="a b" href="score-sheet.php">
							<l1>Score-sheet</li>
						</a>
					</ul>
				</div>
			</div>
			<div class="body-container">
				<div class="container1">
					<h3 class="text-name">Welcome, David</h3>
				</div>
				<form id="container">
					<?php
					session_start();
					include '../backend/database/function.php';
					if (isset($_POST['btn'])) {
						$object = new Quiz();
						$button = $_POST['btn'];
						$fetch = $object->edit($button);
						while ($row = $fetch->fetch()) {
							$id = $row['id'];
							$course_id = $row['course_id'];
							$course = $row['course'];
							$question = $row['question'];
							$answer = $row['answer'];
							$wrong1 = $row['wrong1'];
							$wrong2 = $row['wrong2'];
							$wrong3 = $row['wrong3'];
							echo " 
					<div class='question'>
						<input type='text' name='' id='course_id' value='$course_id' placeholder='Not available' disabled>
						<input type='text' name='' id='id' value='$id'placeholder='Not available' disabled>
					</div>
						<input type='text' name='' id='question' placeholder='$question'>
						<input type='text' name='' id='answer' placeholder='$answer'>
						<input type='text' name='' id='wrong1' placeholder='$wrong1'>
						<input type='text' name='' id='wrong2' placeholder='$wrong2'>
						<input type='text' name='' id='wrong3' placeholder='$wrong3'>
						<input type='submit' id='updt' class=submit value='Update'>";
						}
					} else {
						$object = new Quiz();
						$fetch = $object->edit(1);
						while ($row = $fetch->fetch()) {
							$id = $row['id'];
							$course_id = $row['course_id'];
							$course = $row['course'];
							$question = $row['question'];
							$answer = $row['answer'];
							$wrong1 = $row['wrong1'];
							$wrong2 = $row['wrong2'];
							$wrong3 = $row['wrong3'];
							echo " 
					<div class='question'>
						<input type='text' name='' id='course_id' value='$course_id' disabled>
						<input type='text' name='' id='id' value='$id' disabled>
					</div>
						<input type='text' name='' id='question' placeholder='$question'>
						<input type='text' name='' id='answer' placeholder='$answer'>
						<input type='text' name='' id='wrong1' placeholder='$wrong1'>
						<input type='text' name='' id='wrong2' placeholder='$wrong2'>
						<input type='text' name='' id='wrong3' placeholder='$wrong3'>
						<input type='submit' id='updt' class=submit value='Update'>";
						}
					}
					?>
				</form>
			</div>

		</div>
		<div class="aside-container">
			<div class="img-holder">
				<img src="../../sample.png" class=profile alt="student profile picture">
			</div>
			<div class="menu-container">
				<div class="menu-list">
					<a href="../settings/password.php">password</a>
				</div>
				<div class="menu-list">
					<a href="../settings/username.php">username</a>
				</div>
			</div>
		</div>
	</main>
</body>
<script src=../src/jquery/jquery-3.6.3.min.js></script>
<script src="../src/ajax/edit.js"></script>

</html>