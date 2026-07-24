<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>if - else if - else example</title>
<?php
//Superglobal variable that returns the request method used to access the script
if($_SERVER["REQUEST_METHOD"] == "POST")
{
// Check that the user has entered an age
 if ($_POST['age'])
 {
   $age = $_POST['age'];
 }
//IF - ELSE IF  ELSE block that determines the age category for an individual based upon age entered
if ( $age > 1 && $age <=4)
  {
      echo '<p style="color:blue; float:right; margin-right: 1350px"> TODDLER!</p>';  }
else if ($age >5 && $age <=12)
  {
      //the else if statement allows for an alternative outcome
      echo '<p style="color:blueviolet; float:right; margin-right: 1300px"> ADOLESCENT!</p>';
  }else if ($age >13 && $age <=19)
  {
      //the else if statement allows for an alternative outcome
      echo '<p style="color:seagreen; float:right; margin-right: 1350px"> TEENAGER!</p>';  }
else
  {
      //the else statement allows for an alternative outcome when none of the other statements evaluate to TRUE
      echo '<p style="color:limegreen; float:right; margin-right: 1350px"> ADULT!</p>';  }
}
?>
<body>
<!-- Form to enter age data -->
<form method="POST">
  <label for="Age">Enter an age:</label>
  <input type="text" id="age" name="age" value = "<?php echo ($_POST['age']); ?>">
  <br>
  <input type="submit" value="Submit">
</form>
</body>
</html>
