/* function validateForm()
* 
* This function is used to verify that username/password
* fields are not empty. And also used to confirm that the
* two password input boxes match.
*
* If any of the conditions are not met, the html page will
* spit out errors in red.
*
* author: James Knight
* ICS 415
*/


/* function getClasses(elem)
* 
* This function will return any classes that are in the given element.
*
* author: James Knight
* ICS 415
*/

function getClasses(elem)
{
	var elemHandle = document.getElementById(elem);
	var classStr = elemHandle.className;
	var classArray = classStr.split(" ");
	return classArray;
}

/* function addClass(elem, className)
* 
* This function will add classes to a given element.
*
* author: James Knight
* ICS 415
*/

function addClass(elem, className)
{
	var elemHandle = document.getElementById(elem);
	var classStr = elemHandle.className;
	var Array = classStr.split(" ");
	var i;
	elemHandle.className += " " + className;

}