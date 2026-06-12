# Chapter 8 · PHP

Suggested solutions for the review questions and hands-on exercises covering server-side PHP — syntax, form handling, sessions, cookies, security functions, and generating dynamic HTML.

!!! note
    Attempt each problem yourself before consulting these solutions. For exercises that build something, a complete reference implementation is linked under [Source Code](../code/index.md).

## Review Questions

### What is a session in PHP and how does it maintain state across requests?
A session stores user-specific data on the server between requests, identified by a session ID that the browser sends back (usually in a cookie) on each subsequent request. After calling `session_start()`, values placed in the `$_SESSION` superglobal persist across page loads for that user, which lets an application remember things like a logged-in user between otherwise stateless HTTP requests.

### How do cookies differ from sessions, and when might you use cookies instead?
Cookies are stored in the browser and sent with every request to the matching domain; session data lives on the server. Because cookies live on the client, they can persist after the browser closes (with an expiration date) and are useful for remembering preferences or a "remember me" token across visits. Sessions are better for sensitive or larger data, since nothing beyond the ID is exposed to the client.

### Give an example of how to securely handle file uploads in PHP.
Validate before trusting anything: check the upload via `$_FILES`, confirm the MIME type and extension against an allow-list, verify the file size, and generate a new safe filename rather than using the client-supplied name. Move the file out of any web-executable directory with `move_uploaded_file()`, and never allow uploaded files to be executed as scripts.

### What is the purpose of `filter_var()`?
`filter_var()` validates and sanitizes data against built-in filters — for example `FILTER_VALIDATE_EMAIL` to confirm an email address is well-formed, or `FILTER_SANITIZE_*` filters to strip unwanted characters. It centralizes common validation so you do not hand-write fragile regular expressions for standard formats.

### How do `password_hash()` and `password_verify()` enhance security?
`password_hash()` produces a salted, computationally expensive hash (using bcrypt or Argon2) so that stored passwords are not recoverable even if the database leaks. `password_verify()` checks a submitted password against a stored hash without your code ever handling the salt directly. Together they implement current best practice for password storage and replace insecure approaches like plain MD5/SHA-1.

## Hands-On Exercises

### Exercise — Numbers and Their Squares
**Goal.** Write a PHP script that dynamically generates an HTML table showing the numbers 1 to 10 and their squares.

**Approach.** Open a `<table>`, then loop with `for ($i = 1; $i <= 10; $i++)` and echo a `<tr>` containing two `<td>` cells: `$i` and `$i * $i`. Close the table after the loop. This demonstrates mixing PHP control flow with HTML output to produce data-driven markup.

**Reference implementation:** [`src/ch08-php/squares-table/`](../code/index.md)
