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
