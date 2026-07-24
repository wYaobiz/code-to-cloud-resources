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
