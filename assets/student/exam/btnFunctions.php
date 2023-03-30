<?php
// if(isset($_POST['body'])){
// $showQuery = new Quiz();
// $num=1;
// // $btn= $_POST['button'];
// $fetch = $showQuery->query($num);
// while ($row = $fetch->fetch()) {
// $id = $row['id'];
// $questionid = $row['question_id'];
// $course = $row['course'];
// $question = $row['question'];
// $answer = $row['answer'];
// $wrong1 = $row['wrong1'];
// $wrong2 = $row['wrong2'];
// $wrong3 = $row['wrong3'];
// $answer = "<input id='opt' name='$id' class='input1' value='1' type='radio'>
// 			<label class='label1' for='opt'>$answer</label>";
// $wrongArrayEl1 = "<input id='opt2' name='$id' class='input2' value='2' type='radio'>
// 			<label class='label2' for='opt2'>$wrong1</label>";
// $wrongArrayEl2 = "<input id='opt3' name='$id' class='input3' value='2' type='radio'>
// 			<label class='label3' for='opt3'>$wrong2</label>";
// $wrongArrayEl3 = "<input id='opt4' name='$id' class='input4' value='2' type='radio'>
// 			<label class='label4' for='opt4'>$wrong3</label>";
// $totalArray = [$answer, $wrongArrayEl1, $wrongArrayEl2, $wrongArrayEl3];
// shuffle($totalArray);


// // echo "<p class='top'><b>$id out of 100</b></p>;
// echo "<div>
// 		<div class='options'>
// 	<p>$id. $question</p>
// 	<div class='option-cover'>";
// foreach ($totalArray as $total) {
// 	echo $total;
// }

// echo "</div>
// </div>";
// }
// }
if(isset($_POST['button'])){
$showQuery = new Quiz();
$btn= $_POST['button'];
$fetch = $showQuery->query($btn);
while ($row = $fetch->fetch()) {
$id = $row['id'];
$questionid = $row['question_id'];
$course = $row['course'];
$question = $row['question'];
$answer = $row['answer'];
$wrong1 = $row['wrong1'];
$wrong2 = $row['wrong2'];
$wrong3 = $row['wrong3'];
$answer = "<input id='opt' name='$id' class='input1' value='1' type='radio'>
			<label class='label1' for='opt'>$answer</label>";
$wrongArrayEl1 = "<input id='opt2' name='$id' class='input2' value='2' type='radio'>
			<label class='label2' for='opt2'>$wrong1</label>";
$wrongArrayEl2 = "<input id='opt3' name='$id' class='input3' value='2' type='radio'>
			<label class='label3' for='opt3'>$wrong2</label>";
$wrongArrayEl3 = "<input id='opt4' name='$id' class='input4' value='2' type='radio'>
			<label class='label4' for='opt4'>$wrong3</label>";
$totalArray = [$answer, $wrongArrayEl1, $wrongArrayEl2, $wrongArrayEl3];
shuffle($totalArray);


// echo "<p class='top'><b>$id out of 100</b></p>;
echo "<div>
		<div class='options'>
	<p>$id. $question</p>
	<div class='option-cover'>";
foreach ($totalArray as $total) {
	echo $total;
}

echo "</div>
</div>";
}

}
?>