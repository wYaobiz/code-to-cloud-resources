<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>IF() function</title>
</head>
<?php
//File that includes the code to connect to the MySQL server
include "connect.php";
//Query that demonstrates IF()
$query = "SELECT Name, GPAYear1, IF(GPAYear1 = 4, 'Perfect GPA', 'NOT A perfect GPA') AS Message FROM GPA";
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
<th>GPA Year 1</th>
<th> Perfect GPA</th>
</tr>";
while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['Name'] . " </td>";
echo "<td>" . $row['GPAYear1'] . " </td>";
echo "<td>" . $row['Message'] . " </td>";
echo "</tr>";
  }
echo "</table>";
?>
</html>
