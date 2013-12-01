<?php
// Create connection
$con=mysqli_connect("localhost","root", "", "login");
$select=mysql_select_db("search");

// Check connection
if (mysqli_connect_errno($con))
{
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT *
							FROM Search
							WHERE gtag IS NOT NULL
							");

echo "<table border='1'>
<tr>
<th>Gamertag</th>
</tr>";

while($row = mysqli_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['gtag'] . "</td>";
  echo "</tr>";
  }
echo "</table>";

?> 