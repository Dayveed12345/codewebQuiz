$(document).ready(function () {
	var submit = $('#login');
	submit.click(function (e) {
		e.preventDefault();
		var input1 = $('#uname').val();
		var input2 = $('#pword').val();
		if (input1 != '' && input2 != '') {
			$.ajax({
				type: "POST",
				url: "assets/admin/backend/controllers/login.php",
				data: {
					input1: input1,
					input2: input2
				},
				dataType: "Json",
				beforeSend: function () {
					$('#login').val('Processing...');
					$('#login').attr('disabled', true)
					$('#uname').attr('disabled', true)
					$('#pword').attr('disabled', true)
				},
				success: function (response) {
					$('uname').attr('disabled', true);
					$('pword').attr('disabled', true);
					$('uname').val("");
					$('pword').val("");
					if (response === 0) {
						$('.pop-text').css({
							"display": "flex",
							"color": "red"
						});
						$('#div').html("Sorry, Check the Username and Password then Try again");
						$('#login').val('Login');
						$('#login').attr('disabled', false)
						var btn = $('.pop-text');
						btn.click(function () {
							$('#uname').attr('disabled', false);
							$('#pword').attr('disabled', false);
							$(this).css({
								"display": "none"
							})
						})
					} else if (response === 1) {
						$('.pop-text').css({
							"display": "flex",
							"color": "green"
						});
						$('#div').html("You have successfully logged In");
						$('#login').val('Login Successful');
						var btn = $('.pop-text');
						btn.click(function () {
							$(this).css({
								"display": "none"
							})
							window.location.href = "assets/admin/authorities/view.php";
						})
					}
				},
				error: function () {
					alert('an error occured');
				}
			});
		} else {
			$('#uname').attr('disabled', true);
			$('#pword').attr('disabled', true);
			$('.pop-text').css({
				"display": "flex",
				"color": "red"
			});
			$('#div').html("Input field cannot be empty");
			var btn = $('.pop-text');
			btn.click(function () {
				$('.pop-text').css({
					"display": "none"
				});
				$('#uname').attr('disabled', false)
				$('#pword').attr('disabled', false)
			})
		}

	})
});