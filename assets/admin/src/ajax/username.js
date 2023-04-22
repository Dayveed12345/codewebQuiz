$(document).ready(function () {
	var sub = $('#submit');
	sub.click(function () {
		var username = $('#user').val();
		var pass = $('#pass').val();
		// if the input fields are empty
		if (username!== '' && password !== '') {
			$.ajax({
				url: "../backend/controllers/username.php",
				method: "POST",
				data: {
					username:username,
					pass:pass
				},
				success:function(response){
					if(response==1){
						alert("Username has been changed Successfully");
						window.location.href='../../../index.html';
						// Remember to use sweet alert;
					}else if(response==0){
						alert("Something is wrong with the username");
					}
				}
			})
		} else{
			alert("Input fields cannot be empty");
		}
	})
})