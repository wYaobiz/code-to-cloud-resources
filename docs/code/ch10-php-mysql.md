# PHP and MySQL Code Examples

Worked code examples for the PHP and MySQL chapter, drawn from the material used in the course. These are server-side examples: they run on a server with PHP and a MySQL database rather than in the browser, so each one is presented as source code with a description of the result it produces.

!!! note "About these examples"
    These examples query two sample tables, `ChildrensAuthors` and `ChildrensClassics`, and assume a `connect.php` file that opens the database connection. Because they depend on a database, they are shown here as code with a description of their output rather than as a live preview. This is a standard way to share server-side code.

## JOINs

### INNER JOIN

Joins the `ChildrensAuthors` and `ChildrensClassics` tables on `AuthorID`, returning only authors that have matching books, and prints the result as an HTML table.

```php
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>INNER JOIN</title>
</head>
<?php
//File that includes the code to connect to the MySQL server
include "connect.php";
//query that demonstrates an INNER JOIN on the tables ChildrensAuthors and ChildrensClassics
$innerJoinQuery = "SELECT ChildrensAuthors.AuthorID, FirstName, LastName, BookTitle, YearPublished, ISBN FROM ChildrensAuthors INNER JOIN ChildrensClassics ON ChildrensAuthors.AuthorID = ChildrensClassics.AuthorID";
//Execute the query
$result = mysqli_query($con,$innerJoinQuery);
if(!$result)
  {
    echo "Error: "  . $result . "<br>" . $con->error;
  }
//Print the table from records retrieved from the query
echo "<table align= 'center' border='2px' style='width: 1500px; line-height:40px;'>
<tr>
<th>Author ID</th>
<th>First Name</th>
<th>Last Name</th>
<th>Title of Book</th>
<th>Year Published</th>
<th>ISBN</th>
</tr>";
while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['AuthorID'] . "</td>";
echo "<td>" . $row['FirstName'] . "</td>";
echo "<td>" . $row['LastName'] . "</td>";
echo "<td>" . $row['BookTitle'] . "</td>";
echo "<td>" . $row['YearPublished'] . "</td>";
echo "<td>" . $row['ISBN'] . "</td>";
echo "</tr>";
  }
echo "</table>";
?>
</html>
```

**Produces:** a table of authors paired with their books, listing only authors who have at least one matching book in the classics table. Authors with no matching book do not appear.

[View full source](https://github.com/wYaobiz/code-to-cloud-resources/blob/main/src/ch10-php-mysql/inner-join/index.php){ .md-button }

### LEFT JOIN

Returns every author from the left table, along with any matching books from the right table.

```php
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>LEFT JOIN</title>
</head>
<?php
//File that includes the code to connect to the MySQL server
include "connect.php";
//query that demonstrates an LEFT JOIN on the tables ChildrensAuthors and //ChildrensClassics
$leftJoinQuery = "SELECT ChildrensAuthors.AuthorID, FirstName, LastName, BookTitle, YearPublished, ISBN FROM ChildrensAuthors LEFT JOIN  ChildrensClassics ON ChildrensAuthors.AuthorID = ChildrensClassics.AuthorID";
//Execute the query
$result = mysqli_query($con,$leftJoinQuery);
if(!$result)
  {
    echo "Error: "  . $result . "<br>" . $con->error;
  }
//Print the table from records retrieved from the query
echo "<table align= 'center' border='2px' style='width: 1500px; line-height:40px;'>
<tr>
<th>Author ID</th>
<th>First Name</th>
<th>Last Name</th>
<th>Title of Book</th>
<th>Year Published</th>
<th>ISBN</th>
</tr>";
while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['AuthorID'] . "</td>";
echo "<td>" . $row['FirstName'] . "</td>";
echo "<td>" . $row['LastName'] . "</td>";
echo "<td>" . $row['BookTitle'] . "</td>";
echo "<td>" . $row['YearPublished'] . "</td>";
echo "<td>" . $row['ISBN'] . "</td>";
echo "</tr>";
  }
echo "</table>";
?>
</html>
```

**Produces:** a table listing all authors, with book details filled in where a match exists and left blank where an author has no matching book.

[View full source](https://github.com/wYaobiz/code-to-cloud-resources/blob/main/src/ch10-php-mysql/left-join/index.php){ .md-button }

### RIGHT JOIN

Returns every book from the right table, along with any matching author from the left table.

```php
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>
</head>
<?php
//File that includes the code to connect to the MySQL server
include "connect.php";
/*query that demonstrates a RIGHT JOIN on the tables ChildrensAuthors and ChildrensClassics*/
$rightJoinQuery = "SELECT ChildrensAuthors.AuthorID, FirstName, LastName, BookTitle, YearPublished, ISBN FROM ChildrensAuthors RIGHT JOIN  ChildrensClassics ON ChildrensAuthors.AuthorID = ChildrensClassics.AuthorID";
//Execute the query
$result = mysqli_query($con,$rightJoinQuery);
if(!$result)
  {
    echo "Error: "  . $result . "<br>" . $con->error;
  }
//Print the table from records retrieved from the query
echo "<table align= 'center' border='2px' style='width: 1500px; line-height:40px;'>
<tr>
<th>Author ID</th>
<th>First Name</th>
<th>Last Name</th>
<th>Title of Book</th>
<th>Year Published</th>
<th>ISBN</th>
</tr>";
while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['AuthorID'] . "</td>";
echo "<td>" . $row['FirstName'] . "</td>";
echo "<td>" . $row['LastName'] . "</td>";
echo "<td>" . $row['BookTitle'] . "</td>";
echo "<td>" . $row['YearPublished'] . "</td>";
echo "<td>" . $row['ISBN'] . "</td>";
echo "</tr>";
  }
echo "</table>";
?>
</html>
```

**Produces:** a table listing all books, with author details filled in where a match exists and left blank where a book has no matching author.

[View full source](https://github.com/wYaobiz/code-to-cloud-resources/blob/main/src/ch10-php-mysql/right-join/index.php){ .md-button }

## Aggregate Functions

### COUNT() function

Counts how many ISBN values appear in the `ChildrensClassicsPrice` table.

```php
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>COUNT() Function</title>
</head>
<?php
//File that includes the code to connect to the MySQL server
include "connect.php";
//Query that demonstrates Aggregate functions COUNT()
$query = "SELECT COUNT(ISBN) AS ISBNCOUNT FROM ChildrensClassicsPrice";
//Execute the query
$result = mysqli_query($con,$query);
if(!$result)
 {
    echo "Error: "  . $query . "<br>" . $con->error;
  }
//Print the table from the results from the query
echo "<table align= 'center' border='2px' line-height:40px;'>
<tr>
<th>Number of ISBNs</th>
</tr>";
while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['ISBNCOUNT'] . "</td>";
echo "</tr>";
  }
echo "</table>";
?>
</html>
```

**Produces:** a single-cell table showing the total number of ISBNs counted.

[View full source](https://github.com/wYaobiz/code-to-cloud-resources/blob/main/src/ch10-php-mysql/count-function/index.php){ .md-button }

### MIN(), MAX() and AVG() functions

Returns the lowest, highest, and average value of a numeric column.

```php
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>MIN(), MAX() and AVG() functions</title>
</head>
<?php
//File that includes the code to connect to the MySQL server
include "connect.php";
//Query that demonstrates Aggregate functions MIN(), MAX() and AVG()
$query = "SELECT MIN(PRICE) AS LowestPrice, MAX(PRICE) AS HighestPrice, AVG(Price) AS AveragePrice FROM ChildrensClassicsPrice";
//Execute the query
$result = mysqli_query($con,$query);
if(!$result)
 {
    echo "Error: "  . $query . "<br>" . $con->error;
  }
//Print the table from the results from the query
echo "<table align= 'center' border='2px' line-height:40px;'>
<tr>
<th>Lowest Priced Book</th>
<th>Highest Priced Book</th>
<th>Average Price of Books</th>
</tr>";
while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['LowestPrice'] . "</td>";
echo "<td>" . $row['HighestPrice'] . "</td>";
echo "<td>" . $row['AveragePrice'] . "</td>";
echo "</tr>";
  }
echo "</table>";
?>
</html>
```

**Produces:** a table with one row showing the minimum, maximum, and average values calculated across the column.

[View full source](https://github.com/wYaobiz/code-to-cloud-resources/blob/main/src/ch10-php-mysql/min-max-avg/index.php){ .md-button }

### GROUP_CONCAT() with GROUP BY

Groups the classics by `AuthorID` and combines each author's book titles into a single value.

```php
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>
</head>
<?php
//File that includes the code to connect to the MySQL server
include "connect.php";
//Query that demonstrates Aggregate functions GROUP_CONACT()
$query = "SELECT AuthorID, GROUP_CONCAT(BookTitle) AS BookTitle FROM ChildrensClassics GROUP BY AuthorID";
//Execute the query
$result = mysqli_query($con,$query);
if(!$result)
  {
    echo "Error: "  . $query . "<br>" . $con->error;
  }
//Print the table from the results from the query
echo "<table align= 'center' border='2px' line-height:40px;'>
<tr>
<th>Author ID</th>
<th>Title of Book</th>
</tr>";
while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['AuthorID'] . " </td>";
echo "<td>" . $row['BookTitle'] . "</td>";
echo "</tr>";
  }
echo "</table>";
?>
</html>
```

**Produces:** a table where each author appears once, with all of that author's book titles combined into one cell.

[View full source](https://github.com/wYaobiz/code-to-cloud-resources/blob/main/src/ch10-php-mysql/group-concat/index.php){ .md-button }

## Comparison and Conditional Functions

### GREATEST() function

Returns the largest value from a list of expressions.

```php
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>GREATEST function</title>
</head>
<?php
//File that includes the code to connect to the MySQL server
include "connect.php";
//Query that demonstrates GREATEST () function
$query = "Select Name, GREATEST (GPAYear1, GPAYear4, GPAYear3 ,GPAYear4) AS Highest_GPA FROM GPA";
//Execute the query
$result = mysqli_query($con,$query);
if(!$result)
  {
    echo "Error: "  . $query . "<br>" . $con->error;
  }
//Print the table from the results from the query
echo "<table align= 'center' border='2px' line-height:40px;'>
<tr>
<th>Name</th>
<th>Highest GPA</th>
</tr>";
while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['Name'] . " </td>";
echo "<td>" . $row['Highest_GPA'] . " </td>";
echo "</tr>";
  }
echo "</table>";
?>
</html>
```

**Produces:** a table showing the greatest value selected from the compared columns for each row.

[View full source](https://github.com/wYaobiz/code-to-cloud-resources/blob/main/src/ch10-php-mysql/greatest-function/index.php){ .md-button }

### LEAST() function

Returns the smallest value from a list of expressions.

```php
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>LEAST function</title>
</head>
<?php
//File that includes the code to connect to the MySQL server
include "connect.php";
//Query that demonstrates LEAST () function
$query = "Select Name, LEAST (GPAYear1, GPAYear4, GPAYear3 ,GPAYear4) AS Lowest_GPA FROM GPA";
//Execute the query
$result = mysqli_query($con,$query);
if(!$result)
  {
    echo "Error: "  . $query . "<br>" . $con->error;
  }
//Print the table from the results from the query
echo "<table align= 'center' border='2px' line-height:40px;'>
<tr>
<th>Name</th>
<th>Highest GPA</th>
</tr>";
while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['Name'] . " </td>";
echo "<td>" . $row['Lowest_GPA'] . " </td>";
echo "</tr>";
  }
echo "</table>";
?>
</html>
```

**Produces:** a table showing the smallest value selected from the compared columns for each row.

[View full source](https://github.com/wYaobiz/code-to-cloud-resources/blob/main/src/ch10-php-mysql/least-function/index.php){ .md-button }

### IF() function

Returns one of two values depending on whether a condition is true.

```php
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>IF() function</title>
</head>
<?php
//File that includes the code to connect to the MySQL server
include "connect.php";
//Query that demonstrates IF()
$query = "SELECT Name, GPAYear1, IF(GPAYear1 = 4, 'Perfect GPA', 'NOT A perfect GPA') AS Message FROM GPA";
//Execute the query
$result = mysqli_query($con,$query);
if(!$result)
  {
    echo "Error: "  . $query . "<br>" . $con->error;
  }
//Print the table from the results from the query
echo "<table align= 'center' border='2px' line-height:40px;'>
<tr>
<th>Name</th>
<th>GPA Year 1</th>
<th> Perfect GPA</th>
</tr>";
while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['Name'] . " </td>";
echo "<td>" . $row['GPAYear1'] . " </td>";
echo "<td>" . $row['Message'] . " </td>";
echo "</tr>";
  }
echo "</table>";
?>
</html>
```

**Produces:** a table where a column shows one label or another based on the tested condition for each row.

[View full source](https://github.com/wYaobiz/code-to-cloud-resources/blob/main/src/ch10-php-mysql/if-function/index.php){ .md-button }

### CASE expression

Chooses a result based on the first matching condition in a set.

```php
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>CASE() Function</title>
</head>
<?php
//File that includes the code to connect to the MySQL server
include "connect.php";
//Query that demonstrates CASE () function
$query = "SELECT Name, GPAYear1, CASE WHEN GPAYear1 = 4 THEN 'GPA is A' WHEN GPAYEAR1 >=3 THEN 'GPA is B' ELSE 'GPA is lower than B' END AS Message FROM GPA";
//Execute the query
$result = mysqli_query($con,$query);
if(!$result)
  {
    echo "Error: "  . $query . "<br>" . $con->error;
  }
//Print the table from the results from the query
echo "<table align= 'center' border='2px' line-height:40px;'>
<tr>
<th>Name</th>
<th>GPA Year 1</th>
<th>GPA Grade Value</th>
</tr>";
while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['Name'] . " </td>";
echo "<td>" . $row['GPAYear1'] . " </td>";
echo "<td>" . $row['Message'] . " </td>";
echo "</tr>";
  }
echo "</table>";
?>
</html>
```

**Produces:** a table where each row shows the value produced by the first matching branch of the CASE expression.

[View full source](https://github.com/wYaobiz/code-to-cloud-resources/blob/main/src/ch10-php-mysql/case-function/index.php){ .md-button }

### IFNULL() function

Substitutes a specified value wherever an expression is NULL.

```php
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
  <title>IFNULL() Function</title>
<?php
//File that includes the code to connect to the MySQL server
include "connect.php";
//Query that demonstrates IFNULL () function
$query = "SELECT IFNULL((SELECT Name FROM GPA WHERE Name = 'Sarah'), 'NULL') AS NAME";
//Execute the query
$result = mysqli_query($con,$query);
if(!$result)
  {
    echo "Error: "  . $query . "<br>" . $con->error;
  }
//Print the table from the results from the query
echo "<table align= 'center' border='2px' line-height:40px;'>
<tr>
<th>Name</th>
</tr>";
while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['NAME'] . " </td>";
echo "</tr>";
  }
echo "</table>";
?>
</html>
```

**Produces:** a table where any NULL value is replaced by the supplied default, and other values appear unchanged.

[View full source](https://github.com/wYaobiz/code-to-cloud-resources/blob/main/src/ch10-php-mysql/ifnull-function/index.php){ .md-button }
