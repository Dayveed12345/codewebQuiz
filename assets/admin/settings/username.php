<?php
session_start();
if(!$_SESSION['user']&&!$_SESSION['pass']){
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
	<link rel="stylesheet" href="../style/css/admin.css">
	<link rel="stylesheet" href="../style/responsive/admin.css">
	<link rel="stylesheet" href="../authorities/letter.css">
</head>

<body>
	<!-- HEADER SECTION -->
	<main>
		<div class="flex-container">
			<div class="main-container">
				<div class="logo">Logo</div>
				<div class="nav">
				<ul class="nav-list">
						<a class="a b " href="authorities/view.php">
							<l1>View Questions</l1>
						</a>
						<a class="a b " href="authorities/upload.php">
							<l1>Create Exam</l1>
						</a>
						<a class="a b" href="authorities/score-sheet.php">
							<l1>Score-sheet</li>
						</a>
					</ul>
				</div>
			</div>
			<div class="body-container">
				<h3 class="text-name">Welcome, <?php echo strtoupper($_SESSION['user'])?></h3>
				<form action="">
					<div class="container">
						<div class="input-container">
						<?php
						include "../backend/database/function.php";
						$pass=new Quiz();
						$uname=$_SESSION['user'];
						$pword=$_SESSION['pass'];
						$fetchAll=$pass->checking_name($pword,$uname);
						while($row= $fetchAll->fetch()){
							$firstname=$row['firstname'];
							$lastname=$row['lastname'];
							echo"
							<input type='text'  class='input' value='$firstname' id='' disabled>
							<input type='text' class='input' value='$lastname' id='' disabled>
							";
						}
						?>
						</div>
						<input type="text" name="" class="input" placeholder="New Username" id="user">
						<input type="text" name="" class="input" placeholder="password" id="pass">
						<input type="submit" id='submit' value="Update">
					</div>
				</form>
			</div>
		</div>
		<div class="aside-container">
			<div class="img-holder">
			<?php echo strtoupper($_SESSION['user'][0])?>
			</div>
			<div class="menu-container">
				<div class="menu-list">
					<a href="password.php" class="password">password</a>
				</div>
				<div class="menu-list">
					<a  style="color:white;"href="username.php">username</a>
				</div>
			</div>
		</div>
	</main>
</body>
<script src="../src/jquery/jquery-3.6.3.min.js"></script>
<script src="../src/ajax/username.js"></script>
</html>