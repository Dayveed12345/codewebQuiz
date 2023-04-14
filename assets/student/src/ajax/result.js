$(function () {
	$('#result').click(function(e){
		e.preventDefault();
		if(confirm("Do you Really wanna submit")===true){
			var count=$('.input1:checked').length;
					var Percentage=$('.input1').length;
					var total=(count/Percentage)*100;
					var fixed=total.toFixed(2)+'%'
					window.location.href='../exam/index.html'
					$.ajax({
						type: "POST",
						url: "../backend/logout.php",
						data:{fixed:fixed},
						success: function (response) {
							console.log("The result has been sent to your email")
						}
					});
					// alert(fixed);
		}
		else{
			// alert("continue");
		}
	})
		document.addEventListener('visibilitychange',function(){
			if(document.visibilityState=='hidden'){
					var count=$('.input1:checked').length;
					var Percentage=$('.input1').length;
					var total=(count/Percentage)*100;
					var fixed=total.toFixed(2)+'%'
					window.location.href='../exam/index.html'
					$.ajax({
						type: "POST",
						url: "../backend/logout.php",
						data:{fixed:fixed},
						success: function () {
							// console.log()
						}
					});
					
			}
			else{
				// alert("continue");
			}
			
		})
	
});