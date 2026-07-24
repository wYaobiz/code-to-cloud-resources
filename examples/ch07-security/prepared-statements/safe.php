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
