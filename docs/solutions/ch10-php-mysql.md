# Chapter 10 · PHP and MySQL Integration

Selected solutions for the review questions on connecting PHP to MySQL, fetching data, security, and AJAX. See the [section introduction](index.md) for scope and the disclaimer.

### Problem 10.1
**Selecting a database after connecting.**

After connecting to the MySQL server, you select which database to work with so that subsequent queries know where to run. In the older MySQLi procedural style this is done with mysqli_select_db, or by passing the database name when opening the connection. It is necessary because a single server can host many databases, and the queries must be directed at the right one.

### Problem 10.2
**Why POST is safer than GET for data-modifying submissions.**

POST keeps the submitted values in the request body rather than in the URL, so they are not exposed in browser history, bookmarks, or server logs the way query strings are. Equally important, requests that change data should not be casually repeatable: GET requests are easily re-triggered by reloading or prefetching, whereas POST is the appropriate method for actions that alter the database, such as inserts.

### Problem 10.4
**SQL injection and a prevention technique.**

SQL injection is an attack where crafted input changes the intent of a query. The technique emphasized in this chapter is to keep untrusted input from being interpreted as SQL, achieved by escaping input or, better, by using prepared statements that send the query and the data separately so the data can never alter the command.

### Problem 10.5
**How prepared statements improve on escaping.**

Escaping with a function like mysql_real_escape_string relies on the developer remembering to apply it correctly to every value, and mistakes are easy to make. Prepared statements instead separate the SQL from the data structurally, so values are always treated as data regardless of their content. This is more reliable, less error-prone, and also lets the database reuse the query plan.

### Problem 10.6
**Why not store plaintext passwords.**

If passwords are stored in plaintext and the database is exposed, every account is immediately compromised, and because people reuse passwords, the damage spreads to other services. Storing only a strong hash means a leak reveals no usable passwords. In PHP, `password_hash()` produces a secure salted hash for storage, checked later with `password_verify()`.

### Problem 10.7
**What HTTPS encrypts.**

HTTPS encrypts the entire HTTP exchange between browser and server, including the URL path, headers, and body, which contains form fields such as login credentials. This is critical because without it, anyone able to observe the network can read submitted usernames and passwords in plain text. Encryption ensures those credentials cannot be intercepted in transit.

### Problem 10.10
**Advantages of PDO.**

Two advantages are that PDO works across many database systems with a consistent interface, so code is more portable than the MySQL-specific extensions, and that it has first-class support for prepared statements and an exception-based error mode, which together make for safer, cleaner database code.

### Problem 10.12
**PDO::ERRMODE_EXCEPTION.**

Setting this error mode makes PDO throw an exception when a database operation fails, rather than failing silently or only returning a false value. The advantage is that errors are surfaced immediately and can be caught and handled in one place. If you do not handle a thrown exception, it propagates as an uncaught error and halts the script, which at least makes the failure visible rather than letting it pass unnoticed.
