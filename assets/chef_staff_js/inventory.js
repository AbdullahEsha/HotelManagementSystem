function inventoryData(){
	var xhttp = new XMLHttpRequest();
    xhttp.open('POST', '../php/inventorycheck.php', true);
    xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xhttp.send('get='+true);

    xhttp.onreadystatechange = function (){
        if(this.readyState == 4 && this.status == 200){
            if(this.responseText != ""){
                document.getElementById('inventory').innerHTML = this.responseText;
            }else{
                document.getElementById('inventory').innerHTML = "";
            }
        }	
    }
}

function searchInventory(){
    var name = document.getElementById('name').value;
    var xhttp = new XMLHttpRequest();
    xhttp.open('POST', '../php/inventorySearch.php', true);
    xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xhttp.send('name='+name);

    xhttp.onreadystatechange = function (){
        if(this.readyState == 4 && this.status == 200){
            if(this.responseText != ""){
                document.getElementById('search').innerHTML = this.responseText;
                document.getElementById('search').style.display = "block";
            }else{
                document.getElementById('search').innerHTML = "";
            }
        }   
    }
}