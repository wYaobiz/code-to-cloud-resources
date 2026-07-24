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
