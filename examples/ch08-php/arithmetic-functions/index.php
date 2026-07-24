<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Predefined Arithmetic Functions Examples</title>
</head>
<?php
echo ("<h3> EXAMPLES OF PREDEFINED ARITHMETIC FUNCTIONS</h3>");
//Set initial values for variable
$value = 5;
//Execute the abs() function
$result = abs($value);
//Print the result for the abs() function
echo ("The result from the abs() function. When the value is " . $value .  " <strong> Result: </strong>" . "<em> $result </em>");
echo("<br><br>");
//Set initial values for variable
$value = 5.25;
//Execute the ceil() function
$result = ceil($value);
//Print the result for the ceil() function
echo ("The result from the ceil() function. When the value is " . $value .  " <strong> Result: </strong>" . "<em> $result </em>");
echo("<br><br>");
//Execute the floor() function
$result = floor($value);
//Print the result for the floor() function
echo ("The result from the floor() function. When the value is " . $value .  " <strong> Result: </strong>" . "<em> $result </em>");echo("<br><br>");
//Set initial values for variable
$value = array(300, 50, 100);
//Execute the max() function
$result = max($value);
//Print the result for the max() function
echo ("The result from the max() function. When the value is (300, 50, 100)" .  " <strong> Result: </strong>" . "<em> $result </em>");
echo("<br><br>");
//Execute the min() function
$result = min($value);
//Print the result for the min() function
echo ("The result from the min() function. When the value is (300, 50, 100)" .  " <strong> Result: </strong>" . "<em> $result </em>");
echo("<br><br>");
//Execute the pi() function
$result = pi($value);
//Print the result for the pi() function
echo ("The result from the pi() function is: "  . "<em> $result </em>");
echo("<br><br>");
//Execute the rand() function. The value can be any number from 1 through 10
$result = rand(1, 10);
//Print the result for the rand() function
echo ("The result from the rand() function is when the range is from 1 to 10. <strong> Result: </strong>"  . "<em> $result </em>");
echo("<br><br>");
//Set initial value for variable
$value = 5.2578787;
//Execute the round() function. Number of decimal places to print is 2
$result = round($value, 2);
//Print the result for the round() function
echo ("The result from the round() function. When the value is " . $value .  " and the precision is 2. <strong> Result: </strong>" . "<em> $result </em>");
echo("<br><br>");
//Set initial value for variable
$value = 25;
//Execute the sqrt() function
$result = sqrt($value);
//Print the result for the sqrt() function
echo ("The result from the sqrt() function when the value is " . $value .  " <strong> Result: </strong>" . "<em> $result </em>");
echo("<br><br>");
?>
</html>
