# Preventing SQL injection with prepared statements

Two versions of the same login query: one that concatenates user input into the SQL string, and one that uses placeholders.

## Where the flaw comes from

In the unsafe version the database is handed a finished string, so it has no way to tell which parts came from the application and which came from the user. Input such as `anything' OR '1'='1` closes the quoted value and adds a condition that is always true, and the query returns rows it was never meant to.

## Why placeholders fix it

A prepared statement sends the structure first, and the values afterwards as data. Because the statement was already parsed, quotes and keywords inside the values cannot change what the query does. This is not filtering or escaping. The data is simply never treated as part of the command.

## A note on the unsafe file

`vulnerable.php` is included to show what the flaw looks like. It should not be used as a starting point for anything.
