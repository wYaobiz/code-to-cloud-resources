<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Embedded PHP</title>
<!-- Style heading and paragraph colors -->
<style>
  h3
   {
    color:royalblue;
   }
   {
    color:forestgreen;
   }
</style>
</head>
<!-- PHP embedded in DOCTYPE -->
<?php
    $courseName = "Web Applications"; //creates  a variable called $user
?>
<body>
<!-- PHP embedded in body of HTML code -->
<h3> Welcome to <?php echo $courseName; ?></h3> <!-- Prints out Welcome to Web Applications -->
<p>
<?php
    echo "<strong>";
    echo " Where we will learn HTML, CSS, JavaScript, PHP and SQL"; // Prints out the languages learned
  echo"</strong>";
?>
</p>
</body>
</html>
