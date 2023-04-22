<?php
include '../database/function.php';
if (isset($_POST['search'])) {
	$search = $_POST['search'];
	$select= new Quiz();
	$score=$select->score();
	echo "
	<tr>
	<th>First-Name</th>
	<th>Last-Name</th>
	<th>Course Id</th>
	<th>Course Name </th>
	<th>score</th>
	<th>Date of Exam</th>
</tr>";
	while($row=$score->fetch()){
		$firstname=$row['firstName'];
		$lastname=$row['lastName'];
		$course_id=$row['course_id'];
		$time_of_exam=$row['time_of_exam'];
		$student_course=$row['student_course'];
		$student_score=$row['student_score'];
		echo 
		"<tr>
		<td>$firstname</td>
		<td>$lastname</td>
		<td>$course_id</td>
		<td>$student_course</td>
		<td>$student_score</td>
		<td>$time_of_exam</td>
		<td></td>
	</tr>";
	}
}else{
	echo "
	<tr>
	<th>First-Name</th>
	<th>Last-Name</th>
	<th>Course Id</th>
	<th>Course Name </th>
	<th>score</th>
	<th>Date of Exam</th>
</tr>";
	$select= new Quiz();
	$score=$select->score();
	while($row=$score->fetch()){
		$firstname=$row['firstName'];
		$lastname=$row['lastName'];
		$course_id=$row['course_id'];
		$time_of_exam=$row['time_of_exam'];
		$student_course=$row['student_course'];
		$student_score=$row['student_score'];
		echo 
		"<tr>
		<td>$firstname</td>
		<td>$lastname</td>
		<td>$course_id</td>
		<td>$student_course</td>
		<td>$student_score</td>
		<td>$time_of_exam</td>
		<td></td>
	</tr>";
	}
}
	?>