<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
  <title>IFNULL() Function</title>
<?php
//File that includes the code to connect to the MySQL server
include "connect.php";
//Query that demonstrates IFNULL () function
$query = "SELECT IFNULL((SELECT Name FROM GPA WHERE Name = 'Sarah'), 'NULL') AS NAME";
//Execute the query
$result = mysqli_query($con,$query);
if(!$result)
  {
    echo "Error: "  . $query . "<br>" . $con->error;
  }
//Print the table from the results from the query
echo "<table align= 'center' border='2px' line-height:40px;'>
<tr>
<th>Name</th>
</tr>";
while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['NAME'] . " </td>";
echo "</tr>";
  }
echo "</table>";
?>
</html>
