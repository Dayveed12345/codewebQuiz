$(document).ready(function () {
	var submit = $('#submit');
	submit.click(function (e) {
		e.preventDefault();
		var input1 = $('#input1').val();
		var input2 = $('#input2').val();
		var input3 = $('#input3').val();
		var input4 = $('#input4').val();
		if (input1 != '' && input2 != '' && input3 != '' && input4 != '') {
			$.ajax({
				type: "POST",
				url: "../../student/backend/control/studentProcess.php",
				data: {
					input1: input1,
					input2: input2,
					input3: input3,
					input4: input4
				},

				dataType: "Json",
				beforeSend: function () {
					$('#submit').val('Processing...');
					$('#submit').attr('disabled', true)
					$('#input1').attr('disabled', true)
					$('#input2').attr('disabled', true)
					$('#input3').attr('disabled', true)
					$('#input4').attr('disabled', true)
				},
				success: function (response) {
					$('#input1').attr('disabled', true);
					$('#input2').attr('disabled', true);
					$('#input3').attr('disabled', true);
					$('#input4').attr('disabled', true);
					$('#input1').val("");
					$('#input2').val("");
					$('#input3').val("");
					$('#input4').val("");
					if (response === 0) {
						$('.pop-text').css({
							"display": "flex",
							"color": "red"
						});
						$('#div').html("The details is not correct check the Course-Identification-Number(CIN) or the Course-Name And make sure it mathches the one giving to you by the admin"
							+ "<button id='nav' class='ok'>OK</button>");
						$('#submit').val('Login');
						$('#submit').attr('disabled', false)
						var btn = $('#nav');
						btn.click(function () {
							$('#input1').attr('disabled', false);
							$('#input2').attr('disabled', false);
							$('#input3').attr('disabled', false);
							$('#input4').attr('disabled', false);
							$('.pop-text').css({
								"display": "none"
							})
						})
					}
					// ADDING THE IF ELSE STATEMENT HERE
					else if (response === 1) {
						$('.pop-text').css({
							"display": "flex",
							"color": "green"
						});
						$('#div').html("Your Details has been inserted wait a moment the next page is your exam so start immediately and avoid reloading the page as it will automatically submit  the exam, don't switch tabs it will also submit the exam pls adhere to these rules. GOOGLUCK!!!"
							+ "<button id='nav' class='ok'>OK</button>");
						$('#submit').val('Login Successful');
						var btn = $('#nav');
						btn.click(function () {
							window.location.href = "../../student/exam/exam.php";
						})
					}
				},
				error: function () {
					alert('an error occured');
				}
			});
		} else {
			$('#input1').attr('disabled', true);
			$('#input2').attr('disabled', true);
			$('#input3').attr('disabled', true);
			$('#input4').attr('disabled', true);
			$('.pop-text').css({
				"display": "flex",
				"color": "red"
			});
			$('#div').html("Input field cannot be empty"
				+ "<button id='ok' class='ok'>OK</button>");
		}
		var btn = $('#ok');
		btn.click(function () {
			$('.pop-text').css({
				"display": "none"
			});
			$('#input1').attr('disabled', false)
			$('#input2').attr('disabled', false)
			$('#input3').attr('disabled', false)
			$('#input4').attr('disabled', false)
		})
	})
});