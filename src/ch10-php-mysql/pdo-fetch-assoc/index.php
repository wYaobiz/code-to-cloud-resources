<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title> mysqli function mysqli_num_fetch_array(MYSQLI_NUM)</title>
</head>
<?php
// File that includes information such as host server, username, data base name and password needed to connect to the database server
include('connect.php');
//Try catch block to catch connection errors
try
  {
    // Connect to your DB
    $connect = new PDO("mysql:host=$servername; dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Connected successfully";
       }
catch(PDOException $e)
      {
        echo "Connection failed: " . $e->getMessage();
      }
//Try catch block to catch SQL errors
try
  {
// Create a SELECT query that retrieves all the records from a DB table called Pets
$petquery="SELECT * FROM Pets";
// Execute the SELECT query
$petresults = $connect->query($petquery);
// Check if the SELECT query yielded a result set
if ($petresults)
 {
  //Loop through result set using fetch(PDO::FETCH_ASSOC)
    while($row = $petresults-> fetch(PDO::FETCH_ASSOC))
  {
  echo "<h4>Owner     Pet Name</h4>";
  //print the first and third elements
  echo $row["Owner"]."&nbsp". "&nbsp ". "&nbsp ". " &nbsp". "&nbsp ". $row["PetName"];
    echo "<br>";
  }
}
}
//Catch block to catch errors
catch(PDOException $error)
  {
    echo "<br><br>";
  echo "Query Statement failed: " . $error->getMessage();
  }
// Close the DB connection
$connect=null;
?>
</html>
