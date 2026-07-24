<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>MIN(), MAX() and AVG() functions</title>
</head>
<?php
//File that includes the code to connect to the MySQL server
include "connect.php";
//Query that demonstrates Aggregate functions MIN(), MAX() and AVG()
$query = "SELECT MIN(PRICE) AS LowestPrice, MAX(PRICE) AS HighestPrice, AVG(Price) AS AveragePrice FROM ChildrensClassicsPrice";
//Execute the query
$result = mysqli_query($con,$query);
if(!$result)
 {
    echo "Error: "  . $query . "<br>" . $con->error;
  }
//Print the table from the results from the query
echo "<table align= 'center' border='2px' line-height:40px;'>
<tr>
<th>Lowest Priced Book</th>
<th>Highest Priced Book</th>
<th>Average Price of Books</th>
</tr>";
while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['LowestPrice'] . "</td>";
echo "<td>" . $row['HighestPrice'] . "</td>";
echo "<td>" . $row['AveragePrice'] . "</td>";
echo "</tr>";
  }
echo "</table>";
?>
</html>
