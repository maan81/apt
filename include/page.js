// JavaScript Document

<!--

////////////////////////////////////////////////////////
//Create a boolean variable to check for a valid Internet Explorer instance.
var xmlhttp = false;
//Check if we are using IE.

//If not, then use the older active x object.
try {
	//If we are using Internet Explorer.
	xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
} catch (e) {
	//If we are using a non-IE browser, create a javascript instance of the object.
	try{
		xmlhttp = new XMLHttpRequest();
	} catch(e){
		//Else we must be using a non-IE browser.
		xmlhttp = false;
	}
}


function makerequest(serverPage, objID) {
	
//	alert(serverPage); 
	var obj = document.getElementById(objID);
	xmlhttp.open("GET", serverPage);
	xmlhttp.onreadystatechange = function() {
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
			obj.innerHTML = xmlhttp.responseText;
		}
		else if (xmlhttp.readyState == 1) {	
			obj.innerHTML = "<center><img src='images/loading.gif'></center>";
		}
	}
	xmlhttp.send(null);
}
////////////////////////////////////////////////////////


//-->