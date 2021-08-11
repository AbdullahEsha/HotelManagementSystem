function getAllInventory(){
    var xhttp = new XMLHttpRequest();
    xhttp.open('POST', '../../../phpValidations/admin/other/inventory_controller.php', true);
    xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xhttp.send('getAllInv='+"1");

    xhttp.onreadystatechange = function (){
        if(this.readyState == 4 && this.status == 200){
            if(this.responseText != ""){

                document.getElementById('inventryBody').innerHTML = this.responseText;
            }else{
                document.getElementById('inventryBody').innerHTML = "";
            }
        }	
    }
}

function filterRequest(){
    var filter = document.getElementById('filterData').value;
    if(filter == "#"){
        this.getAllInventory();
    }
    else{
        var xhttp = new XMLHttpRequest();
        xhttp.open('POST', '../../../phpValidations/admin/other/inventory_controller.php', true);
        xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
        xhttp.send('filter='+filter);
    
        xhttp.onreadystatechange = function (){
            if(this.readyState == 4 && this.status == 200){
                if(this.responseText != ""){
                    document.getElementById('inventryBody').innerHTML = this.responseText;
                }else{
                    document.getElementById('inventryBody').innerHTML = "";
                }
            }	
        }
    }
}

function add_item(){

}
