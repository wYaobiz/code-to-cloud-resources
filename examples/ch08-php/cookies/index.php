<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title> Cookies example</title>
<?php
//Set $expirytime and $cityValue so you can delete the cookie
$expiryTime = time()-60*60*24;
$cityValue = " ";
$path = "/";
//Delete the cookie
setcookie($city, $cityValue, $expiryTime, $path);
//Check if the cookie is set
if( !isset($_COOKIE['cityName']) )
  {
  echo "no valid cookie found";
  }
 ?>
</html>
