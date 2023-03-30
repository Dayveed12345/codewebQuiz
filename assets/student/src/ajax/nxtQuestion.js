$(document).ready(function () {
	$('.button').click(function () {
		var sub = $('.button');
		$.ajax({
			url: "btnFunctions.php",
			method: "POST",
			data: {
				sub:sub
			},
			success: function (data) {
				alert(data);
			},
			error: function () {
				alert("an error occured");
			}

		});
	})

})