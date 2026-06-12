# Chapter 8 · PHP

Selected solutions for the review questions on server-side PHP, including syntax, data exchange, sessions, cookies, and security functions. See the [section introduction](index.md) for scope and the disclaimer.

### Problem 8.1
**What PHP is.**

PHP is a server-side scripting language used to build dynamic web pages and applications. The server runs the PHP code to produce output, usually HTML, which it then sends to the browser. PHP can process form input, work with files, and interact with databases, making it the application layer that ties a site's front end to its data.

### Problem 8.2
**How PHP scripts execute.**

When a request arrives for a PHP file, the web server passes it to the PHP interpreter rather than returning the file directly. The interpreter runs the code, which may query a database or process input, and generates output such as HTML. The server then sends that generated output back to the browser, which never sees the original PHP source.

### Problem 8.6
**Indexed vs. associative arrays.**

An indexed array uses numeric positions as keys, starting at zero, and is suited to ordered lists of values. An associative array uses named string keys, which is suited to mapping labels to values, such as a user's fields. Both are written with the same array syntax, but associative arrays let you retrieve a value by a meaningful name rather than a position.

### Problem 8.8
**$_GET vs. $_POST.**

`$_GET` holds values sent through the URL query string, which are visible and limited in size, while `$_POST` holds values sent in the request body, which are not shown in the URL and can be larger. Use `$_GET` for safe, repeatable requests such as a search and `$_POST` for submissions that change data or carry sensitive information.

### Problem 8.9
**== vs. ===.**

The equality operator `==` compares values after converting them to a common type, so `0 == "0"` is true. The identical operator `===` compares both value and type without conversion, so `0 === "0"` is false because one is an integer and the other a string. Using `===` avoids surprises from automatic type juggling.

### Problem 8.10
**Sessions in PHP.**

A session stores per-user data on the server between requests, identified by a session ID that the browser returns on each subsequent request, usually in a cookie. After calling `session_start()`, values placed in the `$_SESSION` array persist across page loads for that user, which is how an application remembers a logged-in user across otherwise stateless HTTP requests.

### Problem 8.11
**Cookies vs. sessions.**

Cookies are stored in the browser and sent with every matching request, while session data lives on the server. Because cookies live on the client, they can persist after the browser closes and are useful for preferences or a long-lived "remember me" token. Sessions are better for sensitive or larger data, since only the session ID is exposed to the client.

### Problem 8.13
**filter_var().**

`filter_var()` validates or sanitizes a value against a built-in filter, for example confirming a string is a well-formed email with FILTER_VALIDATE_EMAIL or stripping unwanted characters with a sanitizing filter. It centralizes common checks so you do not have to hand-write fragile patterns for standard formats.

### Problem 8.14
**password_hash() and password_verify().**

`password_hash()` produces a salted, deliberately slow hash using a strong algorithm, so stored passwords cannot be recovered even if the database leaks. `password_verify()` checks a submitted password against a stored hash without your code handling the salt directly. Together they implement current best practice and replace insecure approaches like storing plain or simply hashed passwords.

## Selected coding exercise

### Problem 8.15: Numbers and Their Squares
The script opens a table, loops from 1 to 10, and echoes a row with each number and its square:

```php
<table border="1">
  <tr><th>Number</th><th>Square</th></tr>
  <?php for ($i = 1; $i <= 10; $i++): ?>
    <tr><td><?= $i ?></td><td><?= $i * $i ?></td></tr>
  <?php endfor; ?>
</table>
```
