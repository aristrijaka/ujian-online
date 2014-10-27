
var xmlHttp; 
var peringatanSibuk = "<div align=\"center\"><img src=\"images/ajax-loader.gif\" /><br/><font id=\"loading\">Sedang proses...</font></div>"; 
var peringatan_tidak_mendukung = 'Browser anda tidak mendukung AJAX!';

function pilih(id, isi) {
		var element = document.getElementById(id);
		element.value =  + isi;
	}


function GetXmlHttpObject()
	{
		var xmlHttp = null;
		try
			{xmlHttp = new XMLHttpRequest();}
		catch(e)
			{
				try
					{
						xmlHttp = new ActiveXObject("Msxml2.XMLHTTP.6.0");
					}
				catch(e)
					{}
				try
					{ 
						xmlHttp = new ActiveXObject("Msxml2.XMLHTTP.3.0"); 
					}
				catch(e)
					{}
				try
					{ 
						xmlHttp = new ActiveXObject("Msxml2.XMLHTTP"); 
					}
				catch(e)
					{}
				try
					{ 
						xmlHttp = new ActiveXObject("Microsoft.XMLHTTP"); 
					}
				catch(e)
					{}
			}
		return xmlHttp;
	}


function geting_var(url,variabel,target)
	{
		xmlHttp = GetXmlHttpObject();
		if(xmlHttp == null)
			{
				alert(peringatan_tidak_mendukung);
				return;
			}
		url = url + ".php?" + variabel + "&kue=" + Math.random();
		xmlHttp.onreadystatechange = function()
			{
				if(xmlHttp.readyState == 4)
					{
						document.getElementById(target).innerHTML = xmlHttp.responseText;
					}
				else if(xmlHttp.readyState == 1)
					{ 
						document.getElementById(target).innerHTML = peringatanSibuk; 
					}
			} 
		xmlHttp.open('GET',url,true);
		xmlHttp.send(null);
	}



function posting_var(url,variabel,target)
	{
		xmlHttp = GetXmlHttpObject();
		if(xmlHttp == null)
			{
				alert(peringatan_tidak_mendukung);
				return;
			}
		var posting = 'k=' + variabel;url = url + '.php';
		xmlHttp.open('POST',url,true);
		xmlHttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		xmlHttp.setRequestHeader("Content-length", posting.length);
		xmlHttp.setRequestHeader("Connection", "close");
		xmlHttp.onreadystatechange = function()
			{
				if(xmlHttp.readyState == 4)
					{
						document.getElementById(target).innerHTML = xmlHttp.responseText;
					}
				else if(xmlHttp.readyState == 1)
					{
						document.getElementById(target).innerHTML = peringatanSibuk;
					}
			}
		xmlHttp.send(posting);
	}


function toogle_cek(target,str,peringatan_1,peringatan_2)
	{
		xmlHttp = GetXmlHttpObject();
		if(xmlHttp == null)
			{
				alert(peringatan_tidak_mendukung);	
				return;
			}
		var url = target + ".php?" + str + "&kue=" + Math.random();
		xmlHttp.onreadystatechange = function()
			{
				if(xmlHttp.readyState == 4)
					{
						if(xmlHttp.responseText == '1')
							{
								alert(peringatan_1);
							}
						else
							{
								alert(peringatan_2);
							}
					}
			}
		xmlHttp.open('GET',url,true);
		xmlHttp.send(null);

	}

