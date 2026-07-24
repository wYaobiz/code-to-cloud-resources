<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title> Global Scope example</title>
</head>
<?php
//Initialize message
  $message = "Welcome to Web Development";
//Function demonstrating global scope without keyword global
function globalScope()
  {
     //Display the message
     global $message;
     echo "When inside the function the following welcome message is displayed:  " .$message;
  }
//Execute/Call function and then display message
globalScope();
echo ("<br><br>");
echo "When outside the function the following welcome message is displayed:  " .$message;
?>
</html>
