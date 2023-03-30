$(document).ready(function () {
	var sub = $('.button');
	sub.click(function (e) {
		e.preventDefault();
		$.ajax({
			type: "POST",
			url: "btnFunctions.php",
			data: {
				sub:sub
			},
			dataType: "JSON",
			success: function (response) {
				alert(response);
			},
			error: function () {
				alert("an error occured");
			}

		});
	})

})