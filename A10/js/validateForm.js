
function validateForm() 
{
	name = document.getElementById("name").value;
	email = document.getElementById("email").value;
	password = document.getElementById("password").value;
	confirm = document.getElementById("confirm").value;
	
	error = 0;
	hideAllErrors();
	
	if (name == "") 
	{
		document.getElementById("nameError").style.display = "inline";
		document.getElementById("name").setAttribute("style", "background-color: red");
		error = 1;
	}
	else  
	{
	    document.getElementById("name").setAttribute("style", "background-color: null");
	}
	
	
	if (email == "") 
	{
		document.getElementById("emailError").style.display = "inline";
		document.getElementById("email").setAttribute("style", "background-color: red");
		error = 1;
	}
		else  // Make sure color returns to normal, or stays normal
	{
	    document.getElementById("email").setAttribute("style", "background-color: null");
	}
	
	
	if (password == "") 
	{
		document.getElementById("passwordError").style.display = "inline";
		document.getElementById("password").setAttribute("style", "background-color: red");
		error = 1;
	}
		else  // Make sure color returns to normal, or stays normal
	{
	    document.getElementById("password").setAttribute("style", "background-color: null");
	}
	
	
	if (password != confirm)
	{
		document.getElementById("confirmError").style.display = "inline";
		document.getElementById("confirm").setAttribute("style", "background-color: red");
		error = 1;
	}
	else  // Make sure color returns to normal, or stays normal
	{
	    document.getElementById("confirm").setAttribute("style", "background-color: null");
	}
	
	
	if (error == 1)
	{
		return false;
	}
		return true;
}

function hideAllErrors() 
{
	document.getElementById("nameError").style.display = "none";
	document.getElementById("emailError").style.display = "none";
	document.getElementById("passwordError").style.display = "none";
	document.getElementById("confirmError").style.display = "none";
}