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
