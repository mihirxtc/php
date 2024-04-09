function cl()
{
	var x = new XMLHttpRequest();
	var formdata = new FormData(document.getElementById("formdata"));
	x.open("POST","2.php",  true);
	x.onreadystatechange = function()
	{
		if(x.readyState == 4 && x.status == 200)
		{
			document.getElementById("d1").innerHTML = x.responseText;
		}
	}
	x.send(formdata);
}