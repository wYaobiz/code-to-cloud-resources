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
