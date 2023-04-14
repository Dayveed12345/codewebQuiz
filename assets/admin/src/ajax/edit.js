$(document).ready(function () {
	// var a=0;
	$("#updt").click(function (e) {
		e.preventDefault();
		var input1 = $('#id').val();
		var input2 = $('#course_id').val();
		var input3 = $('#question').val();
		var input4 = $('#answer').val();
		var input5 = $('#wrong1').val();
		var input6 = $('#wrong2').val();
		var input7 = $('#wrong3').val();
		if (input1 !== '' && input2 !== '' && input3 !== '' && input4 !== '' && input5 !== '' && input6 !== '' && input7 !== '') {
			$.ajax({
				type: "POST",
				url: "../../admin/backend/controllers/edit.php",
				data: {
					input1: input1,
					input2: input2,
					input3: input3,
					input4: input4,
					input5: input5,
					input6: input6,
					input7: input7
				},
				// dataType: "Json",
				beforeSend: function () {
					$("#updt").attr('disabled',true);
				},
				success: function (response) {
					if (response == 200) {
						$('#id').val("").attr('disabled',true);;
						$('#course_id').val("").attr('disabled',true);;
						$('#question').val("").attr('disabled',true);;
						$('#answer').val("").attr('disabled',true);;
						$('#wrong1').val("").attr('disabled',true);;
						$('#wrong2').val("").attr('disabled',true);;
						$('#wrong3').val("").attr('disabled',true);;
						$("#updt").val("updated").attr('disabled',true);;
						window.location.href='../authorities/view.php';
						// $('#success').show();	
					}else{
						// $("#updt").val("Failed");
						// $('#error').html();
						// $('#error').show();
						$("#updt").attr('disabled',false);
					}
				},
				error: function () {
					// $('#error').html();
					// $('#error').show();
					$("#updt").attr('disabled',false);
				}
			});
		} else {
			alert("Something is wrong")// You will use plugin ere dont forget ooooo David
		}
	})
});