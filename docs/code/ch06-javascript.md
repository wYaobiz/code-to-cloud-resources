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
