<?php
include "../backend/controller/function.php";
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
									</div>
								</ul>
							</div>
						</l1>
					</ul>
				</div>
			</div>
			<div class="body-container">
				<div class="container1">
					<h3 class="text-name">Welcome, David</h3>
					<form>
						<input type="text" placeholder="question-id" class="questions">
					</form>
					<div class="question-container">
						<h4 class="text-question">1. Lorem ipsum dolor sit amet consectetur.</h4>
						<div class="answer-div">
							<p>Jeff Bezoz</p>
							<p>Bill Gates</p>
							<p>Jeff Bezoz</p>
							<p>Jeff Bezoz</p>
						</div>
						<button class="button">EDIT	</button>
					</div>
					<!-- <div class="question-container">
						<h4 class="text-question">1. Lorem ipsum dolor sit amet consectetur.</h4>
						<div class="answer-div">
							<p>Jeff Bezoz</p>
							<p>Bill Gates</p>
							<p>Jeff Bezoz</p>
							<p>Jeff Bezoz</p>
						</div>
						<button class="button">EDIT	</button>
					</div>
					<div class="question-container">
						<h4 class="text-question">1. Lorem ipsum dolor sit amet consectetur.</h4>
						<div class="answer-div">
							<p>Jeff Bezoz</p>
							<p>Bill Gates</p>
							<p>Jeff Bezoz</p>
							<p>Jeff Bezoz</p>
						</div>
						<button class="button">EDIT	</button>
					</div> -->
				</div>
			</div>
		</div>
		<div class="aside-container">
			<div class="img-holder">
				<img src="../../sample.png" class=profile alt="student profile picture">
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

</html>