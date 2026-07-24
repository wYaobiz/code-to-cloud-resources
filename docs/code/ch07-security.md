# Web Application Security Examples

Worked examples for the security chapter, covering the defenses that matter most in a PHP application: how passwords are stored, how queries are kept safe from injection, how output is escaped, how forms are protected against forgery, and how uploads are handled.

!!! warning "Read these as patterns, not as drop-in code"
    These examples show the shape of each defense. Real applications need them applied consistently across every query, every piece of output, and every form. One escaped value does not help if the next one is missed. The examples also assume a `$pdo` connection is already available.

## Passwords

### Storing a password

`password_hash()` applies a deliberately slow algorithm and generates a unique salt for each password, so two users with the same password still produce different hashes. Passing `PASSWORD_DEFAULT` rather than naming an algorithm means the code follows PHP's recommended choice as it changes over time.

```php
<?php
// Registration: hash a new user's password before storing it.
//
// Never store a password itself. password_hash() applies a deliberately slow
// algorithm and generates a unique salt for each password, so two users with
// the same password still get different hashes.

$user = $_POST['username'];
$pass = $_POST['password'];

// PASSWORD_DEFAULT selects PHP's current recommended algorithm.
// Using the constant rather than naming an algorithm means the code keeps
// up with PHP's defaults as they improve.
$hash = password_hash($pass, PASSWORD_DEFAULT);

// Store the username and the hash, never the password itself.
$stmt = $pdo->prepare("INSERT INTO users (username, password_hash) VALUES (?, ?)");
$stmt->execute([$user, $hash]);
?>
```

[View full source](https://github.com/wYaobiz/code-to-cloud-resources/blob/main/src/ch07-security/password-hashing/){ .md-button }

### Verifying a password at login

`password_verify()` re-hashes the submitted password using the salt stored inside the hash and compares the results, so the salt never has to be handled separately. Two details are worth noting: the session ID is regenerated on success, which prevents session fixation, and the failure message is the same whether the username or the password was wrong, so it does not reveal which accounts exist.

```php
<?php
// Authentication: verify a login against the stored hash.

$user = $_POST['username'];
$pass = $_POST['password'];

// Look up the stored hash for this username.
$stmt = $pdo->prepare("SELECT password_hash FROM users WHERE username = ?");
$stmt->execute([$user]);
$row = $stmt->fetch();

// password_verify() re-hashes the submitted password using the salt embedded
// in the stored hash and compares the two. The salt never has to be handled
// separately.
if ($row && password_verify($pass, $row['password_hash'])) {
    session_start();

    // Issue a fresh session ID on login. Without this, an attacker who knows
    // the pre-login session ID could reuse it afterwards, which is session
    // fixation.
    session_regenerate_id(true);

    $_SESSION['username'] = $user;
    echo "Login successful.";
} else {
    // Give the same message whether the username or the password was wrong,
    // so the response does not reveal which usernames exist.
    echo "Invalid username or password.";
}
?>
```

[View full source](https://github.com/wYaobiz/code-to-cloud-resources/blob/main/src/ch07-security/password-hashing/){ .md-button }

## SQL Injection

### The vulnerable pattern

This version concatenates user input into the SQL string, so the database receives a finished command with no way to tell which parts came from the application and which came from the user. Input such as `anything' OR '1'='1` closes the quoted value and adds a condition that is always true. This file is here to show the flaw, not to be used.

```php
<?php
// UNSAFE. Shown to illustrate the flaw, not for use.
//
// The user's input is concatenated straight into the SQL string, so the
// database receives whatever structure the input happens to create.

$user = $_POST['username'];
$pass = $_POST['password'];

$query = "SELECT * FROM users WHERE username='$user' AND password='$pass'";

// If someone enters   anything' OR '1'='1   as the username, the database
// receives:
//
//   SELECT * FROM users WHERE username='anything' OR '1'='1' AND password=''
//
// The OR '1'='1' is always true, so the condition no longer restricts
// anything and the query can return rows it was never meant to.
$result = $pdo->query($query);
?>
```

[View full source](https://github.com/wYaobiz/code-to-cloud-resources/blob/main/src/ch07-security/prepared-statements/){ .md-button }

### The prepared statement

The placeholders mark where data belongs. The database parses the statement first and receives the values afterwards, so quotes and keywords inside them stay ordinary characters. This is not filtering or escaping: the data is simply never treated as part of the command, which is why the approach holds regardless of what the input contains.

```php
<?php
// SAFE. The query structure and the data travel separately.

$user = $_POST['username'];
$pass = $_POST['password'];

// The ? placeholders mark where data goes. The database parses this
// statement first, before any user data is attached to it.
$stmt = $pdo->prepare("SELECT * FROM users WHERE username = ? AND password_hash = ?");

// The values are sent afterwards, as data. Quotes or SQL keywords inside
// them stay ordinary characters, because the statement has already been
// parsed and cannot be restructured.
$stmt->execute([$user, $pass]);
$result = $stmt->fetch();
?>
```

[View full source](https://github.com/wYaobiz/code-to-cloud-resources/blob/main/src/ch07-security/prepared-statements/){ .md-button }

## Cross-Site Scripting

### Escaping output

`htmlspecialchars()` converts the characters that carry structural meaning in HTML into entities, so submitted text displays exactly as typed but is never interpreted as markup. Escape at the point of output rather than on input, since the same value can be safe in one context and unsafe in another. `ENT_QUOTES` covers both quote characters, which matters inside attributes.

```php
<?php
// Escaping output to prevent cross-site scripting.
//
// XSS happens when user-supplied text is written into a page as if it were
// markup. If a comment contains <script>...</script> and the page prints it
// unchanged, the browser has no way to know it was not meant to be code,
// so it runs it.

$comment = $_POST['comment'] ?? '';
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Comment</title>
</head>
<body>

  <!-- UNSAFE: prints whatever was submitted, markup and all -->
  <!-- <p><?= $comment ?></p> -->

  <!--
    SAFE: htmlspecialchars() converts the characters that carry meaning in
    HTML into entities, so < becomes &lt; and " becomes &quot;. The browser
    then displays them as text instead of interpreting them.

    ENT_QUOTES escapes both single and double quotes, which matters when the
    value is placed inside an attribute.
  -->
  <p><?= htmlspecialchars($comment, ENT_QUOTES, 'UTF-8') ?></p>

</body>
</html>
```

[View full source](https://github.com/wYaobiz/code-to-cloud-resources/blob/main/src/ch07-security/output-escaping/){ .md-button }

## Cross-Site Request Forgery

### Placing a token in the form

The token is an unpredictable value tied to the session, generated with `random_bytes()` rather than a general purpose random function. Another site can cause a visitor's browser to submit a request to your application, but the same-origin policy stops it from reading your page, so it cannot learn the token.

```php
<?php
// Generating an anti-CSRF token and placing it in the form.
session_start();

// A random, unpredictable value tied to this user's session. random_bytes()
// is a cryptographically secure source; rand() would not be suitable here.
if (empty($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Change email</title>
</head>
<body>

  <form method="POST" action="change_email.php">
    <!--
      The token travels with the form. Another site can make a visitor's
      browser submit a request here, but it cannot read this value, so it
      cannot include a valid token.
    -->
    <input type="hidden" name="csrf_token"
           value="<?= htmlspecialchars($_SESSION['csrf_token'], ENT_QUOTES, 'UTF-8') ?>">

    <label>New email address</label>
    <input type="email" name="email" required>
    <button type="submit">Update</button>
  </form>

</body>
</html>
```

[View full source](https://github.com/wYaobiz/code-to-cloud-resources/blob/main/src/ch07-security/csrf-token/){ .md-button }

### Verifying the token

The handler rejects anything without a matching token before it changes any data. `hash_equals()` is used rather than `==` because it takes the same time regardless of where two values first differ, which avoids leaking information through timing. Setting session cookies with `SameSite` blocks the same attack from another direction, and using both is common.

```php
<?php
// Verifying the token before acting on the request.
session_start();

$submitted = $_POST['csrf_token'] ?? '';

// hash_equals() compares in constant time, so the comparison itself does not
// leak information about how much of the token was correct.
if (!isset($_SESSION['csrf_token']) || !hash_equals($_SESSION['csrf_token'], $submitted)) {
    http_response_code(403);
    exit('Invalid request.');
}

// The token checked out, so this request genuinely came from our own form.
$email = $_POST['email'];

$stmt = $pdo->prepare("UPDATE users SET email = ? WHERE username = ?");
$stmt->execute([$email, $_SESSION['username']]);

echo "Email updated.";
?>
```

[View full source](https://github.com/wYaobiz/code-to-cloud-resources/blob/main/src/ch07-security/csrf-token/){ .md-button }

## File Uploads

### Validating and storing an upload

The serious risk with uploads is an attacker placing a script on the server and then requesting it. The type here is read from the file's contents with `finfo` rather than from the filename or the browser's claim, since both of those come from the client, and it is checked against an allow-list. The original filename is discarded rather than cleaned, which removes path traversal entirely, and the file is stored outside the web root so no URL reaches it.

```php
<?php
// Handling an uploaded file safely.
//
// An upload form lets a visitor place a file on your server, so every
// assumption about that file has to be checked rather than trusted.

if ($_SERVER['REQUEST_METHOD'] !== 'POST' || !isset($_FILES['upload'])) {
    exit('No file submitted.');
}

$file = $_FILES['upload'];

// 1. Check that the upload itself succeeded.
if ($file['error'] !== UPLOAD_ERR_OK) {
    exit('Upload failed.');
}

// 2. Limit the size. Also set upload_max_filesize and post_max_size in
//    php.ini, since those apply before this code ever runs.
$maxBytes = 2 * 1024 * 1024; // 2 MB
if ($file['size'] > $maxBytes) {
    exit('File is too large.');
}

// 3. Determine the type from the file's contents, not from the name or from
//    the type the browser reported. Both of those are supplied by the client
//    and can say anything.
$finfo = new finfo(FILEINFO_MIME_TYPE);
$mime = $finfo->file($file['tmp_name']);

// 4. Check against an allow-list. Listing what is permitted is safer than
//    trying to list everything that is not.
$allowed = [
    'image/jpeg' => 'jpg',
    'image/png'  => 'png',
    'image/gif'  => 'gif',
];
if (!isset($allowed[$mime])) {
    exit('File type not allowed.');
}

// 5. Generate a new name. The name the user supplied may contain path
//    traversal sequences or characters that mean something to the file
//    system, so it is discarded rather than cleaned.
$newName = bin2hex(random_bytes(16)) . '.' . $allowed[$mime];

// 6. Store the file outside the web root, so it cannot be requested by URL
//    and cannot be executed as a script.
$destination = '/var/www/uploads/' . $newName;

if (!move_uploaded_file($file['tmp_name'], $destination)) {
    exit('Could not save the file.');
}

echo "Uploaded successfully.";
?>
```

[View full source](https://github.com/wYaobiz/code-to-cloud-resources/blob/main/src/ch07-security/secure-file-upload/){ .md-button }

### Disabling execution in the upload directory

When uploads have to live under the web root, this configuration stops the server handing anything in that directory to a script interpreter, so a file that does get through cannot be executed.

```apache
# Place this as .htaccess inside the upload directory when the files must
# live under the web root.
#
# Even with type checks, a file that reaches an executable directory is a
# risk. These directives stop the server from running anything there.

# Do not hand any file in this directory to a script interpreter
php_flag engine off
RemoveHandler .php .phtml .php3 .php4 .php5 .php7 .phps
RemoveType .php .phtml .php3 .php4 .php5 .php7 .phps

# Serve only the file types this directory is meant to hold
<FilesMatch "\.(jpg|jpeg|png|gif)$">
    Require all granted
</FilesMatch>

<FilesMatch "\.(?!jpg|jpeg|png|gif$)">
    Require all denied
</FilesMatch>
```

[View full source](https://github.com/wYaobiz/code-to-cloud-resources/blob/main/src/ch07-security/secure-file-upload/){ .md-button }
