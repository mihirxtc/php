function st()
{
	var x = new XMLHttpRequest;
	var st = document.getElementById("str").value;
	x.open("GET","1.php?q=" + st, true);
	x.onreadystatechange = function()
	{
		if(x.readyState == 4 && x.status == 200)
		{
			document.getElementById("d1").innerHTML = x.responseText;
		}
	}
	x.send();
}