function scheduleData(){
	var xhttp = new XMLHttpRequest();
    xhttp.open('POST', '../php/schedulecheck.php', true);
    xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xhttp.send('get='+true);

    xhttp.onreadystatechange = function (){
        if(this.readyState == 4 && this.status == 200){
            if(this.responseText != ""){
                document.getElementById('schedule').innerHTML = this.responseText;
            }else{
                document.getElementById('schedule').innerHTML = "";
            }
        }	
    }
}