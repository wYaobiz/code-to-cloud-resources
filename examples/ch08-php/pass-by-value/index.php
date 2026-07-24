<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title> Pass By Value example</title>
</head>
<?php
//Function that passes in a parameter by value
 function passByValue($number)
  {
     $number = ($number + 5) * 5 / 2 ;
  }
//Initialize parameter value, print the value before function execution, call the function and //print the value of the parameter after execution
$num = 5;
echo ("Value before function call: " . $num);
passByValue($num);
echo ("<br><br>");
echo("Value after function call: " . $num);
?>
</html>
