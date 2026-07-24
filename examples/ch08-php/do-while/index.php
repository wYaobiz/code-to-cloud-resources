<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title> do..while loop example</title>
<?php
echo '<h3 style="color:magenta" > A List Desserts in the array</h3>';
//Array that holds different desserts
$desserts = array("cake", "pie", "flan", "brownie","Crème brûlée", "cheesecake", "tiramisu", "ice cream", "cookies");
$counter = 0;
//count() function finds the length of an array in PHP
$arraylength = count($desserts);
//do ..while loop to iterate through the array an print out its contents
do
{
  echo "Dessert : " . $desserts[$counter];
  echo "<br><br>";
  $counter++;
}
while($counter < $arraylength)
?>
</html>
