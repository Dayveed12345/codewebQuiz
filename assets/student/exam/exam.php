<?php
include 'functions.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>quizApp</title>
	<link rel="stylesheet" href="../style/css/exam.css">
	<link rel="stylesheet" href="../style/responsive/exam.css">
</head>

<body method="POST" name="body">
	<main>
		<!---MAIN SECTION-->
		<div class="aside-container">
			<div class="half-container">
				<div class="image-container">
					<img src="../../../sample.png" alt="Student profile Picture ">
				</div>
				<div class="text-container">
					<h3>Jonathan David</h3>
					<h4>MySql</h4>
					<h4>Student ID:13573ghdshj</h4>
				</div>

			</div>
			<!-- GENERATE THE YEAR WITH JAVASCRIPT -->
			<div class="footer-sidebar" id="time">powered by codeweb</div>
		</div>
		<div class="flex-container">
			<h2>MySql</h2>
			<p id="timer"></p>
			<div><progress min="0" value="60" max="100"></progress></div>
			<div class="cover-container">
				<div class="button-container">
					<form action="" method="POST">
					<?php ajdhjashdfjhk
					$btnQuery = new Quiz();
					$fetch = $btnQuery->btn();
					while ($row = $fetch->fetch()) {
						$id = $row['id'];
						echo "<input type='submit' name=button id='submit' class='button' value='$id'>";
					}
					?>
					</form>
				</div>
				<div class="buttons">
					<button class="button-click red">Previous</button>
					<button class="button-click green">Next</button>
				</div>
				<?php
				include 'btnFunctions.php';
				?>
			</div>
		</div>
		</div>
	</main>
</body>
<!-- 	LINKING ALL SCRIIPT TOGETHER -->


</html>