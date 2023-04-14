$(document).ready(function () {
	$('#submit').click(function (e) {
		e.preventDefault();
		var courseId = $('#cId').val();
		var courseName = $('#cNm').val();
		var question = $('#question').val();
		var input1 = $('#input1').val();
		var input2 = $('#input2').val();
		var input3 = $('#input3').val();
		var input4 = $('#input4').val();
		if (question != '' && input1 != '' && input2 != '' && input3 != '' && input4 != '' && courseId != '' && courseName != '') {
			$.ajax({
				type: "POST",
				url: "../../admin/backend/controllers/uploadCtrl.php",
				data: {
					courseId:courseId,
					courseName: courseName,
					question: question,
					input1: input1,
					input2: input2,
					input3: input3,
					input4: input4
				},
				beforeSend: function () {
					$('#submit').val("Loading..");
					$('#submit').attr('disabled', true);

				},
				success: function (response) {
					$('#submit').attr('disabled', false);
					$('#submit').val("upload")
					$('#question').val("");
					$('#input1').val("");
					$('#input2').val("");
					$('#input3').val("");
					$('#input4').val("");
					if (response) {
						/*
						REMEMBER TO ADD HOW MANY ROWS WHERE AFFECTED PER ANY UPLOAD BY THE ADMIN*/
					} else {
						alert("updating not successful");
					}
				},
				error: function () {
						$('#submit').attr('disabled', false);
				}
			})
		} else {
			alert("an error occured")
		}
	})
})