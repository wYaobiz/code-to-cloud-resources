<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>if example</title>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>ForEach Loop using indexes example</title>
<?php
echo '<h3 style="color:blue" > A List of Common Household Pets</h3>';
//The array to be iterated through
$pets = array("dog", "cat", "fish", "bird", "lizard", "hamster", "guinea pig");
//Counter used in output
$counter = 1;
foreach ($pets as $animal)
{
//Print the counter value followed the string Pet Name followed by pet
  echo  $counter . ". Pet Name: " .$animal;
  $counter++;
  echo "<br><br>";
}
?>
</html>
