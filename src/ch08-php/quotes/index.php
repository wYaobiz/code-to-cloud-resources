<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title> Double Quotes vs Single Quotes example</title>
<?php
$Author = 'Charles Dickens';
$Title = 'A Tale of Two Cities ';
$ISBN = "9781454957546";
$Pages = "424";
$Price = "$20.00";
echo "<strong><i>Values enclosed in single quotes are treated literally therefore in this case the variable name is printed and not their values</strong></i>";
echo "<br><br>";
echo ' Author Name : $Author';
echo "<br>";
echo ' Book Title : $Title';
echo "<br>";
echo ' ISBN : $ISBN';
echo "<br>";
echo ' Pages : $Pages';
echo "<br>";
echo ' Price : $Price';
echo "<br><br>";
echo "<strong><i>Values enclosed in double quotes are interpreted therefore in this case the variables' values are printed </strong></i>";
echo "<br>";
echo "<br> Author Name : $Author";
echo "<br>";
echo " Book Title : $Title";
echo "<br>";
echo " ISBN : $ISBN";
echo "<br>";
echo " Pages : $Pages";
echo "<br>";
echo " Price : $Price";
echo "<br><br>";
echo "<strong><i>Values enclosed in single quotes within a string are treated literally so the variables need to be outside the quotes to print actual value </strong></i>";
echo "<br>";
echo '<p> Author name: <strong>'. $Author. '</strong> <br> Novel Title: <strong>' . $Title . '</strong> <br>  ISBN: <strong> '. $ISBN .'</strong> <br> Number of Pages: <strong>' . $Pages . '</strong> <br> Price: <strong>' . $Price .'</strong> </p>';
echo "<br>";
echo "<strong> <i> Values enclosed in double quotes within a string are interpreted so they can be enclosed within the quotes to print actual value </strong> </i>";
echo "<br>";
echo "<p> Author Name <strong> $Author </strong> <br> Novel Title: <strong> $Title  </strong> <br> ISBN: <strong> $ISBN  </strong> <br> Number of Pages: <strong> $Pages  </strong> <br> Price: <strong> $Price</strong></p>";
?>
</html>
