<?php
// Create connection
$con=mysqli_connect("localhost","root", "", "ics415_a14");
$select=mysql_select_db("CommentData");

// Check connection
if (mysqli_connect_errno($con))
{
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}



$sql = "CREATE TABLE IF NOT EXISTS CommentData 
(
PID INT NOT NULL AUTO_INCREMENT,
PRIMARY KEY(PID),
Comment varchar(255)
)";

$insert = "INSERT INTO CommentData (Comment)
VALUES ('$_POST[comment]')";
  

if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }

if (!mysqli_query($con,$insert))
  {
  die('Error: ' . mysqli_error($con));
  }
  
echo "1 record added";
echo "<br/>";
echo "<html><a href=\"index.html\">Return to last page</a></html>";
echo "<br/>";
mysqli_close($con);

?> 