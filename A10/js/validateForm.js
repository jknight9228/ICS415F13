
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
		error = 1;
	}
	if (email == "") 
	{
		document.getElementById("emailError").style.display = "inline";
		error = 1;
	}
	if (password == "") 
	{
		document.getElementById("passwordError").style.display = "inline";
		error = 1;
	}
	if (password != confirm)
	{
		document.getElementById("confirmError").style.display = "inline";
	}
	
	
	if(error == 1)
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