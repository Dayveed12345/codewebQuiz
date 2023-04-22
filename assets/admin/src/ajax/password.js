$(document).ready(function () {
	var sub = $('#update');
	sub.click(function () {
		var oldpass1 = $('#oldpass').val();
		var newpass1 = $('#newpass').val();
		var cpass1 = $('#cpass').val();
		// if the input fields are empty
		if (oldpass1 !== '' && newpass1 !== '' && cpass1 !== '') {
			$.ajax({
				url: "../backend/controllers/action.php",
				method: "POST",
				data: {
					oldpass1:oldpass1,
					newpass1:newpass1,
				},
				success:function(response){
					if(response==1){
						alert("password has been changed Successfully");
						window.location.href='../../../index.html';
						// You will use sweet alert
					}else{
						alert("your password do not match the old password")
					}
				}
			})
		} else{
			alert("Input fields cannot be empty");
		}
	})
	$('#oldpass').keyup(function (e) {
		var oldpass = $('#oldpass').val();
		e.preventDefault();
		$.ajax({
			url: '../backend/controllers/password.php',
			method: 'POST',
			data: {
				oldpass: oldpass
			},
			success: function (response) {
				if (response == 1) {
					$('.para_success').show("fast");
					$('.para_err').hide("fast");
				} else if (response == -1) {
					$('.para_err').show("fast");
					$('.para_success').hide("fast");
				}
			}
		})
	})
	$('#cpass').keyup(function (e) {
		e.preventDefault()
		var newpass = $('#newpass').val();
		var cpass = $('#cpass').val();
		if (newpass === cpass) {
			$('.paragraph_success').show("fast");
			$('.paragraph_err').hide("fast");
			$('#update').attr('disabled', false);
		} else {
			$('.paragraph_err').show("fast")
			$('.paragraph_success').hide("fast")
			$('#update').attr('disabled', true);
		}
	})
})