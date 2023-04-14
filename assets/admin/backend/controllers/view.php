<?php
include '../database/function.php';
if (isset($_POST['search'])) {
	$search = $_POST['search'];
	$object = new Quiz();
	$defaultView = $object->view($search);
	while ($row = $defaultView->fetch()) {
		$id = $row['id'];
		$course_id = $row['course_id'];
		$course = $row['course'];
		$question = $row['question'];
		$answer = $row['answer'];
		$wrong1 = $row['wrong1'];
		$wrong2 = $row['wrong2'];
		$wrong3 = $row['wrong3'];
		echo "<div class='question-container'>
<h4 class='text-question'>$id. $question.</h4>
<div class='answer-div'>
<p>$answer</p>
<p>$wrong1</p>
<p>$wrong2</p>
<p>$wrong3</p>
</div>
<button class='button'>$id</button>
</div>";
	}
} else {
	$object = new Quiz();
	$defaultView = $object->defaultView();
	while ($row = $defaultView->fetch()) {
		$id= $row['id'];
		$course_id = $row['course_id'];
		$course = $row['course'];
		$question = $row['question'];
		$answer = $row['answer'];
		$wrong1 = $row['wrong1'];
		$wrong2 = $row['wrong2'];
		$wrong3 = $row['wrong3'];
		
		echo "<div class='question-container'>
<h4 class='text-question'>$id. $question.</h4>
<div class='answer-div'>
<p>$answer</p>
<p>$wrong1</p>
<p>$wrong2</p>
<p>$wrong3</p>
</div>
<form action='edit.php' method='POST'>
<input  type='submit' name='btn'value='$id' class='button12345'>
</form>
</div>";
	}
}
?>