<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>String Functions Examples</title>
</head>
<?php
echo ("<h3> EXAMPLE OF STRING FUNCTIONS</h3>");
//Initial value of $message
$message= "Welcome to Web Development!";
//Print out $message
echo ("Initial value of message: " . "<strong> $message </strong>");
echo ("<br>");
//Perform the chop() function
$newMessage = chop($message, "Development!");
//Print out $message after the chop() function executed
echo ("Value of message after chop() function: " . "<strong> $newMessage </strong>");
echo("<br><br>");
//Initial value of $message
$message= "Welcome to Web Development!";
//Print out $message
echo ("Initial value of message: " . "<strong> $message </strong>");
echo ("<br>");
//Perform the ltrim() function
$newMessage = ltrim($message, "*");
//Print out $message after the ltrim() function executed
echo ("Value of message after ltrim() function: " . "<strong> $newMessage </strong>");
echo("<br><br>");
//Initial value of $message
$message= "Welcome to Web Development!!!!!!!!!!!!!!";
//Print out $message
echo ("Initial value of message: " . "<strong> $message </strong>");
echo ("<br>");
//Perform the rtrim() function
$newMessage = rtrim($message, "!");
//Print out $message after the rtrim() function executed
echo ("Value of message after rtrim() function: " . "<strong> $newMessage </strong>");
echo("<br><br>");
//Initial value of $message1
$message1= "Welcome to Web Development!";
//Initial value of $message2
$message2 = "This is the welcome message!";
//Print out $message1
echo ("Initial value of first message: " . "<strong> $message1 </strong>");
echo("<br>");
//Print out $message2
echo ("Initial value of second message: " . "<strong> $message2 </strong>");
echo ("<br>");
//Perform the strcmp() function
$newMessage = strcmp($message1, $message2);
//Print out $message after the strcmp() function executed
echo ("Value of message after strcmp() function: " . "<strong> $newMessage </strong>");
echo("<br><br>");
//Initial value of $message
$message= "Welcome to Web Development!";
//Print out $message
echo ("Initial value of message: " . "<strong> $message </strong>");
echo ("<br>");
//Perform the strlen() function
$newMessage = strlen($message);
//Print out $message after the strlen() function executed
echo ("Value of message after strlen() function: " . "<strong> $newMessage </strong>");
echo("<br><br>");
//Initial value of $message
$message= "Welcome to Web Development!";
//Print out $message
echo ("Initial value of message: " . "<strong> $message </strong>");
echo ("<br>");
//Perform the strtolower() function
$newMessage = strtolower($message);
//Print out $message after the strtolower() function executed
echo ("Value of message after strtolower() function: " . "<strong> $newMessage </strong>");
echo("<br><br>");
//Initial value of $message
$message= "Welcome to Web Development!";
//Print out $message
echo ("Initial value of message: " . "<strong> $message </strong>");
echo ("<br>");
//Perform the strtoupper() function
$newMessage = strtoupper($message);
//Print out $message after the strtoupper() function executed
echo ("Value of message after strtoupper() function: " . "<strong> $newMessage </strong>");
echo("<br><br>");
//Initial value of $message
$message= "Welcome to Web Development!";
//Print out $message
echo ("Initial value of message: " . "<strong> $message </strong>");
echo ("<br>");
//Perform the substr() function
$newMessage = substr($message, 4, 8);
//Print out $message after the substr() function executed
echo ("Value of message after substr() function: " . "<strong> $newMessage </strong>");
echo("<br><br>");
//Initial value of $message
$message= "Welcome to Web Development!";
//Print out $message
echo ("Initial value of message: " . "<strong> $message </strong>");
echo ("<br>");
//Perform the trim() function
$newMessage = trim($message, "Went!");
//Print out $message after the trim() function executed
echo ("Value of message after trim() function: " . "<strong> $newMessage </strong>");
?>
</html>
