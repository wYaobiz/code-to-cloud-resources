# Chapter 7 · Web Application Security

Selected solutions for the review questions on authentication, password storage, injection, XSS, CSRF, and secure operations. See the [section introduction](index.md) for scope and the disclaimer.

### Problem 7.1
**Why a proactive security mindset matters.**

Security is far easier and cheaper to build in from the start than to retrofit after an application is complete. A proactive mindset means considering threats at every stage of design and development, so protections like input validation, safe password storage, and access control are part of the architecture rather than patches added after a breach. Treating security as an afterthought tends to leave gaps that attackers find first.

### Problem 7.2
**Password hashing.**

Password hashing converts a password into a fixed, irreversible value using a one-way function, so the original is not stored. It is essential because if the database is ever exposed, attackers see only hashes rather than usable passwords. A proper password hash also uses a per-password salt and a deliberately slow algorithm so that guessing attacks are expensive.

### Problem 7.3
**password_hash() and password_verify().**

`password_hash()` takes a plaintext password and returns a salted, algorithmically strong hash suitable for storage. `password_verify()` takes a submitted password and a stored hash and returns whether they match, handling the salt internally. Together they let you store and check passwords safely without managing the cryptographic details yourself.

```php
$hash = password_hash($password, PASSWORD_DEFAULT);
// later, at login:
if (password_verify($submitted, $hash)) {
    // authenticated
}
```

### Problem 7.5
**Authentication vs. authorization.**

Authentication establishes who a user is, for example verifying a username and password at login. Authorization determines what an authenticated user is allowed to do, for example whether they may access an admin page. In a PHP application, checking the login credentials is authentication, and then checking whether the logged-in user has an admin role before showing a management screen is authorization.

### Problem 7.6
**Prepared statements against SQL injection.**

Prepared statements separate the SQL command from the data, sending the query with placeholders first and the user values separately, so input is always treated as data and never as executable SQL. This removes the mechanism injection relies on.

```php
$stmt = $pdo->prepare('SELECT * FROM users WHERE email = ?');
$stmt->execute([$email]);
```

### Problem 7.7
**Cross-Site Scripting and output encoding.**

XSS is an attack where malicious script is injected into a page and then runs in other users' browsers, for example through an unescaped comment field. Output encoding mitigates it by converting characters that have special meaning in HTML into harmless entities, so injected markup is displayed as text rather than executed. In PHP, `htmlspecialchars($userInput)` converts characters like `<` and `&` before the value is placed into the page.

### Problem 7.8
**Protecting against CSRF.**

Two effective methods are anti-CSRF tokens and the SameSite cookie attribute. A token is a unpredictable value embedded in each form and checked on submission, so a forged request from another site cannot supply the correct token. Setting session cookies to SameSite restricts them from being sent on cross-site requests, which blocks the forged-request pattern CSRF depends on.

### Problem 7.9
**Precautions for file uploads.**

Three recommendations: validate the file type and size against an allow-list rather than trusting the client, store uploads outside any web-executable directory and assign a new safe filename instead of the user-supplied one, and never allow uploaded files to be executed as scripts. Together these prevent attackers from uploading and running malicious code.

### Problem 7.16
**Why secrets must not be committed to version control.**

Committing credentials or API keys places them in the repository's permanent history, where anyone with access, now or later, can retrieve them even if a later commit removes them. If the repository is or becomes public, automated scanners find such secrets within minutes, leading to compromised accounts and unexpected charges. Secrets belong in environment variables or a secrets manager, kept out of the codebase.

!!! note "Sensitive topic"
    This chapter covers security techniques for defensive purposes. The material is intended to help developers protect applications and users.
