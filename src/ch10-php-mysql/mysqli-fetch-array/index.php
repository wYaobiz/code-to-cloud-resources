<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title> mysqli function mysqli_num_fetch_array</title>
</head>
<?php
// File that includes information such as host server, username, data base name and //password needed to connect to the database server
include('connect.php');
//Connect to the MySqL server
if (mysqli_connect_errno())
  {
     echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
// Create a SELECT query that retrieves all the records from a DB table called Pets
$query = "SELECT * FROM Pets";
// Execute the SELECT query
 $petresults = mysqli_query($con, $query);
// Check if the query yielded a result set
if($petresults)
 {
  //Loop through result set using mysqli_fetch_array
  while($row = mysqli_fetch_array($petresults))
  {
  echo "<h4>Owner     Pet Type</h4>";
    //print the first and second elements
    echo $row["Owner"]."&nbsp". "&nbsp ". "&nbsp ". " &nbsp". "&nbsp ". $row[1];
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
