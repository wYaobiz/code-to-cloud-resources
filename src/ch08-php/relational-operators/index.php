<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Relational Operators Examples</title>
</head>
<?php
echo "<h2> EXAMPLES OF LOGICAL OPERATORS</h2>";
//Initialize variables
$value1 = 15;
$value2 = 30;
$value3 = 5;
$value4 = 45;
// The AND logical operator
if($value1 > $value3 AND $value2 < $value4)
  echo ("The conditional statement" . $value1 . " > " . $value3 . " AND " . $value2 . " < " . $value4 . " evaluates to <strong> TRUE </strong>");
else
  echo ("The conditional statement" . $value1 . " > " . $value3 . " AND " . $value2 . " < " . $value4 . " evaluates to <strong> FALSE </strong>");
echo("<br><br>");
// The AND logical operator using &&
if($value1 > $value3 && $value2 < $value4)
  echo ("The conditional statement" . $value1 . " > " . $value3 . " && " . $value2 . " < " . $value4 . "  evaluates to <strong> TRUE </strong>");
else
  echo ("The conditional statement" . $value1 . " > " . $value3 . " && " . $value2 . " < " . $value4 . "  evaluates to <strong> FALSE </strong>");
echo("<br><br>");
// The OR logical operator
if($value1 < $value3 OR $value2 < $value4)
  echo ("The conditional statement" . $value1 . " < " . $value3 . " OR " . $value2 . " < " . $value4 . " evaluates to <strong> TRUE </strong>");
else
  echo ("The conditional statement" . $value1 . " < " . $value3 . " OR " . $value2 . " < " . $value4 . " evaluates to <strong> FALSE </strong>");
echo("<br><br>");
// The OR logical operator using ||
if($value1 < $value3 || $value2 < $value4)
  echo ("The conditional statement" . $value1 . " < " . $value3 . " || " . $value2 . " < " . $value4 . " evaluates to <strong> TRUE </strong>");
else
  echo ("The conditional statement" . $value1 . " < " . $value3 . " || " . $value2 . " < " . $value4 . " evaluates to <strong> FALSE </strong>");
echo("<br><br>");
// The XOR logical operator using ||
if($value1 > $value3 XOR $value2 < $value4)
  echo ("The conditional statement" . $value1 . " > " . $value3 . " XOR " . $value2 . " < " . $value4 . " evaluates to <strong> TRUE </strong>");
else
  echo ("The conditional statement" . $value1 . " > " . $value3 . " XOR " . $value2 . " < " . $value4 . " evaluates to <strong> FALSE </strong>");
echo("<br><br>");
// The ! logical operator using ||
if(!$value1 > $value4)
  echo ("The conditional statement !" . $value1 . " > " . $value4 . " evaluates to <strong> TRUE </strong>");
else
  echo ("The conditional statement !" . $value1 . " > " . $value4 . " evaluates to <strong> FALSE </strong>");
?>
</html>
