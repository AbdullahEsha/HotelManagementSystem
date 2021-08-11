function val()
{
	var name1 = false;
	var Name = document.getElementById('name').value;

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

	var ingredient1 = false;
	var ingredient = document.getElementById('ing').value;

	if(ingredient=="")
	{
		document.getElementById('ingmsg').innerHTML="cannot be empty";
		ingredient1 = false;
	}
	else
	{
		document.getElementById('ingmsg').innerHTML="";
		ingredient1 = true;
	}

	var pross1 = false;
	var pross = document.getElementById('pross').value;

	if(pross=="")
	{
		document.getElementById('prossmsg').innerHTML="cannot be empty";
		pross1 = false;
	}
	else
	{
		document.getElementById('prossmsg').innerHTML="";
		pross1 = true;
	}

	var picture1 = false;
	var picture = document.getElementById('pic').value;

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


	if(name1 && ingredient1 && pross1 && picture1)
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
	var name =document.getElementById('name').value;
  	if(name!="")
  	{
    	document.getElementById('namemsg').innerHTML="";
  	}
}

function removerIng()
{
	var ing =document.getElementById('ing').value;
  	if(ing!="")
  	{
    	document.getElementById('ingmsg').innerHTML="";
  	}
}

function removerPross()
{
	var pross =document.getElementById('pross').value;
  	if(pross!="")
  	{
    	document.getElementById('prossmsg').innerHTML="";
  	}
}

function removerPicture()
{
	
    document.getElementById('picmsg').innerHTML="";
  	
}

function imgShow(){
	var file = document.getElementById('pic');
    document.getElementById('item_image_upload').src = window.URL.createObjectURL(file.files[0]);
}