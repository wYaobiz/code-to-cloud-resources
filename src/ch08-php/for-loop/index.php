<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>For Loop example</title>
<?php
//Superglobal variable that returns the request method used to access the script
if($_SERVER["REQUEST_METHOD"] == "POST")
{
 // Check that the user has entered a multiplier
 if ($_POST['multiplier'])
 {
   $Multiplier = $_POST['multiplier'];
 }
//for loop that produces a multiplication table based upon the multiplier entered by the user
for ($counter=1; $counter <=12; $counter+=1)
 {
     $answer = $counter * $Multiplier;
     echo $counter . " multiplied by ". $Multiplier . " = ". $answer;
     echo "<br><br>";
 }
}
?>
<body>
<!--Form to enter movie genre data -->
<h1 style ="color:green">Learn your Multiplication Tables</h1>
<form method="POST">
  <label for="Mulitplier" style = "color: blue; font-weight:bold;">Enter the multiplier of the Multiplication table you want to learn:</label>
  <input type="text" id="multiplier" name="multiplier" value = "<?php echo ($_POST['multiplier']); ?>">
  <br>
  <input type="submit" value="Submit">
</form>
</body>
</html>
