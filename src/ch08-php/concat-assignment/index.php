<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>the .= Assignment Operator Example</title>
</head>
<?php
echo ("<h3> EXAMPLE OF THE .= ASSIGNMENT OPERATOR</h3>");
//Initial value of variable $message
$message = "Welcome to Web Development";
//Initial value of variable $welcomeMessage
$welcomeMessage = "Hello and ";
//Execute the .= assignment operator
$welcomeMessage .= $message;
//Print the message via the .= assignment operator
echo ($welcomeMessage);
?>
</html>
