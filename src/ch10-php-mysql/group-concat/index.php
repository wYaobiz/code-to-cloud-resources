<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>
</head>
<?php
//File that includes the code to connect to the MySQL server
include "connect.php";
//Query that demonstrates Aggregate functions GROUP_CONACT()
$query = "SELECT AuthorID, GROUP_CONCAT(BookTitle) AS BookTitle FROM ChildrensClassics GROUP BY AuthorID";
//Execute the query
$result = mysqli_query($con,$query);
if(!$result)
  {
    echo "Error: "  . $query . "<br>" . $con->error;
  }
//Print the table from the results from the query
echo "<table align= 'center' border='2px' line-height:40px;'>
<tr>
<th>Author ID</th>
<th>Title of Book</th>
</tr>";
while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['AuthorID'] . " </td>";
echo "<td>" . $row['BookTitle'] . "</td>";
echo "</tr>";
  }
echo "</table>";
?>
</html>
