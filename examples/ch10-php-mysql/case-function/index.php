<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>CASE() Function</title>
</head>
<?php
//File that includes the code to connect to the MySQL server
include "connect.php";
//Query that demonstrates CASE () function
$query = "SELECT Name, GPAYear1, CASE WHEN GPAYear1 = 4 THEN 'GPA is A' WHEN GPAYEAR1 >=3 THEN 'GPA is B' ELSE 'GPA is lower than B' END AS Message FROM GPA";
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
<th>GPA Grade Value</th>
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
