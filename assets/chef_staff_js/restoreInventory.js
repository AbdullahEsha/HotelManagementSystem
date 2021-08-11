function val()
{
	var name1 = false;
	var Name = document.getElementById('product').value;

	if(Name=="")
	{
		document.getElementById('namemsg').innerHTML="cannot be empty";
		name1 = false;
	}
	else
	{
		document.getElementById('namemsg').innerHTML="";
		name1 = true;
	}

	var amount1 = false;
	var amount = document.getElementById('amount').value;

	if(amount=="")
	{
		document.getElementById('amountmsg').innerHTML="cannot be empty";
		amount1 = false;
	}
	else
	{
		document.getElementById('amountmsg').innerHTML="";
		amount1 = true;
	}

	var price1 = false;
	var price = document.getElementById('price').value;

	if(price=="")
	{
		document.getElementById('pricemsg').innerHTML="cannot be empty";
		price1 = false;
	}
	else
	{
		document.getElementById('pricemsg').innerHTML="";
		price1 = true;
	}

	var picture1 = false;
	var picture = document.getElementById('picture').value;

	if(picture=="")
	{
		document.getElementById('picmsg').innerHTML="cannot be empty";
		picture1 = false;
	}
	else
	{
		document.getElementById('picmsg').innerHTML="";
		picture1 = true;
	}

	if(name1 && amount1 && price1 && picture1)
	{
		return true;
	}
	else
	{
		return false;
	}
}

function removerName()
{
	var name =document.getElementById('product').value;
  	if(name!="")
  	{
    	document.getElementById('namemsg').innerHTML="";
  	}
}

function removerAmount()
{
	var amount =document.getElementById('amount').value;
  	if(amount!="")
  	{
    	document.getElementById('amountmsg').innerHTML="";
  	}
}

function removerPrice()
{
	var price =document.getElementById('price').value;
  	if(price!="")
  	{
    	document.getElementById('pricemsg').innerHTML="";
  	}
}

function removerPicture()
{
	
    document.getElementById('picmsg').innerHTML="";
  	
}

function imgShow(){
	var file = document.getElementById('picture');
    document.getElementById('item_image').src = window.URL.createObjectURL(file.files[0]);
}