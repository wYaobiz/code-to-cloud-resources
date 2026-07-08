# PHP Code Examples

Worked code examples for the PHP chapter, drawn from the material used in the course. These are server-side examples: PHP runs on a server rather than in the browser, so each one is presented as source code with a description of the result it produces.

!!! note "About these examples"
    PHP runs on a server, so these examples are shown as code with a description of their output rather than as a live preview. This is a standard way to share server-side code. To run them yourself, place the files on a server with PHP installed.

## PHP Basics

### PHP embedded in HTML

Shows PHP embedded in different parts of an HTML document.

```php
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
```

**Produces:** the page displaying a welcome heading and a line of text, with the variable values inserted by PHP.

[View full source](https://github.com/wYaobiz/code-to-cloud-resources/blob/main/src/ch08-php/embedded-php/index.php){ .md-button }

### Case sensitivity

Demonstrates that variable names are case sensitive while function names are not.

```php
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Case Sensitivity</title>
</head>
<!-- PHP Case Sensitivity of Variables -->
<?php
// Calculate cost
    $final_cost =  110 + (110 * .06);
//Print value of variable $final_cost
    echo ("The value of the variable final_cost is: ");
    echo ("<strong> $" . $final_cost . "</strong>");
  echo("<br><br>");
//Print value of variable $final_Cost
    echo ("The value of the variable final_Cost is: ") ;
    echo ("<strong> $" . $final_Cost . "</strong>");
 ?>
</html>
```

**Produces:** output confirming that differently-cased variable names are treated as separate, while function names work regardless of case.

[View full source](https://github.com/wYaobiz/code-to-cloud-resources/blob/main/src/ch08-php/case-sensitivity/index.php){ .md-button }

### Escape characters

Uses the backslash to include special characters in strings.

```php
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Escape Character Example</title>
</head>
<?php
echo "See how double quotes in PHP interprets what is enclosed in double quotes.";
echo("<br>");
echo "Output a dollar sign: \$";
echo("<br>");
echo "Output double quotes \" Knowledge is power\" around a phrase";
echo ("<br><br>");
echo "See how single quotes in PHP do not interpret what is enclosed in single quotes.";
echo("<br>");
echo 'Output a dollar sign: \$';
echo("<br>");
echo 'Output double quotes \" Knowledge is power\" around a phrase';
?>
</html>
```

**Produces:** text where quotes and other special characters appear literally because they were escaped.

[View full source](https://github.com/wYaobiz/code-to-cloud-resources/blob/main/src/ch08-php/escape-character/index.php){ .md-button }

## Operators

### Assignment operators

Demonstrates +=, -=, *=, /=, and %= on variables.

```php
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Assignment Operator Examples</title>
</head>
<?php
    echo ("<h1> EXAMPLES of ASSIGNMENT OPERATORS</h1>");
//Set initial values for variables
    $result = 25;
    $newresult = $result;
    $operand = 5;
//Perform the += operation
    $result += $operand;
//Print the result of the operation with initial value for $result
   echo ("The result from the expression " . $newresult . "<strong> += </strong>" . $operand . " is " . $result);
   echo("<br><br>");
//Assign the value of result to new variable for printing purposes. Perform the -= operation
    $newresult = $result;
    $result -= $operand;
//Print the result of the operation with new value for $result
echo ("The result from the expression " . $newresult . "<strong> -= </strong>" . $operand . " is " . $result);
echo("<br><br>");
//Assign the value of result to new variable for printing purposes. Perform the *= operation
$newresult = $result;
$result *= $operand;
//Print the result of the operation with new value for $result
echo ("The result from the expression " . $newresult . "<strong> *= </strong>" . $operand . " is " . $result);
echo("<br><br>");
//Assign the value of result to new variable for printing purposes. Perform the /= operation
$newresult = $result;
$result /= $operand;
//Print the result of the operation with new value for $result
echo ("The result from the expression " . $newresult . "<strong> /= </strong>" . $operand . " is " . $result);
echo("<br><br>");
//Assign the value of result to new variable for printing purposes. Perform  %= operation
$newresult = $result;
$result %= $operand;
//Print the result of the operation with new value for $result
echo ("The result from the expression " . $newresult . "<strong> %= </strong>" . $operand . " is " . $result);
echo("<br><br>");
?>
</html>
```

**Produces:** a series of lines each showing the result of applying one compound assignment operator.

[View full source](https://github.com/wYaobiz/code-to-cloud-resources/blob/main/src/ch08-php/assignment-operators/index.php){ .md-button }

### Predefined arithmetic functions

Uses built-in functions such as abs, round, ceil, floor, and sqrt.

```php
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Predefined Arithmetic Functions Examples</title>
</head>
<?php
echo ("<h3> EXAMPLES OF PREDEFINED ARITHMETIC FUNCTIONS</h3>");
//Set initial values for variable
$value = 5;
//Execute the abs() function
$result = abs($value);
//Print the result for the abs() function
echo ("The result from the abs() function. When the value is " . $value .  " <strong> Result: </strong>" . "<em> $result </em>");
echo("<br><br>");
//Set initial values for variable
$value = 5.25;
//Execute the ceil() function
$result = ceil($value);
//Print the result for the ceil() function
echo ("The result from the ceil() function. When the value is " . $value .  " <strong> Result: </strong>" . "<em> $result </em>");
echo("<br><br>");
//Execute the floor() function
$result = floor($value);
//Print the result for the floor() function
echo ("The result from the floor() function. When the value is " . $value .  " <strong> Result: </strong>" . "<em> $result </em>");echo("<br><br>");
//Set initial values for variable
$value = array(300, 50, 100);
//Execute the max() function
$result = max($value);
//Print the result for the max() function
echo ("The result from the max() function. When the value is (300, 50, 100)" .  " <strong> Result: </strong>" . "<em> $result </em>");
echo("<br><br>");
//Execute the min() function
$result = min($value);
//Print the result for the min() function
echo ("The result from the min() function. When the value is (300, 50, 100)" .  " <strong> Result: </strong>" . "<em> $result </em>");
echo("<br><br>");
//Execute the pi() function
$result = pi($value);
//Print the result for the pi() function
echo ("The result from the pi() function is: "  . "<em> $result </em>");
echo("<br><br>");
//Execute the rand() function. The value can be any number from 1 through 10
$result = rand(1, 10);
//Print the result for the rand() function
echo ("The result from the rand() function is when the range is from 1 to 10. <strong> Result: </strong>"  . "<em> $result </em>");
echo("<br><br>");
//Set initial value for variable
$value = 5.2578787;
//Execute the round() function. Number of decimal places to print is 2
$result = round($value, 2);
//Print the result for the round() function
echo ("The result from the round() function. When the value is " . $value .  " and the precision is 2. <strong> Result: </strong>" . "<em> $result </em>");
echo("<br><br>");
//Set initial value for variable
$value = 25;
//Execute the sqrt() function
$result = sqrt($value);
//Print the result for the sqrt() function
echo ("The result from the sqrt() function when the value is " . $value .  " <strong> Result: </strong>" . "<em> $result </em>");
echo("<br><br>");
?>
</html>
```

**Produces:** lines showing the result of each arithmetic function applied to sample numbers.

[View full source](https://github.com/wYaobiz/code-to-cloud-resources/blob/main/src/ch08-php/arithmetic-functions/index.php){ .md-button }

### The .= assignment operator

Appends text to a string with the .= operator.

```php
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
```

**Produces:** a message built up piece by piece as text is appended to the string.

[View full source](https://github.com/wYaobiz/code-to-cloud-resources/blob/main/src/ch08-php/concat-assignment/index.php){ .md-button }

### Relational operators

Compares values with the relational operators.

```php
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
```

**Produces:** lines showing the true or false result of each comparison.

[View full source](https://github.com/wYaobiz/code-to-cloud-resources/blob/main/src/ch08-php/relational-operators/index.php){ .md-button }

## Strings and Output

### String functions

Demonstrates strlen, strtoupper, strtolower, ucfirst, and similar.

```php
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
```

**Produces:** lines showing each string function applied to a sample string.

[View full source](https://github.com/wYaobiz/code-to-cloud-resources/blob/main/src/ch08-php/string-functions/index.php){ .md-button }

### Output functions

Contrasts echo and print, including formatting a cost with tax.

```php
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Output Functions Examples</title>
</head>
<?php
//Figure the cost of an item with tax.
$calculateTax = 275 * .0675;
$answer = 275 + $calculateTax;
//Two different ways to bold the variable $answer
$message = "Calculate cost of an item cost $275 by tax rate of 0.0675%. Final cost with tax = " . "<strong>" .  $answer . "</strong>";
$message = "Calculate cost of an item cost $275 by tax rate of 0.0675%. Final cost with tax = " . "<strong> $answer </strong>";
echo ("<h4> Print Message via the echo statement </h4>");
echo $message;
echo ("<h4> Print Message via the print statement </h4>");
print $message;
echo ("<h4> Print Message via the printf statement </h4>");
//NOTE that to print the % sign two % signs are needed
printf ("Calculate cost of an item cost $275 by tax rate of 0.0675%%. Final cost with tax =  <strong> %.2f </strong> ", $answer);
?>
</html>
```

**Produces:** output produced by both echo and print, including a calculated cost figure.

[View full source](https://github.com/wYaobiz/code-to-cloud-resources/blob/main/src/ch08-php/output-functions/index.php){ .md-button }

## Arrays

### Creating an array with indexes

Creates an indexed array and accesses elements by index.

```php
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
```

**Produces:** the array values printed by their numeric index positions.

[View full source](https://github.com/wYaobiz/code-to-cloud-resources/blob/main/src/ch08-php/array-indexes/index.php){ .md-button }

### Sort functions

Sorts arrays with sort, rsort, asort, and ksort.

```php
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Sort Functions Examples</title>
</head>
<?php
echo "<h2> EXAMPLES OF SORT FUNCTIONS</h2>";
//Initialize the arrays
$pets = array("dog", "cat", "fish", "bird", "lizard", "hamster", "guinea pig", "rabbit");
$petowner = array("dog"=>"Doug", "cat"=>"Cathy", "fish"=>"Finn","bird"=>"Bianca","lizard"=>"Liam", "hamster"=>"Harper", "guinea pig"=>"Gil", "rabbit" => "Rose");
// The sort() function
echo "<h4> sort() function </h4>";
echo ("Original array: pets");
print_r($pets);
echo ("<br><br>");
sort($pets);
print_r($pets);
echo("<br><br>");
// The rsort() function
echo "<h4> rsort() function </h4>";
echo ("Original array: pets");
print_r($pets);
echo ("<br><br>");
rsort($pets);
print_r($pets);
echo("<br><br>");
// The asort() function
echo "<h4> asort() function </h4>";
echo ("Original array: petowner");
print_r($petowner);
echo ("<br><br>");
asort($petowner);
print_r($petowner);
echo("<br><br>");
// The ksort() function
echo "<h4> sort() function </h4>";
echo ("Oiginal array: petowner");
print_r($petowner);
echo ("<br><br>");
rsort($petowner);
print_r($petowner);
?>
</html>
```

**Produces:** arrays displayed before and after sorting, showing the effect of each sort function.

[View full source](https://github.com/wYaobiz/code-to-cloud-resources/blob/main/src/ch08-php/sort-functions/index.php){ .md-button }

## Conditionals

### Simple if statement

Tests a single condition.

```php
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>if example</title>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>ForEach Loop using indexes example</title>
<?php
echo '<h3 style="color:blue" > A List of Common Household Pets</h3>';
//The array to be iterated through
$pets = array("dog", "cat", "fish", "bird", "lizard", "hamster", "guinea pig");
//Counter used in output
$counter = 1;
foreach ($pets as $animal)
{
//Print the counter value followed the string Pet Name followed by pet
  echo  $counter . ". Pet Name: " .$animal;
  $counter++;
  echo "<br><br>";
}
?>
</html>
```

**Produces:** a message shown only when the condition is true.

[View full source](https://github.com/wYaobiz/code-to-cloud-resources/blob/main/src/ch08-php/if-simple/index.php){ .md-button }

### if...else statement

Chooses between two branches.

```php
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>if - else example</title>
<?php
//Superglobal variable that returns the request method used to access the script
if($_SERVER["REQUEST_METHOD"] == "POST")
{
// Check that the user has entered a month
if ($_POST['month'])
 {
   $month = $_POST['month'];
 }
//If  - else block that determines if the month entered is a summer month
if ( $month >= 6 && $month <=8)
 {
   echo '<p style="color:blue; float:right; margin-right: 1100px"> WELCOME to Summer! </p>';
 }
//the else statement allows for an alternative outcome when if statement is not evaluated to true
else
 {
   echo '<p style="color:green; float:right; margin-right: 1100px"> The month entered is not a Summer month </p>';  }
 }
?>
<body>
<!-- Form to enter month data -->
<form method="POST">
  <label for="month">Enter a month as a digit:</label>
  <input type="text" id="month" name="month" value = "<?php echo ($_POST['month']); ?>">
  <br>
  <input type="submit" value="Submit">
</form>
</body>
</html>
```

**Produces:** one of two messages, depending on the tested condition.

[View full source](https://github.com/wYaobiz/code-to-cloud-resources/blob/main/src/ch08-php/if-else/index.php){ .md-button }

### if...else if...else statement

Handles several cases in a chain.

```php
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>if - else if - else example</title>
<?php
//Superglobal variable that returns the request method used to access the script
if($_SERVER["REQUEST_METHOD"] == "POST")
{
// Check that the user has entered an age
 if ($_POST['age'])
 {
   $age = $_POST['age'];
 }
//IF - ELSE IF  ELSE block that determines the age category for an individual based upon age entered
if ( $age > 1 && $age <=4)
  {
      echo '<p style="color:blue; float:right; margin-right: 1350px"> TODDLER!</p>';  }
else if ($age >5 && $age <=12)
  {
      //the else if statement allows for an alternative outcome
      echo '<p style="color:blueviolet; float:right; margin-right: 1300px"> ADOLESCENT!</p>';
  }else if ($age >13 && $age <=19)
  {
      //the else if statement allows for an alternative outcome
      echo '<p style="color:seagreen; float:right; margin-right: 1350px"> TEENAGER!</p>';  }
else
  {
      //the else statement allows for an alternative outcome when none of the other statements evaluate to TRUE
      echo '<p style="color:limegreen; float:right; margin-right: 1350px"> ADULT!</p>';  }
}
?>
<body>
<!-- Form to enter age data -->
<form method="POST">
  <label for="Age">Enter an age:</label>
  <input type="text" id="age" name="age" value = "<?php echo ($_POST['age']); ?>">
  <br>
  <input type="submit" value="Submit">
</form>
</body>
</html>
```

**Produces:** the message matching whichever condition in the chain is true.

[View full source](https://github.com/wYaobiz/code-to-cloud-resources/blob/main/src/ch08-php/if-elseif-else/index.php){ .md-button }

### switch statement

Selects among cases with a switch.

```php
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
```

**Produces:** the output for the matching case in the switch.

[View full source](https://github.com/wYaobiz/code-to-cloud-resources/blob/main/src/ch08-php/switch/index.php){ .md-button }

## Loops

### for loop

Repeats a block a fixed number of times.

```php
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>For Loop example</title>
<?php
//Superglobal variable that returns the request method used to access the script
if($_SERVER["REQUEST_METHOD"] == "POST")
{
 // Check that the user has entered a multiplier
 if ($_POST['multiplier'])
 {
   $Multiplier = $_POST['multiplier'];
 }
//for loop that produces a multiplication table based upon the multiplier entered by the user
for ($counter=1; $counter <=12; $counter+=1)
 {
     $answer = $counter * $Multiplier;
     echo $counter . " multiplied by ". $Multiplier . " = ". $answer;
     echo "<br><br>";
 }
}
?>
<body>
<!--Form to enter movie genre data -->
<h1 style ="color:green">Learn your Multiplication Tables</h1>
<form method="POST">
  <label for="Mulitplier" style = "color: blue; font-weight:bold;">Enter the multiplier of the Multiplication table you want to learn:</label>
  <input type="text" id="multiplier" name="multiplier" value = "<?php echo ($_POST['multiplier']); ?>">
  <br>
  <input type="submit" value="Submit">
</form>
</body>
</html>
```

**Produces:** a sequence of values produced by the loop.

[View full source](https://github.com/wYaobiz/code-to-cloud-resources/blob/main/src/ch08-php/for-loop/index.php){ .md-button }

### foreach loop using keys

Iterates an associative array by key and value.

```php
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>ForEach Loop using keys example</title>
<?php
echo '<h3 style="color:blue" > A List of Common Household Pets</h3>';
//Array with values the pets and keys the pet owners name
$petowner = array("dog"=>"Doug", "cat"=>"Cathy", "fish"=>"Finn","bird"=>"Bianca","lizard"=>"Liam", "hamster"=>"Harper", "guinea pig"=>"Gil");
//loop that prints out the key (owner) followed by string owns by followed pet
foreach ($petowner as $pet => $owner)
{
   echo $owner . " owns a " .$pet;
   echo "<br><br>";
}
?>
</html>
```

**Produces:** each key and its value printed in turn.

[View full source](https://github.com/wYaobiz/code-to-cloud-resources/blob/main/src/ch08-php/foreach-keys/index.php){ .md-button }

### foreach loop building tables

Uses foreach over arrays to build multiplication tables.

```php
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>ForEach Loop for creating multiplication tables using two arrays</title>
<?php
//Two arrays that contain the multipliers
$array1 = array(1, 2, 3, 4, 5,6 ,7,8,9, 10,11,12);
$array2 = array(1, 2, 3, 4, 5,6 ,7,8,9, 10,11,12);
//Print the multiplication tables using the foreach loop
print "<table align= 'center' border='2px' bordercolor = 'blue'>" ;
foreach ($array1 as $operand1)
{
  print "<tr>";
  foreach ($array2 as $operand2)
  {
      print "<td style='font-weight:bold' >" ;
      print "$operand1 x $operand2 = " . $operand1 * $operand2 ;
      print "</td>" ;
  }
print "</tr>" ;
}
print "</table>" ;
?>
</html>
```

**Produces:** multiplication tables generated by looping over the arrays.

[View full source](https://github.com/wYaobiz/code-to-cloud-resources/blob/main/src/ch08-php/foreach-multiplication/index.php){ .md-button }

## Loops (continued)

### do...while loop

Repeats a block at least once, then continues while a condition holds.

```php
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title> do..while loop example</title>
<?php
echo '<h3 style="color:magenta" > A List Desserts in the array</h3>';
//Array that holds different desserts
$desserts = array("cake", "pie", "flan", "brownie","Crème brûlée", "cheesecake", "tiramisu", "ice cream", "cookies");
$counter = 0;
//count() function finds the length of an array in PHP
$arraylength = count($desserts);
//do ..while loop to iterate through the array an print out its contents
do
{
  echo "Dessert : " . $desserts[$counter];
  echo "<br><br>";
  $counter++;
}
while($counter < $arraylength)
?>
</html>
```

**Produces:** the loop body running through the array of desserts, executing at least once.

[View full source](https://github.com/wYaobiz/code-to-cloud-resources/blob/main/src/ch08-php/do-while/index.php){ .md-button }

## Cookies and Sessions

### Cookies

Sets, reads, and deletes a cookie.

```php
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
```

**Produces:** output showing a cookie value being stored, read back on a later request, and then removed.

[View full source](https://github.com/wYaobiz/code-to-cloud-resources/blob/main/src/ch08-php/cookies/index.php){ .md-button }

### Sessions

Starts a session, stores and reads a session variable, then removes it.

```php
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
```

**Produces:** output showing a session value being set, retrieved, and then cleared.

[View full source](https://github.com/wYaobiz/code-to-cloud-resources/blob/main/src/ch08-php/sessions/index.php){ .md-button }

## Strings

### Double vs single quotes

Contrasts how double and single quoted strings handle variables.

```php
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title> Double Quotes vs Single Quotes example</title>
<?php
$Author = 'Charles Dickens';
$Title = 'A Tale of Two Cities ';
$ISBN = "9781454957546";
$Pages = "424";
$Price = "$20.00";
echo "<strong><i>Values enclosed in single quotes are treated literally therefore in this case the variable name is printed and not their values</strong></i>";
echo "<br><br>";
echo ' Author Name : $Author';
echo "<br>";
echo ' Book Title : $Title';
echo "<br>";
echo ' ISBN : $ISBN';
echo "<br>";
echo ' Pages : $Pages';
echo "<br>";
echo ' Price : $Price';
echo "<br><br>";
echo "<strong><i>Values enclosed in double quotes are interpreted therefore in this case the variables' values are printed </strong></i>";
echo "<br>";
echo "<br> Author Name : $Author";
echo "<br>";
echo " Book Title : $Title";
echo "<br>";
echo " ISBN : $ISBN";
echo "<br>";
echo " Pages : $Pages";
echo "<br>";
echo " Price : $Price";
echo "<br><br>";
echo "<strong><i>Values enclosed in single quotes within a string are treated literally so the variables need to be outside the quotes to print actual value </strong></i>";
echo "<br>";
echo '<p> Author name: <strong>'. $Author. '</strong> <br> Novel Title: <strong>' . $Title . '</strong> <br>  ISBN: <strong> '. $ISBN .'</strong> <br> Number of Pages: <strong>' . $Pages . '</strong> <br> Price: <strong>' . $Price .'</strong> </p>';
echo "<br>";
echo "<strong> <i> Values enclosed in double quotes within a string are interpreted so they can be enclosed within the quotes to print actual value </strong> </i>";
echo "<br>";
echo "<p> Author Name <strong> $Author </strong> <br> Novel Title: <strong> $Title  </strong> <br> ISBN: <strong> $ISBN  </strong> <br> Number of Pages: <strong> $Pages  </strong> <br> Price: <strong> $Price</strong></p>";
?>
</html>
```

**Produces:** two lines showing that double quotes insert the variable's value while single quotes print the variable name literally.

[View full source](https://github.com/wYaobiz/code-to-cloud-resources/blob/main/src/ch08-php/quotes/index.php){ .md-button }

## Functions and Scope

### Functions

Defines a function that calculates a cost and returns the result.

```php
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title> Functions example</title>
<?php
//Function that calculates cost and returns the value of $cost
function totalCost ()
{
  $cost = (100 + 50 + 50);
  return $cost += ($cost * .10);
}
//Print out the total cost after a call to the function totalCost which calculates the cost
echo ("The total cost is $" . totalCost());
?>
</html>
```

**Produces:** the calculated cost returned by the function and printed.

[View full source](https://github.com/wYaobiz/code-to-cloud-resources/blob/main/src/ch08-php/functions-return/index.php){ .md-button }

### Type checking in a function

Uses a function to check the type of a passed value.

```php
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title> Function that checks for type of variable example</title>
</head>
<?php
 //Function to check if the number passed into a function is an integer or float value
function integerOrFloat ($number)
{
  if(is_int($number))
   {
   echo ("The number " . $number . " is an integer");
     echo("<br><br>");
   }
  else
   {
   echo ("The number " . $number . " is a float");
   }
}
//Call/Execute the function
integerOrFloat (200);
integerOrFloat (25.75);
?>
</html>
```

**Produces:** a message reporting the type of the value passed into the function.

[View full source](https://github.com/wYaobiz/code-to-cloud-resources/blob/main/src/ch08-php/function-type-check/index.php){ .md-button }

### Pass by value

Passes a parameter by value, leaving the original unchanged.

```php
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title> Pass By Value example</title>
</head>
<?php
//Function that passes in a parameter by value
 function passByValue($number)
  {
     $number = ($number + 5) * 5 / 2 ;
  }
//Initialize parameter value, print the value before function execution, call the function and //print the value of the parameter after execution
$num = 5;
echo ("Value before function call: " . $num);
passByValue($num);
echo ("<br><br>");
echo("Value after function call: " . $num);
?>
</html>
```

**Produces:** the variable's value shown before and after the call, unchanged by the function.

[View full source](https://github.com/wYaobiz/code-to-cloud-resources/blob/main/src/ch08-php/pass-by-value/index.php){ .md-button }

### Pass by reference

Passes a parameter by reference so the function can change the original.

```php
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title> Pass By Reference example</title>
</head>
<?php
//Function that passes in a parameter by reference
 function passByReference(&$number)
  {
     $number = ($number + 5) * 5 / 2 ;
  }
//Initialize parameter value, print the value before function execution, call the function and print the value of the parameter after execution
$num = 5;
echo ("Value before function call: " . $num);
passByReference($num);
echo ("<br><br>");
echo("Value after function call: " . $num);
?>
</html>
```

**Produces:** the variable's value shown before and after the call, changed by the function.

[View full source](https://github.com/wYaobiz/code-to-cloud-resources/blob/main/src/ch08-php/pass-by-reference/index.php){ .md-button }

### Local scope

A variable defined inside a function is not visible outside it.

```php
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
```

**Produces:** output confirming the variable is available inside the function but not outside.

[View full source](https://github.com/wYaobiz/code-to-cloud-resources/blob/main/src/ch08-php/local-scope/index.php){ .md-button }

### Global scope

The global keyword lets a function reach a variable defined outside it.

```php
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
```

**Produces:** the same message displayed both inside and outside the function using the global keyword.

[View full source](https://github.com/wYaobiz/code-to-cloud-resources/blob/main/src/ch08-php/global-scope/index.php){ .md-button }

