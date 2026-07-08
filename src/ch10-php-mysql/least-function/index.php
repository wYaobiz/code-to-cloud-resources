<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>LEAST function</title>
</head>
<?php
//File that includes the code to connect to the MySQL server
include "connect.php";
//Query that demonstrates LEAST () function
$query = "Select Name, LEAST (GPAYear1, GPAYear4, GPAYear3 ,GPAYear4) AS Lowest_GPA FROM GPA";
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
<th>Highest GPA</th>
</tr>";
while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['Name'] . " </td>";
echo "<td>" . $row['Lowest_GPA'] . " </td>";
echo "</tr>";
  }
echo "</table>";
?>
</html>
