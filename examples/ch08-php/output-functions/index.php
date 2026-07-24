<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Output Functions Examples</title>
</head>
<?php
//Figure the cost of an item with tax.
$calculateTax = 275 * .0675;
$answer = 275 + $calculateTax;
//Two different ways to bold the variable $answer
$message = "Calculate cost of an item cost $275 by tax rate of 0.0675%. Final cost with tax = " . "<strong>" .  $answer . "</strong>";
$message = "Calculate cost of an item cost $275 by tax rate of 0.0675%. Final cost with tax = " . "<strong> $answer </strong>";
echo ("<h4> Print Message via the echo statement </h4>");
echo $message;
echo ("<h4> Print Message via the print statement </h4>");
print $message;
echo ("<h4> Print Message via the printf statement </h4>");
//NOTE that to print the % sign two % signs are needed
printf ("Calculate cost of an item cost $275 by tax rate of 0.0675%%. Final cost with tax =  <strong> %.2f </strong> ", $answer);
?>
</html>
