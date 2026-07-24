<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title> Sessions example</title>
<?php
 //Delete the session variable
unset($_SESSION['cityName']);
if ( !isset($_SESSION['cityName']))
   {
   echo ("The session variable is deleted ") ;
   }
?>
</html>
