# JavaScript Code Examples

Worked code examples for the JavaScript chapter, drawn from the material used in the course. Each example shows the complete, runnable source with explanatory comments, followed by a live preview and a button to view the full source on GitHub. Every example lives in its own folder under `src/ch06-javascript/`.

!!! note "Live previews"
    Each example below shows a live preview rendered directly in your browser, followed by a button to view the full source on GitHub. Some examples respond to a button click, a form submission, or mouse movement, so interact with the preview to see them work. These run entirely in the browser, so no server is required.

## Loops

### for...in loop

Iterates over the properties of an object.

```html
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>for-inexample</title>
<script>
//JavaScript that iterates through objects
function getPetOwner()
{
const pet = {pettype: "dog", petname: "Dante", petowner: "Doug"};
for (const petinfo in pet)
  {
     document.write(`${petinfo}: ${pet[petinfo]}`);
     document.write("<br>");
  }
}
</script>
</head>
<body onload ="getPetOwner()">
</body>
</html>
```

**Produces:** each property of the object printed as a name and value, written to the page on load.

<iframe src="../../examples/ch06-javascript/for-in-loop/index.html" style="width:100%; height:160px; border:1px solid var(--md-default-fg-color--lightest); border-radius:4px; background:white; margin-bottom:0.5rem;" title="Live preview of for-in-loop" loading="lazy"></iframe>

[View full source](https://github.com/wYaobiz/code-to-cloud-resources/blob/main/src/ch06-javascript/for-in-loop/index.html){ .md-button }

### for...of loop

Iterates over the values of an iterable.

```html
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>for-of example</title>
<script>
//JavaScript that uses a for of loop to iterate through objects
function getPetOwner()
{
const pet = ["dog", "Dante", "Doug"];
for (const petinfo of pet)
 {
   document.write(petinfo);
   document.write("<br>");
 }
}
</script>
</head>
<body onload ="getPetOwner()">
</body>
</html>
```

**Produces:** each value of the iterable printed in turn.

<iframe src="../../examples/ch06-javascript/for-of-loop/index.html" style="width:100%; height:160px; border:1px solid var(--md-default-fg-color--lightest); border-radius:4px; background:white; margin-bottom:0.5rem;" title="Live preview of for-of-loop" loading="lazy"></iframe>

[View full source](https://github.com/wYaobiz/code-to-cloud-resources/blob/main/src/ch06-javascript/for-of-loop/index.html){ .md-button }

### for loop

Iterates a fixed number of times with a for loop.

```html
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>for example</title>
<script>
//JavaScript that uses a for loop to iterate through the statements and print out multiplication table.
function Multiply()
{
//Retrieve the data entered
let factor = document.getElementById("factor").value;
for (counter=1; counter <=12; counter+=1)
 {
     product = counter * factor;
      //Use the concatenation operator (+) to create the output string
     document.write(counter + " multiplied by " +  factor + " = " + product);
     document.write("<br><br>");
 }
}
</script>
</head>
<body>
<!--Form to enter factor for multiplication table -->
<h1 style ="color:green">Learn your Multiplication Tables</h1>
<form method = "GET" onsubmit="Multiply();">
 <label for="Mulitplier" style = "color: blue; font-weight:bold;">Enter the factor of the Multiplication table you want to learn:</label>
  <input type="text" id="factor" >
  <br>
  <input type="submit" value="Submit">
</form>
</body>
</html>
```

**Produces:** values printed in sequence by the loop.

<iframe src="../../examples/ch06-javascript/for-loop/index.html" style="width:100%; height:160px; border:1px solid var(--md-default-fg-color--lightest); border-radius:4px; background:white; margin-bottom:0.5rem;" title="Live preview of for-loop" loading="lazy"></iframe>

[View full source](https://github.com/wYaobiz/code-to-cloud-resources/blob/main/src/ch06-javascript/for-loop/index.html){ .md-button }

### do...while loop

Prints values using a do...while loop, which runs at least once.

```html
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>for example</title>
<script>
//JavaScript that uses a do..while loop to print out a multiplication table
function Multiply()
{
//Retrieve the data entered
let factor = document.getElementById("factor").value;
counter = 0;
do
{
   product = counter * factor;
     document.write(counter + " multiplied by " +  factor + " = " + product);
   document.write("<br><br>");
  counter++;
 }
while(counter <= 12)
}
</script>
</head>
<body>
<!--Form to enter factor for multiplication table -->
<h1 style ="color:green">Learn your Multiplication Tables</h1>
<form method = "GET" onsubmit="Multiply();">
 <label for="Mulitplier" style = "color: blue; font-weight:bold;">Enter the factor of the Multiplication table you want to learn:</label>
  <input type="text" id="factor" >
  <br>
  <input type="submit" value="Submit">
</form>
</body>
</html>
```

**Produces:** a sequence of values produced by the loop.

<iframe src="../../examples/ch06-javascript/do-while/index.html" style="width:100%; height:160px; border:1px solid var(--md-default-fg-color--lightest); border-radius:4px; background:white; margin-bottom:0.5rem;" title="Live preview of do-while" loading="lazy"></iframe>

[View full source](https://github.com/wYaobiz/code-to-cloud-resources/blob/main/src/ch06-javascript/do-while/index.html){ .md-button }

### Multiplication table

Produces a multiplication table using a for loop driven by a form value.

```html
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>for example</title>
<script>
//JavaScript that produces a multiplication table based upon the factor entered by the user
function Multiply()
{
//Retrieve the data entered
let factor = document.getElementById("factor").value;
counter = 1;
while(counter <= 12)
{
   product = counter * factor;
     document.write(counter + " multiplied by " +  factor + " = " + product);
   document.write("<br><br>");
  counter++;
 }
}
</script>
</head>
<body>
<!--Form to enter factor for multiplication table -->
<h1 style ="color:green">Learn your Multiplication Tables</h1>
<form method = "GET" onsubmit="Multiply();">
 <label for="Mulitplier" style = "color: blue; font-weight:bold;">Enter the factor of the Multiplication table you want to learn:</label>
  <input type="text" id="factor" >
  <br>
  <input type="submit" value="Submit">
</form>
</body>
</html>
```

**Produces:** a form that generates and displays a multiplication table for the entered number.

<iframe src="../../examples/ch06-javascript/multiplication-table/index.html" style="width:100%; height:200px; border:1px solid var(--md-default-fg-color--lightest); border-radius:4px; background:white; margin-bottom:0.5rem;" title="Live preview of multiplication-table" loading="lazy"></iframe>

[View full source](https://github.com/wYaobiz/code-to-cloud-resources/blob/main/src/ch06-javascript/multiplication-table/index.html){ .md-button }

## Arrays

### One-dimensional array

Creates a one-dimensional array and prints its values and their indexes in a table.

```html
<!DOCTYPE html>
<html>
<head>
<title>One Dimensional Array </title>
<!-- Styling for table elements -->
<style>
table, th, td
 {
  border: 2px solid black;
  border-collapse: collapse;
 }
  table{width:100%;}
td
 {
  background-color:wheat;
  text-align: center;
  width:10%;
 }
th
  {
  background-color:burlywood;
  font-weight: bold;
  text-align: center;
  width:10%
   }
</style>
</head>
<body>
<!-- Display array elements and indexes -->
<table style="width:50%;">
<tr>
    <th>ARRAY VALUES</th>
 <script>
//Create a one dimensional - indexed array
  pet = ["dog", "cat", "fish", "bird", "lizard", "hamster", "guinea pig"];
 for (var i = 0; i < pet.length; i++) {
      document.write("<td>" + pet[i] + "</td>");
    }
    document.write("<br>");
  document.write( "<tr>");
  document.write("<th>INDEX VALUES:</th>");
 for (var i = 0; i < pet.length; i++)
   {
    document.write("<td>" + i + "</td>");
   }
 document.write("</tr>");
 </script>
</tr>
</table>
</body>
</html>
```

**Produces:** a table showing the array values in one row and their index numbers in the next.

<iframe src="../../examples/ch06-javascript/array-1d/index.html" style="width:100%; height:200px; border:1px solid var(--md-default-fg-color--lightest); border-radius:4px; background:white; margin-bottom:0.5rem;" title="Live preview of array-1d" loading="lazy"></iframe>

[View full source](https://github.com/wYaobiz/code-to-cloud-resources/blob/main/src/ch06-javascript/array-1d/index.html){ .md-button }

### Two-dimensional array in a table

Builds an HTML table from a two-dimensional array of book data.

```html
<!DOCTYPE html>
<html>
<head>
<title>HTML Table with Array Data</title>
<!-- Create table for array elements -->
<style>
table, th, td
 {
  border: 2px solid black;
  border-collapse: collapse;
 }
  table{width:100%;}
td
 {
  background-color:wheat;
  text-align: center;
  width:10%;
  height:25px;
  width:25%'
 }
th
  {
  background-color:burlywood;
  font-weight: bold;
  text-align: center;
  width:25%
   }
</style>
</head>
<body>
<table style="width:50%;">
 <script>
//Create a Two Dimensional Array
  childrenbook =
   [
      ["Beatrix Potter", "The Tale of Peter Rabbit", 9780723247708],
      ["Eric Carle", "The Very Hungry Caterpillar", 9780399226908],
      ["Marcus Pfister", "The Rainbow Fish", 9783314015441],
   ];
//Determine the length of the array and subtract one
 length = childrenbook.length -1;
counter = 0;
//Loop todispaly array elements and indexes
while(counter <= length){
document.write("<tr>");
document.write("<th>ARRAY VALUES</th>");
 for (let i = 0; i <= length; i++) {
      document.write("<td>" + childrenbook[counter][i] + "</td>");
 }
  document.write("<tr>");
document.write("<th>INDEX VALUES</th>");
  for(let j= 0; j <= length; j++){
    document.write("<td> [" + counter + "], [" + j + "] </td>");
  }
document.write("</tr>");
document.write("</tr>");
counter++
}
</script>
</table>
</body>
Produces
COLUMN
NOTE: that a multidimensional array will has two indexes.
The first index will represent the row.
The second will represent the column.
ROW
Childrenbook[1][2]
Example code of Conditional Assignment Operator
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Conditional Assignment Operator</title>
</head>
 <script>
/*Conditional Assignment Operator Allows user to enter a type of food and choice is made as to what food to eat*/
function getFoodType()
{
let whattoeat = document.getElementById('whattoeat').value;
var typeofFood = (whattoeat == "Italian") ? "Spaghetti" : "Paella";
alert(typeofFood);
}
 </script>
<body>
<!--Form to enter type of food to eat -->
<form onsubmit="getFoodType();">
  <label for="TypeOfFood">Enter the type of food you would like to try:</label>
  <input type="text" id="whattoeat">
  <br>
  <input type="submit" value="Submit">
</form>
</body>
</html>
```

**Produces:** a bordered table where each pair of rows shows an author's details and the matching array indexes.

<iframe src="../../examples/ch06-javascript/array-2d-table/index.html" style="width:100%; height:320px; border:1px solid var(--md-default-fg-color--lightest); border-radius:4px; background:white; margin-bottom:0.5rem;" title="Live preview of array-2d-table" loading="lazy"></iframe>

[View full source](https://github.com/wYaobiz/code-to-cloud-resources/blob/main/src/ch06-javascript/array-2d-table/index.html){ .md-button }

## Conditionals

### Simple if statement

Checks an entered month number against a condition with a single if.

```html
<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
<title>if example</title>
<script>
//JavaScript function that checks the value entered against an if statement
function getMonth()
{
//Retrieve the data entered from the form
let monthentered = document.getElementById("month").value;
//If statement that determines if the month entered is a summer month
if (monthentered >= 6 && monthentered <=8)
  {
    alert ("WELCOME to Summer");
 }
}
</script>
</head>
<body>
<!-- Form to enter month data and call function getMonth when submit button is clicked -->
<form method = "GET" onsubmit="getMonth();">
<label for="month">Enter a month as a digit</label>
  <input type="text" id="month">
  <br>
  <input type="submit" value="Submit">
</form>
</body>
</html>
```

**Produces:** a form that, on submit, alerts a welcome message when the entered month falls in summer.

<iframe src="../../examples/ch06-javascript/if-simple/index.html" style="width:100%; height:140px; border:1px solid var(--md-default-fg-color--lightest); border-radius:4px; background:white; margin-bottom:0.5rem;" title="Live preview of if-simple" loading="lazy"></iframe>

[View full source](https://github.com/wYaobiz/code-to-cloud-resources/blob/main/src/ch06-javascript/if-simple/index.html){ .md-button }

### if...else statement

Adds an else branch to handle the non-matching case.

```html
<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
<title>if example</title>
<script>
//JavaScript function that checks the value entered against an if - else statement
function getMonth()
{
let monthentered = document.getElementById("month").value;
//If statement that determines if the month entered is a summer month
if (monthentered >= 6 && monthentered <=8)
  {
    alert ("WELCOME to Summer");
  }
//Else statement executed if it is not a summer month
else
 {
    alert("The month entered is not a Summer month")
 }
}
</script>
</head>
<body>
<!-- Form to enter month data -->
<form method = "GET" onsubmit="getMonth();">
<label for="month">Enter a month as a digit</label>
  <input type="text" id="month">
  <br>
  <input type="submit" value="Submit">
</form>
</body>
</html>
```

**Produces:** a form that alerts one of two messages depending on the entered month.

<iframe src="../../examples/ch06-javascript/if-else/index.html" style="width:100%; height:140px; border:1px solid var(--md-default-fg-color--lightest); border-radius:4px; background:white; margin-bottom:0.5rem;" title="Live preview of if-else" loading="lazy"></iframe>

[View full source](https://github.com/wYaobiz/code-to-cloud-resources/blob/main/src/ch06-javascript/if-else/index.html){ .md-button }

### if...else if...else statement

Uses an if...else if...else chain to handle several ranges.

```html
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>if example</title>
<script>
//JavaScript function that checks the value entered against an if - else  if - else statement
function getMonth()
{
let monthentered = document.getElementById("month").value;
//If statement that determines if the month entered is a Summer month
if (monthentered >= 6 && monthentered <=8)
  {
    alert ("WELCOME to Summer");
  }
//Else if statement executed if it is a Fall month
else if (monthentered >= 9 && monthentered <=11)
  {
    alert ("WELCOME to Fall");
  }
//Else if statement executed if it is a Spring month
 else if (monthentered >= 3 && monthentered <=4)
  {
    alert ("WELCOME to Spring");
  }
//Else  statement executed if it is a Winter month
else
 {
    alert("WELCOME to Winter")
 }
}
</script>
</head>
<body>
<!-- Form to enter month data -->
<form method = "GET" onsubmit="getMonth();">
<label for="month">Enter a month as a digit</label>
  <input type="text" id="month">
  <br>
  <input type="submit" value="Submit">
</form>
</body>
</html>
```

**Produces:** a form that selects among several messages based on the entered value.

<iframe src="../../examples/ch06-javascript/if-else-if/index.html" style="width:100%; height:140px; border:1px solid var(--md-default-fg-color--lightest); border-radius:4px; background:white; margin-bottom:0.5rem;" title="Live preview of if-else-if" loading="lazy"></iframe>

[View full source](https://github.com/wYaobiz/code-to-cloud-resources/blob/main/src/ch06-javascript/if-else-if/index.html){ .md-button }

### switch statement

Selects a result from an entered value using a switch statement.

```html
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>switch example</title>
<script>
//JavaScript that uses a switch statement to determine the movie genre entered
function getMovieGenre()
{
//Retrieve the data entered
let MovieGenre = document.getElementById("moviegenre").value;
switch (MovieGenre)
 {
//Case statement that determines the movie genre based upon user input
  case "Drama":
    movie = "Interstellar";
    break;
  case "Horror":
    movie = "It";
    break;
  case "Romance":
    movie = "Titanic";
    break;
  case "Sci-Fi":
    movie = "Dune";
    break;
  default:
    movie = "Other";
 }
 alert(movie);
}
</script>
</head>
<body>
<!--Form to enter movie genre data -->
<form method = "GET" onsubmit="getMovieGenre();">
  <label for="MovieGenre">Enter a movie genre:</label>
  <input type="text" id="moviegenre">
  <br>
  <input type="submit" value="Submit">
</form>
</body>
</html>
```

**Produces:** a form that, on submit, alerts a response chosen by the switch.

<iframe src="../../examples/ch06-javascript/switch/index.html" style="width:100%; height:140px; border:1px solid var(--md-default-fg-color--lightest); border-radius:4px; background:white; margin-bottom:0.5rem;" title="Live preview of switch" loading="lazy"></iframe>

[View full source](https://github.com/wYaobiz/code-to-cloud-resources/blob/main/src/ch06-javascript/switch/index.html){ .md-button }

## Form Validation and Interactivity

### Credit card validation

Validates a card number against a regular expression on submit.

```html
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Check Credit Card</title>
<script>
//Function to validate credit card number
function checkcard()
{
   //REGEX pattern for a credit card number which matches the token [0-9] exactly 4 times. This token must consist of 4 digits
  let pattern = /^([0-9]{4} ){3}[0-9]{4}$/;
  //Retrieve the valueentered by the user from the form
  let cardentered= document.getElementById("card").value
  //check credit card number entered against REGEX pattern. Output is based on whether it matches or not
  if (cardentered.search (pattern) == -1 )
   {
   alert ("INVALID CREDIT CARD ENTERED! RE-ENTER")
     return false;
   }
  else
   {
  alert ("VALID CREDIT CARD ENTERED!")
  return true;
   }
}
</script>
</head>
<body>
<!-- HTML form to enter credit cars number  -->
<form action="" onsubmit="return checkcard()">
   Enter Card #: <input type="text" id = "card" name="card" placeholder="Enter Card Number" title="A Valid Credit card will consist of 16 digits and has a space after every 4 digits"/>
   <br>
   <br>
   <input type="submit">
</form>
</body>
</html>
```

**Produces:** a form that alerts whether the entered number matches the required format.

<iframe src="../../examples/ch06-javascript/credit-card-check/index.html" style="width:100%; height:140px; border:1px solid var(--md-default-fg-color--lightest); border-radius:4px; background:white; margin-bottom:0.5rem;" title="Live preview of credit-card-check" loading="lazy"></iframe>

[View full source](https://github.com/wYaobiz/code-to-cloud-resources/blob/main/src/ch06-javascript/credit-card-check/index.html){ .md-button }

### Toggling between images

Swaps an image between two pictures each time it is clicked.

```html
<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="utf-8"/>
 <title>JavaScript - Changing images between SunRise and Full Moon</title>
 <script type="text/javascript">
  /* This program will swap an image when it is clicked by using the getElementById() method
 The program will use an current_image variable to keep track of which image is currently displayed
 We can use an IF statement to check if the orange picture is being displayed,
 then swap with the other one, and vice versa. Initially image will be sunrise.
 */
 var current_image = 'Sunrise';
 function swapimage(){
 var initial_image = document.getElementById('sunrise');
 if(current_image=='Sunrise')
  {
   initial_image.src='fullmoon.jpeg';
   current_image='Fullmoon';
  }
 else
  {
   initial_image.src='sunrise.jpeg';
   current_image='Sunrise';
  }
 }
</script>
</head>
<body>
  <img src="sunrise.jpeg" alt="Sunrise" id="sunrise" onclick="swapimage();">
</body>
</html>
```

**Produces:** an image (a sunrise) that switches to a full moon and back on each click.

<iframe src="../../examples/ch06-javascript/image-toggle/index.html" style="width:100%; height:220px; border:1px solid var(--md-default-fg-color--lightest); border-radius:4px; background:white; margin-bottom:0.5rem;" title="Live preview of image-toggle" loading="lazy"></iframe>

[View full source](https://github.com/wYaobiz/code-to-cloud-resources/blob/main/src/ch06-javascript/image-toggle/index.html){ .md-button }

### Mouse enter and leave

Changes a text element's style on the mouseenter and mouseleave events.

```html
<!DOCTYPE html>
<html>
<head>
<style>
.MouseOutText
  {
      font-size:25pt;
      font-family: 'italic';
      color:blue;
      position:relative;
      left: 30px;
  }
.MouseOverText
  {
      font-size:20pt;
      font-family: 'Times New Roman';
      color: green;
      position:relative;
      left: 500px;
  }
</style>
</head>
<body>
  <p >
    <span class="regText" id="phrase" onmouseenter="mouseOver()"
      onmouseleave="mouseOut()">
       See what happens when you move the mouse on and off this text!!!!!
    </span>
  </p>
<script>
function mouseOver(phrase)
{
   document.getElementById("phrase").className= "MouseOverText";
 }
function mouseOut(phrase)
{
   document.getElementById("phrase").className= "MouseOutText";
}
</script>
</body>
</html>
```

**Produces:** text that restyles itself as the pointer moves onto and off of it.

<iframe src="../../examples/ch06-javascript/mouse-enter-leave/index.html" style="width:100%; height:140px; border:1px solid var(--md-default-fg-color--lightest); border-radius:4px; background:white; margin-bottom:0.5rem;" title="Live preview of mouse-enter-leave" loading="lazy"></iframe>

[View full source](https://github.com/wYaobiz/code-to-cloud-resources/blob/main/src/ch06-javascript/mouse-enter-leave/index.html){ .md-button }

### Mouse over and out

Changes a text element's style on the mouseover and mouseout events.

```html
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Mouse Over and Mouse Out</title>
  <style>
    .MouseOutText {
      font-size: 25pt;
      font-family: italic;
      color: blue;
    }
    .MouseOverText {
      font-size: 20pt;
      font-family: 'Times New Roman';
      color: green;
    }
  </style>
</head>
<body>
  <div id="TextToChange" onmouseover="mouseOver()" onmouseout="mouseOut()">
    See what happens when you move the mouse on and off this text!!!!!
  </div>
  <script>
    function mouseOver() {
      document.getElementById("TextToChange").className = "MouseOverText";
    }
    function mouseOut() {
      document.getElementById("TextToChange").className = "MouseOutText";
    }
  </script>
</body>
</html>
```

**Produces:** text that restyles itself as the pointer moves over and out.

<iframe src="../../examples/ch06-javascript/mouse-over-out/index.html" style="width:100%; height:140px; border:1px solid var(--md-default-fg-color--lightest); border-radius:4px; background:white; margin-bottom:0.5rem;" title="Live preview of mouse-over-out" loading="lazy"></iframe>

[View full source](https://github.com/wYaobiz/code-to-cloud-resources/blob/main/src/ch06-javascript/mouse-over-out/index.html){ .md-button }

## Selecting Elements

### Classic selection methods

Selects elements using the classic DOM selection methods.

```html
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Classic Selection Methods</title>
</head>
<body>
  <h1>My Favorite Foods Around the World</h1>
  <div id="foodList">
     <ul class = "foodOfWorld">
                 <li> Kibbeh </li>
       <li> Irish Soda Bread </li>
       <li> Lasagna</li>
       <li> Paella</li>
       <li> Pad Thai</li>
       <li> Tandoori</li>
    </ul>
    </div>
</body>
<script>
 let foodId = document.getElementById("foodList");
 let foodClass = document.getElementsByClassName("foodOfWorld");
 let foodName = document.getElementsByTagName("li");
 console.log(foodId);
 console.log(foodClass);
 console.log(foodName);
</script>
</html>
```

**Produces:** elements located and updated through the classic selection approach.

<iframe src="../../examples/ch06-javascript/classic-selection/index.html" style="width:100%; height:180px; border:1px solid var(--md-default-fg-color--lightest); border-radius:4px; background:white; margin-bottom:0.5rem;" title="Live preview of classic-selection" loading="lazy"></iframe>

[View full source](https://github.com/wYaobiz/code-to-cloud-resources/blob/main/src/ch06-javascript/classic-selection/index.html){ .md-button }

### Newer selection methods

Selects elements using the newer query selection methods.

```html
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>The Newer Selection Methods</title>
</head>
<body>
  <h1>My Favorite Foods Around the World</h1>
  <div id="foodList">
     <ul class = "foodOfWorld">
          <li> Kibbeh </li>
       <li> Irish Soda Bread </li>
       <li> Lasagna</li>
       <li> Paella</li>
       <li> Pad Thai</li>
       <li> Tandoori</li>
    </ul>
    </div>
</body>
<script>
 let listSelector = document.querySelector("#foodList ul");
 let divSelector= document.querySelector("h1");
 let listitemsSelector = document.querySelectorAll("#foodList .foodOfWorld li");
 console.log(listSelector);
 console.log(divSelector);
 console.log(listitemsSelector);
</script>
</html>
```

**Produces:** elements located through the newer query methods.

<iframe src="../../examples/ch06-javascript/newer-selection/index.html" style="width:100%; height:180px; border:1px solid var(--md-default-fg-color--lightest); border-radius:4px; background:white; margin-bottom:0.5rem;" title="Live preview of newer-selection" loading="lazy"></iframe>

[View full source](https://github.com/wYaobiz/code-to-cloud-resources/blob/main/src/ch06-javascript/newer-selection/index.html){ .md-button }

### getElementById via a form

Reads a value entered in a form using getElementById.

```html
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>getElementById via a form</title>
<script>
 function getInformation()
Retrieves the data entered in to the HTML form
  {    let employeeName = document.getElementById("employeeName").value;
    let employeeID = document.getElementById("employeeID").value;
    document.write("The name of the employee is: " + employeeName);
  document.write("<br>");
  document.write("The ID of the employee is: " + employeeID);
  }
The onsubmit button will call the JavaScript function getInformation()
 </script></head>
<body>
  <form method = "GET"  onsubmit="return getInformation();">
     Enter your Name:<input type= "text" id="employeeName"/>
     <br>
     Enter your ID Number:<input type= "text" id="employeeID"/>
     <br>
     <input type="submit" value= "SUBMIT"/>
  </form>
</body>
</html>
```

**Produces:** a form whose entered value is retrieved and used by the script.

<iframe src="../../examples/ch06-javascript/getelementbyid-form/index.html" style="width:100%; height:160px; border:1px solid var(--md-default-fg-color--lightest); border-radius:4px; background:white; margin-bottom:0.5rem;" title="Live preview of getelementbyid-form" loading="lazy"></iframe>

[View full source](https://github.com/wYaobiz/code-to-cloud-resources/blob/main/src/ch06-javascript/getelementbyid-form/index.html){ .md-button }

## Element Properties

### The style property

Changes an element's appearance through the style property.

```html
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Style Property</title>
  </head>
<body>
<h1>My Favorite Foods Around the World</h1>
  <div id="Lebanon">
     <ul class = "foodOfLebanon">
     <li> Kibbeh </li>
       <li> Hummus </li>
       <li> Shawarma</li>
       <li> Baba Ghanoush</li>
       <li> Fattoush</li>
    </ul>
    </div>
  <div id = "Irish">
     <ul class = "foodOfIreland">
     <li> Shepherd Pie </li>
       <li> Irish Soda Bread </li>
       <li> Irish Stew</li>
       <li> Corned Beef</li>
       <li> Potato Soup</li>
    </ul>
    </div>
</body>
<script>
 let food1 = document.getElementById("Lebanon");
 food1.style.backgroundColor =  "red"; // changes background color of element to red
 food1.style.fontFamily = "cursive"; // changes font family of element to cursive
 let food2 =  document.getElementById("Irish");
 food2.style.backgroundColor =  "#4cbb17";
// changes background color of element to Kelly Green
 food1.style.fontFamily = "Times New Roman";
// changes font family of element to Times New Roman
 </script>
</html>
```

**Produces:** an element whose background color is changed by the script.

<iframe src="../../examples/ch06-javascript/style-property/index.html" style="width:100%; height:180px; border:1px solid var(--md-default-fg-color--lightest); border-radius:4px; background:white; margin-bottom:0.5rem;" title="Live preview of style-property" loading="lazy"></iframe>

[View full source](https://github.com/wYaobiz/code-to-cloud-resources/blob/main/src/ch06-javascript/style-property/index.html){ .md-button }

### tagName and id properties

Reads the tagName and id properties of an element.

```html
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>tagName and id Properties</title>
  </head>
<body>
<h1 id = "heading" >My Favorite Foods Around the World</h1>
  <div id="Lebanon">
     <ul class = "foodOfLebanon">
     <li> Kibbeh </li>
       <li> Hummus </li>
       <li> Shawarma</li>
       <li> Baba Ghanoush</li>
       <li> Fattoush</li>
    </ul>
    </div>
  <div id = "Irish">
     <ul class = "foodOfIreland">
     <li> Shepherd Pie </li>
       <li> Irish Soda Bread </li>
       <li> Irish Stew</li>
       <li> Corned Beef</li>
       <li> Potato Soup</li>
    </ul>
    </div>
</body>
<script>
 let heading  = document.getElementById("heading");
 console.log(heading.tagName);
 console.log(heading.id);
 let food1 = document.getElementById("Lebanon");
 food1.style.backgroundColor =  "red"; // changes background color of element to red
 food1.style.fontFamily = "cursive"; // changes font family of element to cursive
 let food2 =  document.getElementById("Irish");
 food2.style.backgroundColor =  "#4cbb17";
// changes background color of element to Kelly Green
 food1.style.fontFamily = "Times New Roman";
// changes font family of element to Times New Roman
 </script>
</html>
```

**Produces:** the element's tag name and id reported by the script.

<iframe src="../../examples/ch06-javascript/tagname-id/index.html" style="width:100%; height:180px; border:1px solid var(--md-default-fg-color--lightest); border-radius:4px; background:white; margin-bottom:0.5rem;" title="Live preview of tagname-id" loading="lazy"></iframe>

[View full source](https://github.com/wYaobiz/code-to-cloud-resources/blob/main/src/ch06-javascript/tagname-id/index.html){ .md-button }

### The innerHTML property

Sets or returns an element's HTML content with innerHTML.

```html
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>innerHTML Property</title>
  </head>
<body>
<h1 id = "heading" >My Favorite Foods Around the World</h1>
  <div id="Lebanon">
     <ul class = "foodOfLebanon">
     <li> Kibbeh </li>
       <li> Hummus </li>
       <li> Shawarma</li>
       <li> Baba Ghanoush</li>
       <li id = "salad"> Fattoush</li>
    </ul>
    </div>
  <div id = "Irish">
     <ul class = "foodOfIreland">
     <li> Shepherd Pie </li>
       <li> Irish Soda Bread </li>
       <li> Irish Stew</li>
       <li> Corned Beef</li>
       <li> Potato Soup</li>
    </ul>
    </div>
</body>
<script>
 document.getElementById("salad").innerHTML = "Tabbouleh";
 let food1 = document.getElementById("Lebanon");
 food1.style.backgroundColor =  "red"; // changes background color of element to red
 food1.style.fontFamily = "cursive"; // changes font family of element to cursive
 let food2 =  document.getElementById("Irish");
 food2.style.backgroundColor =  "#4cbb17"; // changes background color of element to Kelly Green
 food1.style.fontFamily = "Times New Roman"; // changes font family of element to Times New Roman
 </script>
</html>
```

**Produces:** an element whose inner HTML is read or replaced by the script.

<iframe src="../../examples/ch06-javascript/innerhtml/index.html" style="width:100%; height:180px; border:1px solid var(--md-default-fg-color--lightest); border-radius:4px; background:white; margin-bottom:0.5rem;" title="Live preview of innerhtml" loading="lazy"></iframe>

[View full source](https://github.com/wYaobiz/code-to-cloud-resources/blob/main/src/ch06-javascript/innerhtml/index.html){ .md-button }

### The href property

Builds a small navigation bar using the href property.

```html
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>The href Property</title>
  </head>
<body>
<div class="navigationbar">
     <a href="Homepage.php">Home</a>
     <a href="aboutUS.php">About Us</a>
     <a href="employmentOpportunities.php">Employment Opportunities</a>
     <a href="contactUs.php">Contact Us</a>
 </div>
</body>
</html>
```

**Produces:** a set of links whose destinations are set through the href property.

<iframe src="../../examples/ch06-javascript/href-property/index.html" style="width:100%; height:160px; border:1px solid var(--md-default-fg-color--lightest); border-radius:4px; background:white; margin-bottom:0.5rem;" title="Live preview of href-property" loading="lazy"></iframe>

[View full source](https://github.com/wYaobiz/code-to-cloud-resources/blob/main/src/ch06-javascript/href-property/index.html){ .md-button }

### The src property

Reads or sets an image source with the src property.

```html
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>src Property</title>
  </head>
<body>
<img src="sunrise.jpeg" alt="Sunrise" id="sunrise">
</body>
</html>
```

**Produces:** an image whose source is controlled through the src property.

<iframe src="../../examples/ch06-javascript/src-property/index.html" style="width:100%; height:220px; border:1px solid var(--md-default-fg-color--lightest); border-radius:4px; background:white; margin-bottom:0.5rem;" title="Live preview of src-property" loading="lazy"></iframe>

[View full source](https://github.com/wYaobiz/code-to-cloud-resources/blob/main/src/ch06-javascript/src-property/index.html){ .md-button }

### The value property

Reads a form field with the value property.

```html
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>The value Property</title>
  </head>
<body>
<input type="text" id="employeeName" name="employeeName" value = "John">
 <br>
</body>
<script>
   const employeeName = document.getElementById('employeeName').value;
   console.log(employeeName); // Output: "John"
 </script>
</html>
```

**Produces:** a form field whose value is retrieved by the script.

<iframe src="../../examples/ch06-javascript/value-property/index.html" style="width:100%; height:160px; border:1px solid var(--md-default-fg-color--lightest); border-radius:4px; background:white; margin-bottom:0.5rem;" title="Live preview of value-property" loading="lazy"></iframe>

[View full source](https://github.com/wYaobiz/code-to-cloud-resources/blob/main/src/ch06-javascript/value-property/index.html){ .md-button }

## Working with the DOM

### The DOM document property

Creates and inserts nodes through the DOM document object.

```html
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>The DOM document Property</title>
</head>
<body>
  <h1>My Favorite Foods Around the World</h1>
  <div id="foodList">
      <p>Kibbeh</p>
    </div>
</body>
<script>
  // creates a text node for description of food
  let kibbeh = document.createTextNode(" Description - A typical Lebanese dish made with   made with ground lamb, cracked bulgur wheat, and spices");
  // append new text node to the body of the document
  document.body.appendChild(kibbeh);
  // creates an element line break (<br>)
  let newlinebreak = document.createElement("br");
  // append new element to the body of the document
  document.body.appendChild(newlinebreak);
  //creates a new <div> element
  let newdiv = document.createElement("div");
  //creates a new paragraph (<p></p>) element
  let paragraph1 = document.createElement("p");
  // creates a text node food item
  let newfood = document.createTextNode("Irish Soda Bread");
  // append new text node to the paragraph element
  paragraph1.appendChild(newfood);
  // append new paragraph element to the body of the document
  document.body.appendChild(paragraph1);
  // append new div element to the body of the document
  document.body.appendChild(newdiv);
  //creates a new paragraph (<p></p>) element
  let paragraph2 = document.createElement("p");
  //creates a description for Irish Soda Bread
  let newdescription = document.createTextNode("A staple in Irish households it is made with flour, baking soda, buttermilk, butter eggs, sugar, salt and raisins");
  // append new text node to the paragraph element
  paragraph2.appendChild(newdescription);
  // append new paragraph element to the body of the document
  document.body.appendChild(paragraph2);
  // append new div element to the body of the document
  document.body.appendChild(newdiv);
</script>
</html>
```

**Produces:** new text and elements built in script and appended to the page.

<iframe src="../../examples/ch06-javascript/dom-document/index.html" style="width:100%; height:260px; border:1px solid var(--md-default-fg-color--lightest); border-radius:4px; background:white; margin-bottom:0.5rem;" title="Live preview of dom-document" loading="lazy"></iframe>

[View full source](https://github.com/wYaobiz/code-to-cloud-resources/blob/main/src/ch06-javascript/dom-document/index.html){ .md-button }

## Event Handlers

### window.onload handler

Runs code once the whole page has loaded.

```html
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>window.onload Handler</title>
<style>
<!-- styling for HTML elements -->
  h1 {
        color:blue;
        font-family:cursive;
     }
  Li {
       color:blueviolet;
       font-weight:bold;
    }
</style>
</head>
<body>
  <h1>My Favorite Foods Around the World</h1>
  <div id="foodList">
     <ul id = "foodOfWorld">
         <li> Kibbeh </li>
         <li> Irish Soda Bread </li>
         <li> Lasagna</li>
         <li> Paella</li>
        <li> Pad Thai</li>
        <li> Tandoori</li>
   </ul>
</div>
</body>
<script>
//window onload Handler
 window.onload = function() {
   console.log('The page for My Favorite Foods Around the World has been loaded');
};
</script>
</html>
```

**Produces:** a message logged to the console once the page finishes loading.

<iframe src="../../examples/ch06-javascript/onload-window/index.html" style="width:100%; height:180px; border:1px solid var(--md-default-fg-color--lightest); border-radius:4px; background:white; margin-bottom:0.5rem;" title="Live preview of onload-window" loading="lazy"></iframe>

[View full source](https://github.com/wYaobiz/code-to-cloud-resources/blob/main/src/ch06-javascript/onload-window/index.html){ .md-button }

### document.onload handler

Runs code when the document has loaded.

```html
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>document.onload Handler</title>
<!-- styling for HTML elements -->
<style>
  h1 {
    color:blue;
    font-family:cursive;
     }
  li{
     color:blueviolet;
     font-weight:bold;
    }
</style>
</head>
<body>
<!-- Heading and unordered list -->
<h1>My Favorite Foods Around the World</h1>
<div id="foodList">
   <ul id = "foodOfWorld">
         <li> Kibbeh </li>
          <li> Irish Soda Bread </li>
           <li> Lasagna</li>
           <li> Paella</li>
            <li> Pad Thai</li>
            <li> Tandoori</li>
   </ul>
</div>
</body>
<script>
//document onload Handler
 document.body.onload = function() {
   console.log('The DOM for the page of My Favorite Foods Around the World has been loaded');
};
</script>
</html>
```

**Produces:** a message produced when the document load handler fires.

<iframe src="../../examples/ch06-javascript/onload-document/index.html" style="width:100%; height:180px; border:1px solid var(--md-default-fg-color--lightest); border-radius:4px; background:white; margin-bottom:0.5rem;" title="Live preview of onload-document" loading="lazy"></iframe>

[View full source](https://github.com/wYaobiz/code-to-cloud-resources/blob/main/src/ch06-javascript/onload-document/index.html){ .md-button }

### onclick handler

Changes a heading's styling when a button is clicked.

```html
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>onclick Handler</title>
<!-- styling for HTML elements -->
<style>
  h1 {
    color:blue;
    font-family:cursive;
     }
  li{
     color:blueviolet;
     font-weight:bold;
    }
</style>
</head>
<body>
<!-- Heading and unordered list -->
<h1 id = "listHeading">My Favorite Foods Around the World</h1>
       <div id="foodList">
          <ul id = "foodOfWorld">
               <li> Kibbeh </li>
               <li> Irish Soda Bread </li>
               <li> Lasagna</li>
               <li> Paella</li>
               <li> Pad Thai</li>
               <li> Tandoori</li>
         </ul>
       <br>
     <button onclick="myonClickFunction()">Click me to Change Heading Element Styling</button>
   </div>
</body>
<script>
//onclick Handler
 function myonClickFunction() {
  let newHeadingStyle = document.getElementById("listHeading");
  newHeadingStyle.style.color = "cornflowerblue";
  newHeadingStyle.style.fontFamily = "Times New Roman";
 }
</script>
</html>
```

**Produces:** a food list with a button that, when clicked, restyles the heading.

<iframe src="../../examples/ch06-javascript/onclick-handler/index.html" style="width:100%; height:300px; border:1px solid var(--md-default-fg-color--lightest); border-radius:4px; background:white; margin-bottom:0.5rem;" title="Live preview of onclick-handler" loading="lazy"></iframe>

[View full source](https://github.com/wYaobiz/code-to-cloud-resources/blob/main/src/ch06-javascript/onclick-handler/index.html){ .md-button }

### onchange handler

Responds to a change in a form control.

```html
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>onchange Handler</title>
<!-- styling for HTML elelemnts -->
<style>
  h1 {
    color:green;
    font-family:Times New Roman;
  }
</style>
</head>
<body>
<!-- Heading and form -->
  <h1>Choosing a County to visit will trigger an onchange event handler.</h1>
  <form>
    <label for="myCountyChoice"> Select a Transaction: </label>
    <select id="myCountyChoice" onchange ="myCountyChoiceFunction()">
      <option value="Kerry">County Kerry</option>
      <option value="Donegal">County Donegal</option>
      <option value="Dublin">County Dublin</option>
      <option value="Cork">County Cork</option>
    </select>
  </form>
</body>
<script>
 //onchange Handler
  function myCountyChoiceFunction() {
  let choice = document.getElementById("myCountyChoice").value;
  document.write("You selected to visit: " + choice);
  }
</script>
</html>
```

**Produces:** a control that triggers a response when its value changes.

<iframe src="../../examples/ch06-javascript/onchange-handler/index.html" style="width:100%; height:200px; border:1px solid var(--md-default-fg-color--lightest); border-radius:4px; background:white; margin-bottom:0.5rem;" title="Live preview of onchange-handler" loading="lazy"></iframe>

[View full source](https://github.com/wYaobiz/code-to-cloud-resources/blob/main/src/ch06-javascript/onchange-handler/index.html){ .md-button }

### onfocus handler

Responds when a field gains focus.

```html
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>onfocus Handler</title>
</head>
<body>
<!-- Heading and form -->
  Enter a country you would like to visit: <input type = "text" id = "country"  onfocus = "countryToVisit();"/>
</body>
<script>
 //onfocus Handler
  function countryToVisit() {
    country.style.borderColor = "blueviolet";
    country.style.background = "cornflowerblue";
   let Country = document.getElementById('country');
      Country.value = 'France';
 }
</script>
</html>
```

**Produces:** a field that reacts when it is focused.

<iframe src="../../examples/ch06-javascript/onfocus-handler/index.html" style="width:100%; height:180px; border:1px solid var(--md-default-fg-color--lightest); border-radius:4px; background:white; margin-bottom:0.5rem;" title="Live preview of onfocus-handler" loading="lazy"></iframe>

[View full source](https://github.com/wYaobiz/code-to-cloud-resources/blob/main/src/ch06-javascript/onfocus-handler/index.html){ .md-button }

### onblur handler

Responds when a field loses focus.

```html
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>onblur Handler</title>
</head>
<body>
<!-- Heading and form -->
  Enter a country you would like to visit: <input type = "text" id = "country"  onblur = "countryToVisit();"/>
</body>
<script>
 //onblur Handler
  function countryToVisit() {
    country.style.borderColor = "darkred";
    country.style.background = "red";
   let Country = document.getElementById('country');
      Country.value = 'Lebanon';
 }
</script>
</html>
```

**Produces:** a field that reacts when focus leaves it.

<iframe src="../../examples/ch06-javascript/onblur-handler/index.html" style="width:100%; height:180px; border:1px solid var(--md-default-fg-color--lightest); border-radius:4px; background:white; margin-bottom:0.5rem;" title="Live preview of onblur-handler" loading="lazy"></iframe>

[View full source](https://github.com/wYaobiz/code-to-cloud-resources/blob/main/src/ch06-javascript/onblur-handler/index.html){ .md-button }

### onmouseover and onmouseout handlers

Changes styling as the pointer moves over and out.

```html
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>onmouseover and onmouseout Handlers</title>
<!-- styling for HTML elements -->
<style>
  h1 {
    color:blue;
    font-family:cursive;
     }
  li{
     color:blueviolet;
     font-weight:bold;
    }
</style>
</head>
<body>
<!-- Heading and unordered list. Call to onmouseover and onmouseout Handlers -->
  <h1 id = "listHeading" onmouseover = "myMouseOverEvent();" onmouseout = "myMouseOutEvent();" >My Favorite Foods Around the World</h1>
  <div id="foodList">
    <ul id = "foodOfWorld">
         <li> Kibbeh </li>
       <li> Irish Soda Bread </li>
       <li> Lasagna</li>
       <li> Paella</li>
       <li> Pad Thai</li>
       <li> Tandoori</li>
    </ul>
      </div>
 </body>
<script>
//onmouseover and onmouseout Handlers
 function myMouseOverEvent() {
     let newHeadingStyle = document.getElementById("listHeading");
  newHeadingStyle.style.color = "cornflowerblue";
  newHeadingStyle.style.fontFamily = "Times New Roman";
 }
  function myMouseOutEvent() {
  let newHeadingStyle = document.getElementById("listHeading");
  newHeadingStyle.style.color = "blue";
  newHeadingStyle.style.fontFamily = "cursive";
 }
</script>
</html>
```

**Produces:** an element that restyles on hover using inline handlers.

<iframe src="../../examples/ch06-javascript/onmouseover-handler/index.html" style="width:100%; height:280px; border:1px solid var(--md-default-fg-color--lightest); border-radius:4px; background:white; margin-bottom:0.5rem;" title="Live preview of onmouseover-handler" loading="lazy"></iframe>

[View full source](https://github.com/wYaobiz/code-to-cloud-resources/blob/main/src/ch06-javascript/onmouseover-handler/index.html){ .md-button }

### onclick event property

Attaches a click response through the element's onclick property.

```html
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>onclick Event Property Approach</title>
<!-- styling for HTML elements -->
<style>
  h1 {
    color:blue;
    font-family:cursive;
     }
  li{
     color:blueviolet;
     font-weight:bold;
    }
</style>
</head>
<body>
<!-- Heading and unordered list -->
   <h1 id = "listHeading">My Favorite Foods Around the World</h1>
      <div id="foodList">
         <ul id = "foodOfWorld">
             <li> Kibbeh </li>
             <li> Irish Soda Bread </li>
             <li> Lasagna</li>
              <li> Paella</li>
             <li> Pad Thai</li>
              <li> Tandoori</li>
          </ul>
       <br>
       <input type="button" value="Click me to Change Heading Element Styling" id="clickedbutton">
     </div>
 </body>
<script>
//onclick Event Property Approach
    let buttonclicked = document.getElementById("clickedbutton");
    buttonclicked.onclick = function ()
        {
  let newHeadingStyle = document.getElementById("listHeading");
  newHeadingStyle.style.color = "cornflowerblue";
  newHeadingStyle.style.fontFamily = "Times New Roman";
        }
</script>
</html>
```

**Produces:** the same click behavior wired up in script rather than markup.

<iframe src="../../examples/ch06-javascript/onclick-property/index.html" style="width:100%; height:280px; border:1px solid var(--md-default-fg-color--lightest); border-radius:4px; background:white; margin-bottom:0.5rem;" title="Live preview of onclick-property" loading="lazy"></iframe>

[View full source](https://github.com/wYaobiz/code-to-cloud-resources/blob/main/src/ch06-javascript/onclick-property/index.html){ .md-button }

### onchange event property

Attaches a change response through the onchange property.

```html
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title> onchange Event Property Approach </title>
<!-- styling for HTML elements -->
<style>
  h1 {
    color:green;
    font-family:Times New Roman;
  }
</style>
</head>
<body>
<!-- Heading and form -->
  <h1>Choosing a County to visit will trigger an onchange event via the property approach.</h1>
  <form>
    <label for="myCountyChoice"> Select a Transaction: </label>
    <select id="myCountyChoice">
      <option value="Kerry">County Kerry</option>
      <option value="Donegal">County Donegal</option>
      <option value="Dublin">County Dublin</option>
      <option value="Cork">County Cork</option>
    </select>
  </form>
</body>
<script>
  //onchange Event Property Approach
   let choice = document.getElementById("myCountyChoice");
    choice.onchange = function ()
       {
          let choice = document.getElementById("myCountyChoice").value;
         document.write("You selected to visit: " + choice);
        }
</script>
</html>
```

**Produces:** a change response attached in script.

<iframe src="../../examples/ch06-javascript/onchange-property/index.html" style="width:100%; height:200px; border:1px solid var(--md-default-fg-color--lightest); border-radius:4px; background:white; margin-bottom:0.5rem;" title="Live preview of onchange-property" loading="lazy"></iframe>

[View full source](https://github.com/wYaobiz/code-to-cloud-resources/blob/main/src/ch06-javascript/onchange-property/index.html){ .md-button }

### onfocus event property

Attaches a focus response through the onfocus property.

```html
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>onfocus Event Property Approach</title>
</head>
<body>
<!-- Heading and form -->
  Country to visit: <input type = "text" id = "country"/>
</body>
<script>
 //onfocus Event Property Approach
  let countrychosen = document.getElementById("country");
    countrychosen.onfocus = function () {
    country.style.borderColor = "blueviolet";
    country.style.background = "cornflowerblue";
   let Country = document.getElementById('country');
      Country.value = 'France';
 }
</script>
</html>
```

**Produces:** a focus response attached in script.

<iframe src="../../examples/ch06-javascript/onfocus-property/index.html" style="width:100%; height:180px; border:1px solid var(--md-default-fg-color--lightest); border-radius:4px; background:white; margin-bottom:0.5rem;" title="Live preview of onfocus-property" loading="lazy"></iframe>

[View full source](https://github.com/wYaobiz/code-to-cloud-resources/blob/main/src/ch06-javascript/onfocus-property/index.html){ .md-button }

### onblur event property

Attaches a blur response through the onblur property.

```html
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>onblur Event Property Approach</title>
</head>
<body>
<!-- Heading and form -->
  Country to visit: <input type = "text" id = "country"/>
</body>
<script>
 //onblur Event Property Approach
  let countrychosen = document.getElementById("country");
    countrychosen.onblur = function () {
    country.style.borderColor = "darkred";
    country.style.background = "red";
   let Country = document.getElementById('country');
      Country.value = 'Lebanon';
 }
</script>
</html>
```

**Produces:** a blur response attached in script.

<iframe src="../../examples/ch06-javascript/onblur-property/index.html" style="width:100%; height:180px; border:1px solid var(--md-default-fg-color--lightest); border-radius:4px; background:white; margin-bottom:0.5rem;" title="Live preview of onblur-property" loading="lazy"></iframe>

[View full source](https://github.com/wYaobiz/code-to-cloud-resources/blob/main/src/ch06-javascript/onblur-property/index.html){ .md-button }

### onmouseover and onmouseout properties

Attaches hover responses through element properties.

```html
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>onmouseover and onmouseout Handlers</title>
<!-- styling for HTML elements -->
<style>
  h1 {
    color:blue;
    font-family:cursive;
     }
  li{
     color:blueviolet;
     font-weight:bold;
    }
</style>
</head>
<body>
<!-- Heading and unordered list -->
  <h1 id = "listHeading">My Favorite Foods Around the World</h1>
  <div id="foodList">
    <ul id = "foodOfWorld">
         <li> Kibbeh </li>
       <li> Irish Soda Bread </li>
       <li> Lasagna</li>
       <li> Paella</li>
       <li> Pad Thai</li>
       <li> Tandoori</li>
    </ul>
      </div>
 </body>
<script>
//onmouseover and onmouseout Event Property Approach
 let newHeadingStyle = document.getElementById("listHeading");
 newHeadingStyle.onmouseover = function () {
  newHeadingStyle.style.color = "cornflowerblue";
  newHeadingStyle.style.fontFamily = "Times New Roman";
 }
 let oldHeadingStyle = document.getElementById("listHeading");
 oldHeadingStyle.onmouseout = function () {
  oldHeadingStyle.style.color = "blue";
  oldHeadingStyle.style.fontFamily = "cursive";
 }
 </script>
</html>
INITIAL HTML PAGE (ONMOUSEOUT HANDLER REVERTS BACK TO THIS PAGE)
onmouseout EVENT will change the Heading text to Times New cursive and text color back to blue
PAGE AFTER ONMOUSOVER HANDLER
onmouseover EVENT will change the Heading text to Times New Roman and text color back to cornflower blue
Example Code Using Event Listener Approach
- An example of window load Event Listener.
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>window.load Event Handler</title>
</head>
<body>
  <h1 style = "color:blue;  font-family:cursive;">My Favorite Foods Around the World</h1>
  <div id="foodList">
     <ul style = "color:blueviolet;  font-weight:bold;" id = "foodOfWorld">
         <li> Kibbeh </li>
         <li> Irish Soda Bread </li>
         <li> Lasagna</li>
         <li> Paella</li>
        <li> Pad Thai</li>
        <li> Tandoori</li>
   </ul>
</div>
</body>
<script>
   //window load Event Listener
  // below shows to different ways to code the Event Listener
  //first method
    /* window.addEventListener("load", pageLoaded)
    function pageLoaded() {
 // console.log("The page for My Favorite Foods Around the World has been loaded'");
}*/
  //second method
   window.addEventListener("load", function()
    {
       console.log("The page for My Favorite Foods Around the World has been loaded'");
    });
</script>
</html>
```

**Produces:** hover behavior attached in script.

<iframe src="../../examples/ch06-javascript/onmouseover-property/index.html" style="width:100%; height:280px; border:1px solid var(--md-default-fg-color--lightest); border-radius:4px; background:white; margin-bottom:0.5rem;" title="Live preview of onmouseover-property" loading="lazy"></iframe>

[View full source](https://github.com/wYaobiz/code-to-cloud-resources/blob/main/src/ch06-javascript/onmouseover-property/index.html){ .md-button }

## Event Listeners

### click event listener

Attaches a click response with addEventListener.

```html
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>click event Listener</title>
<!-- styling for HTML elements -->
<style>
  h1 {
    color:blue;
    font-family:cursive;
     }
  li{
     color:blueviolet;
     font-weight:bold;
    }
</style>
</head>
<body>
<!-- Heading and unordered list -->
  <h1 id = "listHeading">My Favorite Foods Around the World</h1>
  <div id="foodList">
    <ul id = "foodOfWorld">
                 <li> Kibbeh </li>
       <li> Irish Soda Bread </li>
       <li> Lasagna</li>
       <li> Paella</li>
       <li> Pad Thai</li>
       <li> Tandoori</li>
    </ul>
    <br>
    <button id = "buttonclick">Click me to Change Heading Element Styling</button>
  </div>
 </body>
<script>
  //click Event Listener
  // below shows to different ways to code the Event Listener
  //this first one separates getElementByID() from the addEventListener method
  //let buttonclicked = document.getElementById("buttonclick");
  // buttonclicked.addEventListener("click", clickEvent);
  //The second combines the two into one statement
  document.getElementById("buttonclick").addEventListener("click", clickEvent);
  function clickEvent() {
    let newHeadingStyle = document.getElementById("listHeading");
  newHeadingStyle.style.color = "cornflowerblue";
  newHeadingStyle.style.fontFamily = "Times New Roman";
   }
</script>
</html>
```

**Produces:** a click handled through addEventListener.

<iframe src="../../examples/ch06-javascript/listener-click/index.html" style="width:100%; height:280px; border:1px solid var(--md-default-fg-color--lightest); border-radius:4px; background:white; margin-bottom:0.5rem;" title="Live preview of listener-click" loading="lazy"></iframe>

[View full source](https://github.com/wYaobiz/code-to-cloud-resources/blob/main/src/ch06-javascript/listener-click/index.html){ .md-button }

### change event listener

Attaches a change response with addEventListener.

```html
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title> change Event Listener</title>
<!-- styling for HTML elements -->
<style>
  h1 {
    color:green;
    font-family:Times New Roman;
  }
</style>
</head>
<body>
<!-- Heading and form -->
  <h1>Choosing a County to visit will trigger change Event Listener</h1>
  <form>
    <label for="myCountyChoice"> Select a Transaction: </label>
    <select id="myCountyChoice">
      <option value="Kerry">County Kerry</option>
      <option value="Donegal">County Donegal</option>
      <option value="Dublin">County Dublin</option>
      <option value="Cork">County Cork</option>
    </select>
  </form>
</body>
<script>
  //change Event Listener
  // below shows to different ways to code the Event Listener
  //this first one separates getElementByID() from the addEventListener method
  //let choice = document.getElementById("myCountyChoice");
  //choice.addEventListener("change", choiceChange);
  //The second combines the two into one statement
  document.getElementById("myCountyChoice").addEventListener("change", choiceChange);
    function choiceChange ()
       {
          let choice = document.getElementById("myCountyChoice").value;
         document.write("You selected to visit: " + choice);
        }
</script>
</html>
```

**Produces:** a change handled through addEventListener.

<iframe src="../../examples/ch06-javascript/listener-change/index.html" style="width:100%; height:200px; border:1px solid var(--md-default-fg-color--lightest); border-radius:4px; background:white; margin-bottom:0.5rem;" title="Live preview of listener-change" loading="lazy"></iframe>

[View full source](https://github.com/wYaobiz/code-to-cloud-resources/blob/main/src/ch06-javascript/listener-change/index.html){ .md-button }

### focus event listener

Attaches a focus response with addEventListener.

```html
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>focus Event Listener</title>
</head>
<body>
<!-- Heading and form -->
  Country to visit: <input type = "text" id = "country"/>
</body>
<script>
  //focus Event Listener
  // below shows to different ways to code the Event Listener
  //this first one separates getElementByID() from the addEventListener method
  //let chosenCountry = document.getElementById("country");
  // chosenCountry.addEventListener("focus", choiceCountry);
//The second combines the two into one statement
   document.getElementById("country").addEventListener("focus", choiceCountry);
   function choiceCountry ()
     {
     country.style.borderColor = "blueviolet";
     country.style.background = "cornflowerblue";
     let Country = document.getElementById('country');
       Country.value = 'France';
     }
</script>
</html>
```

**Produces:** a focus handled through addEventListener.

<iframe src="../../examples/ch06-javascript/listener-focus/index.html" style="width:100%; height:180px; border:1px solid var(--md-default-fg-color--lightest); border-radius:4px; background:white; margin-bottom:0.5rem;" title="Live preview of listener-focus" loading="lazy"></iframe>

[View full source](https://github.com/wYaobiz/code-to-cloud-resources/blob/main/src/ch06-javascript/listener-focus/index.html){ .md-button }

### blur event listener

Attaches a blur response with addEventListener.

```html
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>blur Event Listener</title>
</head>
<body>
<!-- Heading and form -->
  Country to visit: <input type = "text" id = "country"/>
</body>
<script>
//blur Event Listener
  // below shows to different ways to code the Event Listener
  //this first one separates getElementByID() from the addEventListener method
  //  let chosenCountry = document.getElementById("country");
   // chosenCountry.addEventListener("blur", choiceCountry);
   //The second combines the two into one statement
    document.getElementById("country").addEventListener("blur", choiceCountry);
    function choiceCountry ()
       {
        country.style.borderColor = "darkred";
        country.style.background = "red";
        let Country = document.getElementById('country');
          Country.value = 'Lebanon';
       }
</script>
</html>
```

**Produces:** a blur handled through addEventListener.

<iframe src="../../examples/ch06-javascript/listener-blur/index.html" style="width:100%; height:180px; border:1px solid var(--md-default-fg-color--lightest); border-radius:4px; background:white; margin-bottom:0.5rem;" title="Live preview of listener-blur" loading="lazy"></iframe>

[View full source](https://github.com/wYaobiz/code-to-cloud-resources/blob/main/src/ch06-javascript/listener-blur/index.html){ .md-button }

### mouseover and mouseout listeners

Attaches hover responses with addEventListener.

```html
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>mouseover and mouseout Event Listener</title>
<!-- styling for HTML elements -->
<style>
  h1 {
    color:blue;
    font-family:cursive;
     }
  li{
     color:blueviolet;
     font-weight:bold;
    }
</style>
</head>
<body>
  <h1 id = "listHeading">My Favorite Foods Around the World</h1>
  <div id="foodList">
    <ul id = "foodOfWorld">
         <li> Kibbeh </li>
       <li> Irish Soda Bread </li>
       <li> Lasagna</li>
       <li> Paella</li>
       <li> Pad Thai</li>
       <li> Tandoori</li>
    </ul>
      </div>
 </body>
<script>
   //mouseover and mouseout Event Listener
  // below shows to different ways to code the Event Listener
  //this first one separates getElementByID() from the addEventListener method
  //let newHeadingStyle = document.getElementById("listHeading");
  //newHeadingStyle.addEventListener("mouseover", changeNewHeading);
   //The second combines the two into one statement
     document.getElementById("listHeading").addEventListener("mouseover", changeNewHeading);
     function changeNewHeading ()
      {
      listHeading.style.color = "cornflowerblue";
      listHeading.style.fontFamily = "Times New Roman";
      }
  //let oldHeadingStyle = document.getElementById("listHeading");
  //oldHeadingStyle.addEventListener("mouseout", changeOldHeading);
  //The second combines the two into one statement
     document.getElementById("listHeading").addEventListener("mouseout", changeOldHeading);
     function changeOldHeading ()
       {
      listHeading.style.color = "blue";
      listHeading.style.fontFamily = "cursive";
       }
</script>
</html>
```

**Produces:** hover handled through addEventListener.

<iframe src="../../examples/ch06-javascript/listener-mouseover/index.html" style="width:100%; height:280px; border:1px solid var(--md-default-fg-color--lightest); border-radius:4px; background:white; margin-bottom:0.5rem;" title="Live preview of listener-mouseover" loading="lazy"></iframe>

[View full source](https://github.com/wYaobiz/code-to-cloud-resources/blob/main/src/ch06-javascript/listener-mouseover/index.html){ .md-button }

### mousemove event listener

Tracks pointer movement.

```html
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>mousemove Event Listener</title>
</head>
<body>
    <input type = "button" style = "backgroundcolor = green" id = "mybutton" value = "Hover over me "/>
</body>
<script>
  //mousemove Event Listener
  document.getElementById("mybutton").addEventListener("mousemove", function(e)
 {
  let x = e.clientX;
  let y = e.clientY;
  let coordinates = "Coordinates: (" + x + "," + y + ")";
  console.log(document.getElementById("mybutton").innerHTML = coordinates);
    });
</script>
</html
Produces
Before the mousemove event occurs.
No coordinates for the mouse pointer are displayed.
After the mousemove event occurs.
The coordinates for the mouse pointer are displayed.
Example code of a keydown event.
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>keydown Event Listener</title>
<style>
  h2 {
    color:blue
     }
  input{
    background-color:lightyellow;
  }
</style>
</head>
<body>
    <h2>Click the text box, press any key and see what happens</h2>
    <input type = "button" id = "mybutton" value = "Press down on the text box "/>
</body>
<script>
  //keydown Event Listener
     document.getElementById("mybutton").addEventListener('keydown', function (e){
      mybutton.style.backgroundColor="cornflowerblue";
    document.getElementById("mybutton").value = "Key was pressed and keydown event triggered";
        });
</script>
</html>
```

**Produces:** the pointer coordinates updating as the mouse moves.

<iframe src="../../examples/ch06-javascript/listener-mousemove/index.html" style="width:100%; height:200px; border:1px solid var(--md-default-fg-color--lightest); border-radius:4px; background:white; margin-bottom:0.5rem;" title="Live preview of listener-mousemove" loading="lazy"></iframe>

[View full source](https://github.com/wYaobiz/code-to-cloud-resources/blob/main/src/ch06-javascript/listener-mousemove/index.html){ .md-button }

### touchmove event listener

Tracks touch movement.

```html
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>touchmove Event Listener</title>
<style>
  h2 {
    color:blue;
    fon-family: cursive;
     }
  p{
    color:blueviolet;
  }
</style>
</head>
<body>
<h2>See how a touchmove Event works!</h2>
<p id="touchMoveEvent">Touch this paragraph and then move your finger and the touchmove() event will trigger.</p>
</body>
<script>
  //click Event Listener
   document.getElementById("touchMoveEvent").addEventListener("touchmove", function(e){
    document.getElementById("touchMoveEvent").innerHTML = "Welcome to Web Development";
});
</script>
</html>
```

**Produces:** touch coordinates updating as a finger moves (on a touch device).

<iframe src="../../examples/ch06-javascript/listener-touchmove/index.html" style="width:100%; height:200px; border:1px solid var(--md-default-fg-color--lightest); border-radius:4px; background:white; margin-bottom:0.5rem;" title="Live preview of listener-touchmove" loading="lazy"></iframe>

[View full source](https://github.com/wYaobiz/code-to-cloud-resources/blob/main/src/ch06-javascript/listener-touchmove/index.html){ .md-button }

### select event listener

Responds when text is selected.

```html
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>select Event Listener</title>
<style>
    input{
     background-color:lightyellow;
     color:blue;
  }
</style>
</head>
<body>
<form>
<input type="text" value="Please select me!" id = "selectText">
</form>
</body>
<script>
  //select Event Listener
document.getElementById("selectText").addEventListener("select", function (e){
document.write(document.getElementById("selectText").innerHTML = "You SELECTED the button and triggered the select event!!!");
});
 </script>
</html>
```

**Produces:** a response when text in the field is selected.

<iframe src="../../examples/ch06-javascript/listener-select/index.html" style="width:100%; height:200px; border:1px solid var(--md-default-fg-color--lightest); border-radius:4px; background:white; margin-bottom:0.5rem;" title="Live preview of listener-select" loading="lazy"></iframe>

[View full source](https://github.com/wYaobiz/code-to-cloud-resources/blob/main/src/ch06-javascript/listener-select/index.html){ .md-button }

### submit event listener

Responds when a form is submitted.

```html
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>submit Event Listener</title>
<style>
    input{
      background-color:lightyellow;
                color:blue;
  }
</style>
</head>
<body>
<form id = "submitForm">
Enter your name: <input type = "text" id = "Name">
<br>
<input type="submit" value="Click to submit">
</form>
</body>
<script>
  //submit Event Listener
document.getElementById("submitForm").addEventListener("submit", function (e){
alert ("The name entered is: " + document.getElementById("Name").value);
});
 </script>
</html>
```

**Produces:** a response when the form is submitted.

<iframe src="../../examples/ch06-javascript/listener-submit/index.html" style="width:100%; height:200px; border:1px solid var(--md-default-fg-color--lightest); border-radius:4px; background:white; margin-bottom:0.5rem;" title="Live preview of listener-submit" loading="lazy"></iframe>

[View full source](https://github.com/wYaobiz/code-to-cloud-resources/blob/main/src/ch06-javascript/listener-submit/index.html){ .md-button }

## Functions

### Functions

Defines and calls a function.

```html
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Functions</title>
</head>
 <script>
//Function definition
function costOfTickets(priceOfTicket=15, numberOfTickets=1)
/*NOTE: parameters are optional. If there are none the parentheses are still needed. Default values are given for both parameters.*/
/*Function calculates the cost for tickets based on input from call in the <form> element and outputs the total cost*/
{
  document.write("The total cost for " + numberOfTickets + " tickets costing $" + priceOfTicket + " is: $" + priceOfTicket * numberOfTickets );
  // this code will return the value of the cost for tickets
  return priceOfTicket * numberOfTickets;
 }
</script>
<body>
<!-- HTML form to call the function only one value passed in so default value used  -->
<form action="" onsubmit="return costOfTickets(15)">
 <input type="submit">
</form>
</body>
</html>
```

**Produces:** the result of calling the defined function.

<iframe src="../../examples/ch06-javascript/functions/index.html" style="width:100%; height:180px; border:1px solid var(--md-default-fg-color--lightest); border-radius:4px; background:white; margin-bottom:0.5rem;" title="Live preview of functions" loading="lazy"></iframe>

[View full source](https://github.com/wYaobiz/code-to-cloud-resources/blob/main/src/ch06-javascript/functions/index.html){ .md-button }

### Function expressions

Assigns a function to a variable.

```html
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Function Expressions</title>
</head>
 <script>
//Function Expression definition
var finalCostOfTickets = function
costOfTickets(priceOfTicket, numberOfTickets)
 {
  document.write("The total cost for " + numberOfTickets + " tickets costing $" + priceOfTicket + " is: $" + priceOfTicket * numberOfTickets );
  // this code will return the value of the cost for tickets
  return priceOfTicket * numberOfTickets;
 }
//Invoke the function expression
let totalTicketCost = finalCostOfTickets(15,10);
</script>
<body>
<!-- HTML form to load the JS script -->
<form action="" onload = "finalCostOfTickets()">
</form>
</body>
</html>
```

**Produces:** the result of calling a function stored in a variable.

<iframe src="../../examples/ch06-javascript/function-expressions/index.html" style="width:100%; height:180px; border:1px solid var(--md-default-fg-color--lightest); border-radius:4px; background:white; margin-bottom:0.5rem;" title="Live preview of function-expressions" loading="lazy"></iframe>

[View full source](https://github.com/wYaobiz/code-to-cloud-resources/blob/main/src/ch06-javascript/function-expressions/index.html){ .md-button }

### Arrow functions

Writes a function using arrow notation.

```html
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Arrow Functions</title>
</head>
 <script>
//Function Expression Arrow notation
let finalCostOfTickets = (priceOfTicket, numberOfTickets) => priceOfTicket * numberOfTickets
document.write("The final cost for tickets is: $");
document.write(finalCostOfTickets(15,10));
</script>
<body>
<!-- HTML form to load the JS script -->
<form action="" onload = "finalCostOfTickets1">
</form>
</body>
</html>
```

**Produces:** the result of an arrow function.

<iframe src="../../examples/ch06-javascript/arrow-functions/index.html" style="width:100%; height:180px; border:1px solid var(--md-default-fg-color--lightest); border-radius:4px; background:white; margin-bottom:0.5rem;" title="Live preview of arrow-functions" loading="lazy"></iframe>

[View full source](https://github.com/wYaobiz/code-to-cloud-resources/blob/main/src/ch06-javascript/arrow-functions/index.html){ .md-button }

### Nested functions

Uses a function defined inside another.

```html
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Nested Functions</title>
<script>
//This code will find the area using nested functions
function getLength(length)
 {
//Perform area calculation
  function getWidth(width)
   {
        return length * width;
     }
  return getWidth(5);
 }
//Output the calculated area
document.write("The calculated area is: " + getLength(10));
</script>
</head>
</html>
```

**Produces:** a value computed through nested functions.

<iframe src="../../examples/ch06-javascript/nested-functions/index.html" style="width:100%; height:180px; border:1px solid var(--md-default-fg-color--lightest); border-radius:4px; background:white; margin-bottom:0.5rem;" title="Live preview of nested-functions" loading="lazy"></iframe>

[View full source](https://github.com/wYaobiz/code-to-cloud-resources/blob/main/src/ch06-javascript/nested-functions/index.html){ .md-button }

## Objects and Scope

### Object literals

Creates an object and uses its properties.

```html
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Objects Constructor</title>
<script>
// Create an empty Object
const movie = {};
// Add Properties
movie.movieName = "Harry Potter";
movie.leadMaleCharacter = "Harry";
movie.leadFemaleCharacter = "Hermoine";
// Display Data from Object
document.write ("Movie name is : " + movie.movieName);
document.write("<br>");
document.write ("The main character is : " + movie.leadMaleCharacter);
document.write("<br>");
document.write ("The main female character is : " + movie.leadFemaleCharacter);
</script>
</head>
</html>
```

**Produces:** values read from an object's properties.

<iframe src="../../examples/ch06-javascript/objects-constructor/index.html" style="width:100%; height:180px; border:1px solid var(--md-default-fg-color--lightest); border-radius:4px; background:white; margin-bottom:0.5rem;" title="Live preview of objects-constructor" loading="lazy"></iframe>

[View full source](https://github.com/wYaobiz/code-to-cloud-resources/blob/main/src/ch06-javascript/objects-constructor/index.html){ .md-button }

### Function constructor

Creates objects from a constructor function.

```html
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Function Constructor</title>
<script>
// Function constructor to create a new Movie object and print out the Object’s content
function Movie(movieName, leadMaleCharacter, leadFemaleCharacter) {
  this.movieName = movieName;
  this.leadMaleCharacter = leadMaleCharacter;
   this.leadFemaleCharacter = leadFemaleCharacter;
   this.movieInformation = function() {
    return "Movie name is: " + this.movieName + " The Lead Male Character is: " + this.leadMaleCharacter + " and the Lead Female Character is: "  + this.leadFemaleCharacter;
  }
}
 //Create a new movie object
const movie1 = new Movie("Harry Potter", "Harry", "Hermoine");
//Print out the Object’s Information
document.write (movie1.movieInformation());
</script>
</head>
</html>
```

**Produces:** objects built from a constructor.

<iframe src="../../examples/ch06-javascript/function-constructor/index.html" style="width:100%; height:200px; border:1px solid var(--md-default-fg-color--lightest); border-radius:4px; background:white; margin-bottom:0.5rem;" title="Live preview of function-constructor" loading="lazy"></iframe>

[View full source](https://github.com/wYaobiz/code-to-cloud-resources/blob/main/src/ch06-javascript/function-constructor/index.html){ .md-button }

### Objects

Builds and uses objects with a constructor.

```html
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Objects</title>
<script>
// Constructor function for PetInfo object
  function PetInfo(owner, pettype, petname, petbirthdate) {
  this.owner = owner;
  this.pettype = pettype;
  this.petname = petname;
  this.petbirthdate = petbirthdate;
}
// Add a method to the Prototype property which calculates the age of the pet
PetInfo.prototype.calculateBirthDate= function(){
      const todaysdate = new Date();
      let currentyear = todaysdate.getFullYear();
      console.log('The age of the pet  is: '+(currentyear - this.petbirthdate));
}
// Add a prototype property called breed
PetInfo.prototype.breed = "Maltese";
// Create a PetInfo object
var petinfo1 = new PetInfo("Maria", "dog", "Murphy", 2020);
console.log("The Name of the Owner is " + petinfo1.owner + ". The pet type is " + petinfo1.pettype + " and the pet's name is  " + petinfo1.petname + " and the breed is " + petinfo1.breed + ".");
petinfo1.calculateBirthDate();
// Create a second PetInfo object
PetInfo.prototype.breed = "Jack Russell Terrier";
var petinfo2 = new PetInfo("John", "dog", "Jackie", 2016);
console.log("The Name of the Owner is " + petinfo2.owner + ". The pet type is " + petinfo2.pettype + " and the pet's name is  " + petinfo2.petname + " and the breed is " + petinfo2.breed + ".");
petinfo2.calculateBirthDate();
</script>
</head>
</html>
```

**Produces:** details assembled from a constructed object.

<iframe src="../../examples/ch06-javascript/objects/index.html" style="width:100%; height:220px; border:1px solid var(--md-default-fg-color--lightest); border-radius:4px; background:white; margin-bottom:0.5rem;" title="Live preview of objects" loading="lazy"></iframe>

[View full source](https://github.com/wYaobiz/code-to-cloud-resources/blob/main/src/ch06-javascript/objects/index.html){ .md-button }

### Variable scope

Shows how local scope limits visibility.

```html
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Scope Local</title>
<script>
var lastname = "Kennedy";
if (lastname == "Kennedy");
The keyword let creates a local variable in the if block
  {       let name = "John";
The keyword var creates a global variable in the if block
      var middle = "Fitzgearld";
      alert("Last Name matches Kennedy so " + name + " " + middle + " " + lastname + " is printed");
  }
alert(" The variable name " + name + "is out of scope since it is defined with let. Therefore the value for name is undefined and not printed, but the variable middle is in scope since it is defined with var and the middle name " + middle + "  " + lastname + " are printed");
</script>
</head>
</html>
```

**Produces:** output demonstrating which variables are visible where.

<iframe src="../../examples/ch06-javascript/scope/index.html" style="width:100%; height:180px; border:1px solid var(--md-default-fg-color--lightest); border-radius:4px; background:white; margin-bottom:0.5rem;" title="Live preview of scope" loading="lazy"></iframe>

[View full source](https://github.com/wYaobiz/code-to-cloud-resources/blob/main/src/ch06-javascript/scope/index.html){ .md-button }

## More Language Features

### String object

Uses String methods and properties.

```html
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>String Object</title>
<script>
var str = "Mrs. Green lives in a lush green valley in Greenland.";
var placeValue = str.search(/green/i);
if (placeValue)
 {
   alert("The word green appears in position " + placeValue + " in the string");
 }
else
 {
    alert("The word green does not appear in the string");
 }
</script>
Produces
  Example code using RegEx object (case sensitive)
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Scope</title>
<script>
let str = "Mrs. Redford lives in a bright red house in Red Bank.";
let pattern = /red/i;
let result = str.match(pattern);
if (result)
  {
    alert("The pattern matches the inputted word " + result);
}
else
  {
    alert("The pattern does not match");
  }
</script>
</head>
</html>
  Example code using RegEx object (not case sensitive)
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Scope</title>
<script>
let str = "Mrs. Redford lives in a bright red house in Red Bank.";
let pattern = /red/;
let result = str.match(pattern);
if (result)
  {
    alert("The pattern matches the inputted word " + result);
}
else
  {
    alert("The pattern does not match");
  }
</script>
</head>
</html>
The alert will not skip over the red found in Redford
  Example code using modifiers associated with the RegExp object :case insensitive and global searches
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Scope</title>
<script>
let str = "Mrs. Redford lives in a bright red house in Red Bank.";
let pattern = /red/gi;
let result = str.match(pattern);
if (result)
  {
    alert("The pattern matches the inputted word " + result);
}
else
  {
    alert("The pattern does not match");
  }
</script>
</head>
</html>
Using g modifier we can see all matches are found
  Example code of JS output function
The alert() method
display a popup window/dialog box
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>alert() method</title>
</head>
<!-- onload event will execute the script called displayWelcomeMessage() immediately after the page is loaded -->
<body onload = "displayWelcomeMessage()">
<script>
function displayWelcomeMessage()
  {
   alert("Welcome to Web Development");
  }
</script>
</body>
</html>
```

**Produces:** the result of applying String methods.

<iframe src="../../examples/ch06-javascript/string-object/index.html" style="width:100%; height:200px; border:1px solid var(--md-default-fg-color--lightest); border-radius:4px; background:white; margin-bottom:0.5rem;" title="Live preview of string-object" loading="lazy"></iframe>

[View full source](https://github.com/wYaobiz/code-to-cloud-resources/blob/main/src/ch06-javascript/string-object/index.html){ .md-button }

### document.write() method

Writes content to the page.

```html
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>document.write() method</title>
<style>
h1 {
  color: blueviolet;
  }
</style>
<script>
document.write("<h2><font color='magenta'>This content is in the head element of the HTML document</font></h2>");
document.write("<br>");
document.write("<br>");
</script>
</head>
<!--Display message in the browser-->
<body>
<script>
document.write("<h2><font color='green'>This content is in the body element of the HTML document</font></h2>");
document.write("<br>");
document.write("<h1>Welcome to Web Development!</h1>");
</script>
</body>
</html>
```

**Produces:** content written directly into the page.

<iframe src="../../examples/ch06-javascript/document-write/index.html" style="width:100%; height:180px; border:1px solid var(--md-default-fg-color--lightest); border-radius:4px; background:white; margin-bottom:0.5rem;" title="Live preview of document-write" loading="lazy"></iframe>

[View full source](https://github.com/wYaobiz/code-to-cloud-resources/blob/main/src/ch06-javascript/document-write/index.html){ .md-button }

### var vs let

Contrasts var and let, including scope.

```html
<!DOCTYPE html>
  <html>
  <head>
  <meta charset="UTF-8">
  <title>Var vs Let</title>
  </head>
   <script>
  //Function that shows the + contatenation operators
  function precedence(){
  result = 36% ((3 +1)*(3*(15/5)));
  step1= (3 +1);
  step2 = (15/5);
  step3 = 3*(15/5);
  step4 = ((3 +1)*(3*(15/5)));
  step5 = result = 36% ((3 +1)*(3*(15/5)));
  document.write ("Step 1 = : " + step1);
  document.write("<br>");
  document.write ("Step 2 = : " + step2);
  document.write("<br>");
  document.write ("Step 3 = : " + step3);
  document.write("<br>");
  document.write ("Step 4 = : " + step4);
  document.write("<br>");
  document.write ("Step 5 = : " + step5);
  document.write("<br>");
  }
  </script>
  <body>
  <input type = "button" value = "CLICK" onclick = "precedence()">
  </body>
  </html>
```

**Produces:** output showing how var and let differ.

<iframe src="../../examples/ch06-javascript/var-vs-let/index.html" style="width:100%; height:220px; border:1px solid var(--md-default-fg-color--lightest); border-radius:4px; background:white; margin-bottom:0.5rem;" title="Live preview of var-vs-let" loading="lazy"></iframe>

[View full source](https://github.com/wYaobiz/code-to-cloud-resources/blob/main/src/ch06-javascript/var-vs-let/index.html){ .md-button }

### isNaN function

Checks whether a value is not a number.

```html
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>isNaN function</title>
</head>
 <script>
//Function that shows the isNaN function
function notanumberglobal(){
Coerced to number
test1 = isNaN("Welcome"); Coerced to number
test2 = isNaN("3.14");  test3 = isNaN(false);
document.write ("Test with Welcome : "  + test1);
document.write ("<br>")
document.write ("Test with 3.14 : " + test2);
document.write ("<br>")
document.write ("Test with false : "  + test3);
}
</script>
<body>
<input type = "button" value = "CLICK" onclick = "notanumberglobal()">
</body>
</html>
```

**Produces:** a check reporting whether the value is not a number.

<iframe src="../../examples/ch06-javascript/isnan/index.html" style="width:100%; height:180px; border:1px solid var(--md-default-fg-color--lightest); border-radius:4px; background:white; margin-bottom:0.5rem;" title="Live preview of isnan" loading="lazy"></iframe>

[View full source](https://github.com/wYaobiz/code-to-cloud-resources/blob/main/src/ch06-javascript/isnan/index.html){ .md-button }

