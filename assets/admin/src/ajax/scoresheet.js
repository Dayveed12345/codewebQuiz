$(document).ready(function () {
	setInterval(() => {
		$.ajax({
			type: "POST",
			url: "../../admin/backend/controllers/score-sheet.php",
			success: function (response) {
				$('#table').html(response);
			}
		});
	}, 1000);
});