<?php
session_start();
include "../backend/database/function.php";
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
	<link rel="stylesheet" href="letter.css">
</head>

<body>
	<!-- HEADER SECTION -->
	<main>
		<div class="flex-container">
			<div class="main-container">
				<div class="logo">Logo</div>
				<div class="nav">
					<ul class="nav-list">
						<a class="a b" href="view.php">
							<l1 style="color:white">View Questions</l1>
						</a>
						<a class="a b" href="upload.php">
							<l1>Create Exam</l1>
						</a>
						<a class="a" href="score-sheet.php">
							<li >Score-sheet</li>
						</a>
					</ul>
				</div>
			</div>
			<div class="body-container">
				<h3 class="text-name">
					Welcome,
					<?php echo strtoupper($_SESSION['user']) ?>
				</h3>
				<form>
					<input type="text" placeholder="question-id" class="questions">
				</form>
				<div class="container1" id="container">
				</div>
			</div>
		</div>
		<div class="aside-container">
			<div class="img-holder">
				<?php echo strtoupper($_SESSION['user'][0]) ?>
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
<script src="../src/ajax/view.js"></script>

</html>