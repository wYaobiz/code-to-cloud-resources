<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title> mysqli function mysqli_num_rows</title>
</head>
<?php
// File that includes information such as host server name, username, database name and //password needed to connect to the database server
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
   //Find the number of rows retrieved
   $row = mysqli_num_rows($petresults);
   //Print out the numbers of rows in the table
   if($row)
     {
       echo("Number of rows in the table : " . $row);
     }
     else
  {
   //Message printed if no rows found
   echo "No rows counted";
  }
}
else
 {
    //Message printed query does not work
     echo "Query Failed :" . mysqli_error($con);
 }
// Close the DB connection
mysqli_close($con);
?>
</html>
