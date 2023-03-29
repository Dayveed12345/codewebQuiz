function startTimer() {
	var tobj = document.getElementById("timer")
	var t = "00:30:00";
	var s = 00;
	var m=30
	var d = new Date();
	setInterval(function () {
	  s -= 1;
	  d.setMinutes(m);
	  d.setSeconds(s);
	  min = d.getMinutes();
	  sec = d.getSeconds();
	  if (sec < 10) sec = "0" + sec;
	  document.getElementById("timer").innerHTML = "00:"+min + ":" + sec;
	  if(document.getElementById("timer").innerHTML==0+":"+00 ){
		// alert("exam finished");
		//window.location.href="../../../index.html"
	  }
	}, 1000);
	tobj.innerHTML = t;
  }
  if (window.addEventListener) {              
	window.addEventListener("load", startTimer);
  } else if (window.attachEvent) {                 
	window.attachEvent("onload", startTimer);
  }
  //var el= document.getElementById('timer');
  (function(){
	var date= new Date();
	var year=date.getFullYear().toString();
	return document.getElementById('time').textContent+=" "+year;
	
  }())
 