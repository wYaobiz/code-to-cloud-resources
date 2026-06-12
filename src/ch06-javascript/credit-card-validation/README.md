# Exercise 6.1 — Credit Card Validation

Reference implementation for the credit-card form validation exercise.

## Run it

Open `index.html` in any web browser. No server required.

## Try

- A valid number such as `1234 5678 9012 3456` triggers the success alert.
- Anything not matching four groups of four digits separated by single spaces triggers the re-entry alert and blocks submission.

## Key idea

The regular expression `/^([0-9]{4} ){3}[0-9]{4}$/` requires exactly four digits, a space, repeated three times, followed by a final four digits. The `onsubmit` handler returns `false` on failure to cancel the form submission.
