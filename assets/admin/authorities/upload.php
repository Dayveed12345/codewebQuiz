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
	<title>Admin-Dashboard{}</title>
	<link rel="stylesheet" href="../style/css/main.css">
	<link rel="stylesheet" href="letter.css">
	<!-- <link rel="stylesheet" href="../source/css/responsive/student-dashboard.css"> -->
</head>

<body>
	<!-- HEADER SECTION -->
	<main>
		<div class="flex-container">
			<div class="main-container size">
				<div class="logo">Logo</div>
				<div class="nav">
					<ul class="nav-list">
						<a class="a b " href="view.php">
							<l1>View Questions</l1>
						</a>
						<a class="a b " href="upload.php">
							<l1 style="color:white;">Create Exam</l1>
						</a>
						<a class="a b" href="score-sheet.php">
							<l1>Score-sheet</li>
						</a>
					</ul>
			</div>
		</div>
		<div class="body-container">
			<div class="container1">
				<h3 class="text-name float">Welcome,
					<?php echo strtoupper($_SESSION['user']) ?>
				</h3>
			</div>
			<form>
				<div class="question">
					<input type="text" name="" placeholder="course-id" id="cId">
					<input type="text" name="" placeholder="course-name" id="cNm">

				</div>
				<input type="text" name="" placeholder="question" id="question">
				<input type="text" name="" placeholder="Answer" id="input1">
				<input type="text" name="" placeholder="2nd Option" id="input2">
				<input type="text" name="" placeholder="3rd Option" id="input3">
				<input type="text" name="" placeholder="4th Option" id="input4">
			</form>
			<input class="submit mg-l" type="submit" id=submit value="update">
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
				<!-- <div class="menu-list">
					<a href="../settings/picture.html">picture</a>
				</div> -->
				<div class="menu-list">
					<a href="../settings/username.php">username</a>
				</div>
			</div>
		</div>
		</div>
	</main>
	<!-- <div class="pop-text">
		<div id="div">
			<div class="question">
				<input type="text" name="" class="modal" value placeholder="course-id" id="cId">
				<input type="text" name="" class=modal value placeholder="course-name" id="cNm">

			</div>
			<button id='modal' class='ok'>OK</button>
		</div>
	</div> -->
</body>
<script src=../src/jquery/jquery-3.6.3.min.js></script>
<script src="../src/ajax/upload.js"></script>

</html>