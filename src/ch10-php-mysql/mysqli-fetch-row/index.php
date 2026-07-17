<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title> mysqli function mysqli_num_fetch_array(MYSQLI_NUM)</title>
</head>
<?php
// File that includes information such as host server, username, data base name and password needed to connect to the database server
include('connect.php');
//Connect to the MySqL server
if (mysqli_connect_errno())
  {
     echo "Failed to $con to MySQL: " . mysqli_connect_error();
  }
// Create a SELECT query that retrieves all the records from a DB table called Pets
$query = "SELECT * FROM Pets";
// Execute the SELECT query
 $petresults = mysqli_query($con, $query);
// Check if the query yielded a result set
if($petresults)
 {
   //Loop through result set using mysqli_fetch_row
   while ($row = mysqli_fetch_row($petresults))
    {
     echo "<h4>Pet Type    Owner</h4>";
    //print the first and third elements
    echo $row[1]."&nbsp". "&nbsp ". "&nbsp ". " &nbsp". "&nbsp ". " &nbsp". " &nbsp" . $row[0];
    echo "<br>";
  }
}
else
 {
     echo "Query Failed :" . mysqli_error($con);
 }
// Close the DB connection
mysqli_close($con);
?>
</html>
