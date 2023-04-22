$(function () {
	$('#result').click(function (e) {
		e.preventDefault();
		var count1 = $('.checking:checked').length;
		var total1 = $('.input1').length;
		var remain1=total1-count1;
		var remain2;
		if(remain1==0){
			remain2=' do you want to submit?';
		}else{
			remain2=`You have ${remain1} more to go, do your want to submit?`;
		}
		if(confirm(remain2)===true){
			var count = $('.input1:checked').length;
			var Percentage = $('.input1').length;
			var total = (count / Percentage) * 100;
			var fixed = total.toFixed(2) + '%'
			$.ajax({
				type: "POST",
				url: "../backend/logout.php",
				data: { fixed: fixed },
				beforeSend:function(){
					$('#result').attr('disabled', true);
				},
				success: function (response) {
					if(response==200){
						$('#result').attr('disabled', true);
						alert("submitted, your result will be sent to you via your email anytime soon");
						window.location.href = '../exam/index.html'
					}else{
						alert("An error occured");
						$('#result').attr('disabled', false);
					}
					
				}, error: function () {
					alert("Check you internet connection");
				}
			});
			// alert(fixed);
		}else{
			alert("continue....the exam")
		}
	})
	document.addEventListener('visibilitychange', function () {
		if (document.visibilityState == 'hidden') {
			var count = $('.input1:checked').length;
			var Percentage = $('.input1').length;
			var total = (count / Percentage) * 100;
			var fixed = total.toFixed(2) + '%'
			window.location.href = '../exam/index.html'
			$.ajax({
				type: "POST",
				url: "../backend/logout.php",
				data: { fixed: fixed },
				success: function () {
					alert("submitted, your result will be sent to you via your email anytime soon");
				}, error: function () {
					alert("Check you internet connection");
				}
			});

		}
		else {
			// alert("continue");
		}

	})

});