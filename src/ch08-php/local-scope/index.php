<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title> Local Scope example</title>
</head>
<?php
//Function demonstrating global scope without keyword global
 function localScope()
  {
     //Initialize message
     $message = "Welcome to Web Development";
    //Display the message
     echo "When inside the function the following welcome message is displayed:  " .$message;
  }
//Execute/Call function and then display message
localScope();
echo ("<br><br>");
 echo "When outside the function the following welcome message is displayed:  " .$message;
echo ("<br><br>");
?>
</html>
