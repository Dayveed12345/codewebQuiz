$(document).ready(function () {
	setInterval(() => {
		$.ajax({
			type: "POST",
			url: "../../admin/backend/controllers/view.php",
			// data: "d",
			// dataType: "dataType",
			success: function (response) {
				$('#container').html(response);
			}
		});
	}, 1000);
});