<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>ForEach Loop for creating multiplication tables using two arrays</title>
<?php
//Two arrays that contain the multipliers
$array1 = array(1, 2, 3, 4, 5,6 ,7,8,9, 10,11,12);
$array2 = array(1, 2, 3, 4, 5,6 ,7,8,9, 10,11,12);
//Print the multiplication tables using the foreach loop
print "<table align= 'center' border='2px' bordercolor = 'blue'>" ;
foreach ($array1 as $operand1)
{
  print "<tr>";
  foreach ($array2 as $operand2)
  {
      print "<td style='font-weight:bold' >" ;
      print "$operand1 x $operand2 = " . $operand1 * $operand2 ;
      print "</td>" ;
  }
print "</tr>" ;
}
print "</table>" ;
?>
</html>
