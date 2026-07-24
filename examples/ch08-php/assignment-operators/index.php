<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Assignment Operator Examples</title>
</head>
<?php
    echo ("<h1> EXAMPLES of ASSIGNMENT OPERATORS</h1>");
//Set initial values for variables
    $result = 25;
    $newresult = $result;
    $operand = 5;
//Perform the += operation
    $result += $operand;
//Print the result of the operation with initial value for $result
   echo ("The result from the expression " . $newresult . "<strong> += </strong>" . $operand . " is " . $result);
   echo("<br><br>");
//Assign the value of result to new variable for printing purposes. Perform the -= operation
    $newresult = $result;
    $result -= $operand;
//Print the result of the operation with new value for $result
echo ("The result from the expression " . $newresult . "<strong> -= </strong>" . $operand . " is " . $result);
echo("<br><br>");
//Assign the value of result to new variable for printing purposes. Perform the *= operation
$newresult = $result;
$result *= $operand;
//Print the result of the operation with new value for $result
echo ("The result from the expression " . $newresult . "<strong> *= </strong>" . $operand . " is " . $result);
echo("<br><br>");
//Assign the value of result to new variable for printing purposes. Perform the /= operation
$newresult = $result;
$result /= $operand;
//Print the result of the operation with new value for $result
echo ("The result from the expression " . $newresult . "<strong> /= </strong>" . $operand . " is " . $result);
echo("<br><br>");
//Assign the value of result to new variable for printing purposes. Perform  %= operation
$newresult = $result;
$result %= $operand;
//Print the result of the operation with new value for $result
echo ("The result from the expression " . $newresult . "<strong> %= </strong>" . $operand . " is " . $result);
echo("<br><br>");
?>
</html>
