<?php
// Create connection
$con=mysqli_connect("localhost","root", "", "ics415_a14");
$select=mysql_select_db("CommentData");

// Check connection
if (mysqli_connect_errno($con))
{
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$username = mysqli_escape_string($con, $_POST['username']);
$comment = mysqli_escape_string($con, $_POST['comment']);


$sql =
"CREATE TABLE IF NOT EXISTS Comments
(
PID INT NOT NULL AUTO_INCREMENT,
username varchar(50) not null,
comment varchar(255),
primary key(pid)
)";

if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }


if ($result = mysqli_query($con, "SELECT * FROM Comments A WHERE A.username = '$username'"))
{
	echo "Successfully inserted into database";
	$insert2 = "INSERT INTO Comments (username, comment) VALUES ('$username', '$comment')";
	
	if (!mysqli_query($con,$insert2))
 	{
  		die('Error: ' . mysqli_error($con));
  	}
	
}




echo "1 record added";
setcookie("username",$username, time()+3600*24);
echo "<br/>";
echo "<html><a href=\"index.html\">Return to last page</a></html>";
echo "<br/>";
mysqli_close($con);

?> 
