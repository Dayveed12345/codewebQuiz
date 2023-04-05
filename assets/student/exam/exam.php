<!DOCTYPE html>
<html lang="en">
<?php
include 'functions.php';
?>

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>quizApp</title>
	<link rel="stylesheet" href="../style/css/exam.css">
	<link rel="stylesheet" href="../style/responsive/exam.css">
</head>

<body>
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
			<div><progress min="0" value="60" id="prog" max="100"></progress></div>
			<div class="cover-container">
				<div class="button-container">
					<?php
					$showQuery = new Quiz();
					$fetch = $showQuery->btn();
					while ($row = $fetch->fetch()) {
						$id = $row['id'];
						echo "<a href='#$id'><input class='button' value='$id' style=text-align:center></a>";
					}
					?>
				</div>
			</div>
			<!-- <div class="buttons">
					<input id="inc" name="increment" style="display:none;" type=text>
					<input class="button-click red" id="previous" name=prev type=submit value="Previous">
					<input class="button-click green" id="next" name=next type=submit value="Next">
				</div> -->

			<?php
			$showQuery = new Quiz();
			$fetch = $showQuery->query();
			while ($row = $fetch->fetch()) {
				$id = $row['id'];
				$questionid = $row['question_id'];
				$course = $row['course'];
				$question = $row['question'];
				$answer = $row['answer'];
				$wrong1 = $row['wrong1'];
				$wrong2 = $row['wrong2'];
				$wrong3 = $row['wrong3'];
				$answer = "<label class='label1'>
				<input id='opt' name='$id' class='input1 ' value='1' type='radio'>$answer</label>
				";
				$wrongArrayEl1 = "
							<label class='label2'>
							<input id='opt2' name='$id' class='input2' value='2' type='radio'>$wrong1</label>";
				$wrongArrayEl2 = "
							<label class='label3'><input id='opt3' name='$id' class='input3' value='2' type='radio'>$wrong2</label>";
				$wrongArrayEl3 = "
							<label class='label4'><input id='opt4' name='$id' class='input4' value='2' type='radio'>$wrong3</label>";
				$totalArray = [$answer, $wrongArrayEl1, $wrongArrayEl2, $wrongArrayEl3];
				shuffle($totalArray);


				// echo "<p class='top'><b>$id out of 100</b></p>;
				echo "<div> 
					<div class='options'>";
				echo "<p id='$id'>$id. $question</p>
							<div class='option-cover'>";
				foreach ($totalArray as $total) {
					echo $total;
				}

				echo "	</div>
						 </div>
						 </div>";
			}
			?>
		</div>
	</main>
</body>
<!-- 	LINKING ALL SCRIIPT TOGETHER -->
<script src=../src/jquery/jquery-3.6.3.min.js></script>
<script src=../src/timer.js></script>
<!-- <script src=../src/function.js></script> -->

</html>