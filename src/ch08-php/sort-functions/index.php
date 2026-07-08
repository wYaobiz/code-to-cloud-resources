<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Sort Functions Examples</title>
</head>
<?php
echo "<h2> EXAMPLES OF SORT FUNCTIONS</h2>";
//Initialize the arrays
$pets = array("dog", "cat", "fish", "bird", "lizard", "hamster", "guinea pig", "rabbit");
$petowner = array("dog"=>"Doug", "cat"=>"Cathy", "fish"=>"Finn","bird"=>"Bianca","lizard"=>"Liam", "hamster"=>"Harper", "guinea pig"=>"Gil", "rabbit" => "Rose");
// The sort() function
echo "<h4> sort() function </h4>";
echo ("Original array: pets");
print_r($pets);
echo ("<br><br>");
sort($pets);
print_r($pets);
echo("<br><br>");
// The rsort() function
echo "<h4> rsort() function </h4>";
echo ("Original array: pets");
print_r($pets);
echo ("<br><br>");
rsort($pets);
print_r($pets);
echo("<br><br>");
// The asort() function
echo "<h4> asort() function </h4>";
echo ("Original array: petowner");
print_r($petowner);
echo ("<br><br>");
asort($petowner);
print_r($petowner);
echo("<br><br>");
// The ksort() function
echo "<h4> sort() function </h4>";
echo ("Oiginal array: petowner");
print_r($petowner);
echo ("<br><br>");
rsort($petowner);
print_r($petowner);
?>
</html>
