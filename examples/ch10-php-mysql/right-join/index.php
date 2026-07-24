<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>
</head>
<?php
//File that includes the code to connect to the MySQL server
include "connect.php";
/*query that demonstrates a RIGHT JOIN on the tables ChildrensAuthors and ChildrensClassics*/
$rightJoinQuery = "SELECT ChildrensAuthors.AuthorID, FirstName, LastName, BookTitle, YearPublished, ISBN FROM ChildrensAuthors RIGHT JOIN  ChildrensClassics ON ChildrensAuthors.AuthorID = ChildrensClassics.AuthorID";
//Execute the query
$result = mysqli_query($con,$rightJoinQuery);
if(!$result)
  {
    echo "Error: "  . $result . "<br>" . $con->error;
  }
//Print the table from records retrieved from the query
echo "<table align= 'center' border='2px' style='width: 1500px; line-height:40px;'>
<tr>
<th>Author ID</th>
<th>First Name</th>
<th>Last Name</th>
<th>Title of Book</th>
<th>Year Published</th>
<th>ISBN</th>
</tr>";
while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['AuthorID'] . "</td>";
echo "<td>" . $row['FirstName'] . "</td>";
echo "<td>" . $row['LastName'] . "</td>";
echo "<td>" . $row['BookTitle'] . "</td>";
echo "<td>" . $row['YearPublished'] . "</td>";
echo "<td>" . $row['ISBN'] . "</td>";
echo "</tr>";
  }
echo "</table>";
?>
</html>
