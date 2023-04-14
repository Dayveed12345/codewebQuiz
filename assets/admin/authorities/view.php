<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Student-Dashboard{}</title>
	<link rel="stylesheet" href="../style/css/main.css">
	<link rel="stylesheet" href="">
</head>

<body>
	<!-- HEADER SECTION -->
	<main>
		<div class="flex-container">
			<div class="main-container">
				<div class="logo">Logo</div>
				<div class="nav">
					<ul class="nav-list">
						<a class="a b" href="view.html">
							<l1 style="color:white">Home</l1>
						</a>
						<a class="a b" href="upload.html">
							<l1>Create Exam</l1>
						</a>
						<l1 class="show">Leaderboard<div class="imgdiv"><img class=arrow src="arrow.png"></div>
							<div class="list-container">
								<ul class="hidden-list">
									<div class="anchor-list">
										<a class="a" href="leaderboard/html.html">
											<li>Html</li>
										</a>
									</div>
									<div class="anchor-list">
										<a class="a" href="leaderboard/css.html">
											<li>Css</li>
										</a>
									</div>
									<div class="anchor-list">
										<a class="a" href="leaderboard/javascript.html">
											<li>Javascript</li>
										</a>
									</div>
									<div class="anchor-list">
										<a class="a" href="leaderboard/php.html">
											<li>Php</li>
										</a>
									</div>
									<div class="anchor-list">
										<a class="a" href="leaderboard/MySql.html">
											<li>MySql</li>
										</a>
										<a class="a" href="leaderboard/MySql.html">
										<li style="color:white;">Score-sheet</li>
									</a>
									</div>
								</ul>
							</div>
						</l1>
					</ul>
				</div>
			</div>
			<div class="body-container" >
				<div class="container1" id="container">
					<h3 class="text-name">Welcome, David</h3>
					<form>
						<input type="text" placeholder="question-id" class="questions">
					</form>
					<?php
					// include '../backend/database/function.php';
					
					?>
				</div>
			</div>
		</div>
		<div class="aside-container">
			<div class="img-holder">
			</div>
			<div class="menu-container">
				<div class="menu-list">
					<a href="../settings/password.html">password</a>
				</div>
				<div class="menu-list">
					<a href="../settings/picture.html">picture</a>
				</div>
				<div class="menu-list">
					<a href="../settings/username.html">username</a>
				</div>
			</div>
		</div>
	</main>
</body>
<script src=../src/jquery/jquery-3.6.3.min.js></script>
<script src="../src/ajax/view.js"></script>

</html>