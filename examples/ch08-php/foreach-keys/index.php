<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>ForEach Loop using keys example</title>
<?php
echo '<h3 style="color:blue" > A List of Common Household Pets</h3>';
//Array with values the pets and keys the pet owners name
$petowner = array("dog"=>"Doug", "cat"=>"Cathy", "fish"=>"Finn","bird"=>"Bianca","lizard"=>"Liam", "hamster"=>"Harper", "guinea pig"=>"Gil");
//loop that prints out the key (owner) followed by string owns by followed pet
foreach ($petowner as $pet => $owner)
{
   echo $owner . " owns a " .$pet;
   echo "<br><br>";
}
?>
</html>
