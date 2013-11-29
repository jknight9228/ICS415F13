function validateLogin(){
	//Check for username and password
	 var name = document.forms["login"]["uname"];
	 var pwrd = document.forms["login"]["pword"];
	 if ((name.value == null) || (name.value == "")){
		 alert("Please enter a Username");
		 return false;
	 }else if ((pwrd.value == null) || (pwrd.value == "")){
		 alert("Please enter your Password");
		 return false;
	 }
	 
	 return true;
	
}

function changeHeader(link){
	var header = document.getElementById("content-title");
	if(link == "1"){
		header.innerHTML = "Main";
	}else if(link == "2"){
		header.innerHTML = "Xbox Live Gamertag Lookup";
	}else if(link == "3"){
		header.innerHTML = "About this site";
	}
}

function adjustIframe() {
    var iFrameID = document.getElementById('contentFrame');
    if(iFrameID) {
        iFrameID.height = "";
        iFrameID.height = iFrameID.contentWindow.document.body.scrollHeight + "px";
    }   
}