<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Admin-Dashboard{}</title>
	<link rel="stylesheet" href="../style/css/main.css">
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
						<a class="a b " href="view.html">
							<l1>Home</l1>
						</a>
						<a class="a b " href="upload.html">
							<l1 style="color:white;">Create Exam</l1>
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
			<div class="body-container">
				<div class="container1">
					<h3 class="text-name float">Welcome, David</h3>
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
				<img src="../../sample.png" class=profile alt="student profile picture">
			</div>
			<div class="menu-container">
				<div class="menu-list">
					<a href="../settings/password.html">password</a>
				</div>
				<!-- <div class="menu-list">
					<a href="../settings/picture.html">picture</a>
				</div> -->
				<div class="menu-list">
					<a href="../settings/username.html">username</a>
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