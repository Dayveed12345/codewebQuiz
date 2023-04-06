var prog= document.getElementById('prog');
var ele;
var check=document.querySelectorAll('input');
function progress(){
ele = document.querySelectorAll('input:checked').length;
return document.getElementById('prog').value=ele;
}


// alert(45);