# Chapter 9 · SQL and MySQL

Selected solutions for the review questions on relational databases, SQL queries, joins, normalization, and security. See the [section introduction](index.md) for scope and the disclaimer.

### Problem 9.1
**Why databases and SQL matter.**

A database is the storage tier in a three-tier architecture, holding the application's persistent data such as users, products, and orders. Most web apps use a database like MySQL because they need to store and retrieve structured data reliably across many requests and users, and SQL is the standard language for querying and modifying that data. Without a database, an application would have nowhere durable to keep information between requests.

### Problem 9.3
**HTML table vs. database table.**

An HTML table is a visual layout element for displaying rows and columns on a page. A database table is a storage structure that holds data in rows (records) and columns (fields) with defined types and constraints. They share the word "table" and a grid shape, but one is about presentation in the browser and the other is about persistent, queryable storage on the server.

### Problem 9.5
**A good primary key.**

A good primary key is unique and stable. An auto-increment integer ID is usually the best choice for a table of people because it is guaranteed unique, never changes, and carries no sensitive meaning. A Social Security Number is unique but sensitive and sometimes unavailable, and a name is a poor key because names are neither unique nor immutable. The key should identify a row permanently without depending on data that might change.

### Problem 9.6
**INSERT statement.**

```sql
INSERT INTO People (Name, Age, Gender, SSN)
VALUES ('Alice', 30, 'Female', '999');
```

String values are quoted and numeric values are not, and the column list matches the values in order.

### Problem 9.7
**SELECT with a WHERE clause.**

```sql
SELECT * FROM Orders WHERE status = 'Shipped';
```

This returns every column of every row whose status equals "Shipped."

### Problem 9.8
**Effect of a DELETE query.**

`DELETE FROM Students WHERE graduation_year < 2020;` permanently removes every row in Students whose graduation_year is earlier than 2020. If the WHERE clause were omitted, the statement would delete all rows in the table, which is why a DELETE without a condition is dangerous.

### Problem 9.14
**Average age of female employees.**

```sql
SELECT AVG(age) FROM Employees WHERE gender = 'F';
```

### Problem 9.16
**Database normalization.**

Normalization is the practice of organizing data into separate tables so that each fact is stored once and each table has a single clear theme. You split data into tables to avoid redundancy and the update problems it causes: for example, keeping students, courses, and enrollments in separate related tables rather than repeating course details on every student row. Relationships between the tables, expressed through keys, tie the data back together when needed.

### Problem 9.17
**SQL JOIN.**

A JOIN combines rows from two or more tables based on a related column, typically matching a foreign key in one table to a primary key in another. It is necessary because normalization spreads related data across tables, and a JOIN gathers that information back into a single result, for example pairing each enrollment with the matching student's details.

### Problem 9.18
**Listing male students in a course.**

```sql
SELECT s.Name
FROM Students s
JOIN Enrollments e ON s.StudentID = e.StudentID
WHERE s.Gender = 'M' AND e.CourseID = 'IT202';
```

### Problem 9.20
**SQL injection and prevention.**

SQL injection is an attack where malicious input is crafted to change the meaning of a query, for example to bypass a login or read data the user should not see. The primary prevention is prepared statements, which separate the query from the data so input can never be interpreted as SQL, supplemented by validating and escaping input where appropriate.
