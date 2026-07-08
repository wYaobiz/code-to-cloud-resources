<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title> Functions example</title>
<?php
//Function that calculates cost and returns the value of $cost
function totalCost ()
{
  $cost = (100 + 50 + 50);
  return $cost += ($cost * .10);
}
//Print out the total cost after a call to the function totalCost which calculates the cost
echo ("The total cost is $" . totalCost());
?>
</html>
