<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Switch example</title>
<?php
//Superglobal variable that returns the request method used to access the script
if($_SERVER["REQUEST_METHOD"] == "POST")
{
 // Check that the user has entered a movie genre
if ($_POST['moviegenre'])
 {
   $MovieGenre = $_POST['moviegenre'];
 }
switch ($MovieGenre)
 {
//Case statement that determines the movie genre based upon user input
  case "Drama":
    $movie = "Interstellar";
    echo '<p style="color:blue; float:right; margin-right: 1200px">' . $movie .'</p>';
    break;
  case "Horror":
    $movie = "It";
    echo '<p style="color:crimson; float:right; margin-right: 1200px">' . $movie .'</p>';
    break;
  case "Romance":
    $movie = "Titanic";
    echo '<p style="color:red; float:right; margin-right: 1200px">' . $movie .'</p>';
    break;
  case "Sci-Fi":
    $movie = "Dune";
    echo '<p style="color:limegreen; float:right; margin-right: 1200px">' . $movie .'</p>';
    break;
  default:
    $movie = "Other";
    echo '<p style="color:magenta; float:right; margin-right: 1200px">' . $movie .'</p>';
 }
}
?>
<body>
<!--Form to enter movie genre data -->
<form method="POST">
  <label for="MovieGenre">Enter a movie genre:</label>
  <input type="text" id="moviegenre" name="moviegenre" value = "<?php echo ($_POST['moviegenre']); ?>">
  <br>
  <input type="submit" value="Submit">
</form>
</body>
</html>
