<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>if - else example</title>
<?php
//Superglobal variable that returns the request method used to access the script
if($_SERVER["REQUEST_METHOD"] == "POST")
{
// Check that the user has entered a month
if ($_POST['month'])
 {
   $month = $_POST['month'];
 }
//If  - else block that determines if the month entered is a summer month
if ( $month >= 6 && $month <=8)
 {
   echo '<p style="color:blue; float:right; margin-right: 1100px"> WELCOME to Summer! </p>';
 }
//the else statement allows for an alternative outcome when if statement is not evaluated to true
else
 {
   echo '<p style="color:green; float:right; margin-right: 1100px"> The month entered is not a Summer month </p>';  }
 }
?>
<body>
<!-- Form to enter month data -->
<form method="POST">
  <label for="month">Enter a month as a digit:</label>
  <input type="text" id="month" name="month" value = "<?php echo ($_POST['month']); ?>">
  <br>
  <input type="submit" value="Submit">
</form>
</body>
</html>
