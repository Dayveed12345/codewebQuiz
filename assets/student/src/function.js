$(document).ready(function () {
	var a = 0;
	// $('#previous').click(function(){
	// 	a--;
	// 	var prev=$('#previous');
	// 	inc.val(a);
	// 	$.ajax({
	// 		type: "POST",
	// 		url: "../exam/exam.php",
	// 		data:{
	// 			inc:inc,
	// 			prev:prev
	// 		},
	// 		success: function (response) {
	// 			$('#html').html(response);
	// 		}
	// 	});
	// })
	var a = 0;
	// var nxt = $('#next').val();
	// $('#next').click(function () {
	// 	$.post({
	// 		url: "../exam/btnFunctions.php",
	// 		data: {
	// 			nxt: nxt
	// 		},
	// 		success: function (response) {
	// 			$('#html').html(response);
	// 		}
	// 	});
	// })
	$('.button').click(function () {
		var btn = $('.button').val();
		$.post({
			// method: "POST",
			url: "../exam/btnFunctions.php",
			data: {
				btn: btn,
			},
			success: function (response) {
				$('#html').html(response);
			},
		});
	})

})

