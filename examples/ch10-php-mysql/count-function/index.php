<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>COUNT() Function</title>
</head>
<?php
//File that includes the code to connect to the MySQL server
include "connect.php";
//Query that demonstrates Aggregate functions COUNT()
$query = "SELECT COUNT(ISBN) AS ISBNCOUNT FROM ChildrensClassicsPrice";
//Execute the query
$result = mysqli_query($con,$query);
if(!$result)
 {
    echo "Error: "  . $query . "<br>" . $con->error;
  }
//Print the table from the results from the query
echo "<table align= 'center' border='2px' line-height:40px;'>
<tr>
<th>Number of ISBNs</th>
</tr>";
while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['ISBNCOUNT'] . "</td>";
echo "</tr>";
  }
echo "</table>";
?>
</html>
