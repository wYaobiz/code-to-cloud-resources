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
