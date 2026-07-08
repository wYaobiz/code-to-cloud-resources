<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title> Function that checks for type of variable example</title>
</head>
<?php
 //Function to check if the number passed into a function is an integer or float value
function integerOrFloat ($number)
{
  if(is_int($number))
   {
   echo ("The number " . $number . " is an integer");
     echo("<br><br>");
   }
  else
   {
   echo ("The number " . $number . " is a float");
   }
}
//Call/Execute the function
integerOrFloat (200);
integerOrFloat (25.75);
?>
</html>
