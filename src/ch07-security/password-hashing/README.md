# Storing and verifying passwords

Two scripts showing the pair of functions that handle passwords safely: `password_hash()` when an account is created, and `password_verify()` at login.

## Why hashing matters

A hash cannot be reversed, so a leaked database gives an attacker no usable passwords. `password_hash()` also salts each password automatically, which defeats precomputed lookup tables, and it uses a deliberately slow algorithm, which makes large scale guessing expensive.

Older approaches such as MD5 or SHA-1 are unsuitable here. They were designed to be fast, which is the opposite of what password storage needs.

## Two details worth noting

`session_regenerate_id(true)` issues a new session ID on successful login, which prevents session fixation.

The failure message does not say whether the username or the password was wrong. Distinguishing the two lets an attacker discover which accounts exist.
