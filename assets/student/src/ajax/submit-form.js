$(document).ready(function () {
	var submit=$('#submit');
	var input1=$('#input1');
	var input2=$('#input2');
	var input3=$('#input3');
	submit.click(function(){
		if(input1||input2||input3!=''){
			$.ajax({
				type: "POST",
				url: "",
				data: "",
				// dataType: "dataType",
				success: function (response) {
					
				}
			});
		}else{

		}
	})
});