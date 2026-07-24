<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Creating an Array via indexes</title>
</head>
<?php
$array = (pets);
$pets = array("dog", "cat", "fish", "bird", "lizard", "hamster", "guinea pig");
$counter = 0;
$arraylength = count($array);
while ($counter < $arraylength)
  {
     print "<table align= 'center' border='2px' bordercolor = 'black'>" ;
     print "<tr>";
     print "<th rowspan='1'; style = 'background-color:burlywood; width:10%'>ARRAY  VALUES:</th>";
     foreach($pets as $animal)
       {
          print "<td style='font-weight:bold; background-color:wheat; text-align:center;height:25px;  width:10%'>" ;
          print  $animal  ;
          print "</td>" ;
        }
     $counter++;
     print "</tr>" ;
     print "<tr>";
     print "<th rowspan='1'; style = 'background-color:burlywood; width:10%'>KEY VALUES:</th>";
     for ($i = 0 ; $i <=6; $i++)
       {
          print "<td style='font-weight:bold; background-color:wheat;text-align:center;height:25px; width:10%''>" ;
          print  $i  ;
          print "</td>" ;
      }
 }
print "</tr>" ;
print "</table>" ;
?>
</hmtl>
Produces:
Example code to create an array using keys
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Creating an Array via Key</title>
</head>
<?php
$array = (pets);
$petowner = array("dog"=>"Doug", "cat"=>"Cathy", "fish"=>"Finn","bird"=>"Bianca","lizard"=>"Liam", "hamster"=>"Harper", "guinea pig"=>"Gil");
$counter = 0;
$arraylength = count($array);
while ($counter < $arraylength)
     {
print "<table align= 'center' border='2px' bordercolor = 'black'>" ;
print "<tr>";
print "<th rowspan='1'; style = 'background-color:burlywood; width:10%'>ARRAY VALUES:</th>";
foreach ($petowner as $owner)
  {
    print "<td style='font-weight:bold; background-color:wheat;text-align:center;height:25px; width:10%''>" ;
    print  $owner  ;
    print "</td>" ;
     }
  print "<tr>";
print "<th rowspan='1'; style = 'background-color:burlywood; width:10%'>KEY VALUES:</th>";
  foreach ($petowner as $pet => $owner)
  {
    print "<td style='font-weight:bold; background-color:wheat; text-align:center;height:25px; width:10%'>" ;
    print  $pet  ;
    print "</td>" ;
  }
print "</tr>" ;
$counter++;
}
print "</tr>" ;
print "</table>" ;
?>
</hmtl>
Produces:
Example code to add an element to an array in specified index
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Adding Array Element</title>
</head>
<?php
//Create a one dimensional array
$pets = array("dog", "cat", "fish", "bird", "lizard", "hamster", "guinea pig");
//Add a new element to the array by specifying the index
$pets[3] = "rabbit";
//Print the values and indexes for the array
print "<table align= 'center' border='2px' bordercolor = 'black'>" ;
print "<tr>";
print "<th rowspan='1'; style = 'background-color:burlywood; width:10%'>ARRAY VALUES:</th>";
foreach($pets as $petinfo)
  {
    print "<td style='font-weight:bold; background-color:wheat; text-align:center;height:25px;  width:10%'>" ;
    print  $petinfo  ;
    print "</td>" ;
  }
print "</tr>" ;
print "<tr>";
print "<th rowspan='1'; style = 'background-color:burlywood; width:10%'>INDEX VALUES:</th>";
foreach ($pets as $petvalue => $keyvalue)
{
    print "<td style='font-weight:bold; background-color:wheat;text-align:center;height:25px; width:10%''>" ;
    print  $petvalue;
    print "</td>" ;
}
print "</tr>" ;
print "</table>" ;
?>
</hmtl>
Produces:
Example code to create a two dimensional array using indexes.
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Creating a two dimensional Array</title>
</head>
<?php
$childrenbook = array();
      $childrenbook[] = array("Beatrix Potter", "The Tale of Peter Rabbit", 9780723247708);
      $childrenbook[] = array("Eric Carle", "The Very Hungry Caterpillar", 9780399226908);
      $childrenbook[] = array( "Marcus Pfister", "The Rainbow Fish", 9783314015441);
print "<table align= 'center' border='2px' bordercolor = 'black'>" ;
 {
   for($index1=0; $index1<=2; $index1++)
  {
    print "<tr>";
      print "<th rowspan='1'; style = 'background-color:burlywood; width:25%'>ARRAY  VALUES:</th>";
    for($index2=0; $index2<=2; $index2++)
     {
        print "<td style='font-weight:bold; background-color:wheat; text-align:center;height:25px; width:25%'>" ;
    print  $childrenbook[$index1][$index2] ;
        print "</td>" ;
     }
    print "</tr>" ;
    print "<tr>";
     print "<th rowspan='1'; style = 'background-color:burlywood; width:25%'>INDEX VALUES:</th>";
     for ($counter = 0 ; $counter <=2; $counter++)
       {
          print "<td style='font-weight:bold; background-color:wheat;text-align:center;height:25px; width:25%'>" ;
          print "[" .$index1 . "], [" . $counter . "]";
          print "</td>" ;
    for($row = 1; $row <=4; $row++)
      if($counter == 2)
       if($index1 < 2)
        {
             {
         print "<tr>";
           print "</tr>";
         }
         }
     }
    }
   print "</tr>";
 }
print "</table>" ;
?>
</hmtl>
Produces:
Example code to create a two dimensional array using keys and adding a record.
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Creating a two dimensional Array and Adding a Record</title>
</head>
<?php
//Create two dimensional array
$childrenbook = array();
      $childrenbook[] = array("author" => "Beatrix Potter", "booktitle" => "The Tale of Peter Rabbit", "ISBN" =>9780723247708);
      $childrenbook[] = array("author" => "Eric Carle", "booktitle" => "The Very Hungry Caterpillar", "ISBN" =>9780399226908);
      $childrenbook[] = array( "author" => "Marcus Pfister", "booktitle" => "The Rainbow Fish", "ISBN" => 9783314015441);
//Add an element using no index
$childrenbook[] = array("author" => "A A Milne", "booktitle" => "Winnie the Pooh", "ISBN" => 9780525444435);
$count = 0;
//Print out information (Values and Keys)
print "<table align= 'center' border='2px' bordercolor = 'black'>" ;
print "<tr>";
foreach ($childrenbook as $bookinformation)
 {
  print "<tr>";
    print "<th rowspan='1'; style = 'background-color:burlywood; width:25%'>ARRAY VALUES:</th>";
    foreach ($bookinformation as $bookinfo)
   {
     print "<td style='font-weight:bold; background-color:wheat;text-align:center;height:25px; width:25%''>" ;
     print  $bookinfo;
     print "</td>" ;
    }
    print "</tr>";
  print "<tr>";
    print "<th rowspan='1'; style = 'background-color:burlywood; width:25%'>KEY VALUES:</th>";
     {
     foreach ($bookinformation as $bookkeyvalue => $keyvalue)
        {
        print "<td style='font-weight:bold; background-color:wheat; text-align:center;height:25px; width:25%'>" ;
        print  $bookkeyvalue ;
        print "</td>" ;
      }
     print "</tr>";
     for($row = 1; $row <=4; $row++)
      {
         if($count < 3 )
       {
           print "<tr>";
           print "</tr>";
         }
    }
      $count++;
     }
}
print "</tr>";
print "</table>" ;
 ?>
</hmtl>
Produces:
Example code to remove an array element
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Removing an element from an array</title>
</head>
<?php
//Create a one dimensional array
$pets = array("dog", "cat", "fish", "bird", "lizard", "hamster", "guinea pig");
//Use the unset() function to remove an array element
unset ($pets[3]);
//Print the values and indexes for the array
print "<table align= 'center' border='2px' bordercolor = 'black'>" ;
print "<tr>";
print "<th rowspan='1'; style = 'background-color:burlywood; width:10%'>ARRAY VALUES:</th>";
foreach($pets as $petinfo)
  {
    print "<td style='font-weight:bold; background-color:wheat; text-align:center;height:25px;  width:10%'>" ;
    print  $petinfo  ;
    print "</td>" ;
  }
print "</tr>" ;
print "<tr>";
print "<th rowspan='1'; style = 'background-color:burlywood; width:10%'>INDEX VALUES:</th>";
foreach ($pets as $petvalue => $keyvallue)
{
    print "<td style='font-weight:bold; background-color:wheat;text-align:center;height:25px; width:10%''>" ;
    print  $petvalue;
    print "</td>" ;
}
print "</tr>" ;
print "</table>" ;
?>
</hmtl>
Produces:
Initial Array is:
Example code to realign an array’s indexes after an element is removed
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Realign array indexes after an element is removed</title>
</head>
<?php
$pets = array("dog", "cat", "fish", "bird", "lizard", "hamster", "guinea pig");
//Use the unset() function to remove an array element
unset ($pets[3]);
$pets = (array_values($pets));
//Print the values and indexes for the array
print "<table align= 'center' border='2px' bordercolor = 'black'>" ;
print "<tr>";
print "<th rowspan='1'; style = 'background-color:burlywood; width:10%'>ARRAY VALUES:</th>";
foreach($pets as $petinfo)
  {
    print "<td style='font-weight:bold; background-color:wheat; text-align:center;height:25px;  width:10%'>" ;
    print  $petinfo  ;
    print "</td>" ;
  }
print "</tr>" ;
print "<tr>";
print "<th rowspan='1'; style = 'background-color:burlywood; width:10%'>INDEX VALUES:</th>";
foreach ($pets as $petvalue => $keyvalue)
{
    print "<td style='font-weight:bold; background-color:wheat;text-align:center;height:25px; width:10%''>" ;
    print  $petvalue;
    print "</td>" ;
}
print "</tr>" ;
print "</table>" ;
?>
</hmtl>
Produces:
Example code for a simple IF statement
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>if example</title>
<?php
//Superglobal variable that returns the request method used to access the script
if($_SERVER["REQUEST_METHOD"] == "POST")
{
// Check that the user has entered a month
 if ($_POST['month'])
 {
   $month = $_POST['month'];
 }
//If statement that determines if the month entered is a summer month
if ( $month >= 6 && $month <=8)
  {
   echo '<p style="color:blue; float:right; margin-right: 1100px"> WELCOME to Summer! </p>';  }
 }
?>
<body>
<!-- Form to enter month data -->
<form method="POST">
  <label for="month"> Enter a month as a digit:</label>
  <input type="text" id="month" name="month" value = "<?php echo ($_POST['month']); ?>">
  <br>
  <input type="submit" value="Submit">
</form>
</body>
</html>
