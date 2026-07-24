# Escaping output to prevent XSS

A comment field that escapes user text before writing it into the page.

## What goes wrong without escaping

If a page prints submitted text unchanged, a comment containing `<script>` is delivered to every later visitor as working script, running in their browser with the site's privileges. From there it can read cookies, act as the user, or alter the page.

## What escaping does

`htmlspecialchars()` converts the characters that have structural meaning in HTML into entities. The text still displays exactly as the user typed it, but the browser treats it as content rather than markup.

Escape at the point of output rather than on input. The same value may be safe in one context and unsafe in another, and escaping when it is written means the correct treatment is applied for where it actually lands.

`ENT_QUOTES` covers both quote characters, which matters when a value is placed inside an HTML attribute.
