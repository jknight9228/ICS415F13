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