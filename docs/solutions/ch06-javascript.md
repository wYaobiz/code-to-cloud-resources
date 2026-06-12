# Chapter 6 · JavaScript

Suggested solutions for the review questions and hands-on exercises covering client-side JavaScript — the DOM, events, form validation, dynamic content, AJAX, and an introduction to SPA frameworks.

!!! note
    Attempt each problem yourself before consulting these solutions. For exercises that build something, a complete reference implementation is linked under [Source Code](../code/index.md).

## Review Questions

### Problem 6.11
**What is a Single Page Application (SPA)? How do frameworks like Angular or React relate to it?**

A Single Page Application loads a single HTML document once, then updates the content dynamically with JavaScript as the user interacts, rather than requesting a fresh page from the server for each view. This produces a faster, app-like experience. Frameworks such as Angular and React provide the structure and tooling to build SPAs efficiently, managing how the interface updates in response to changing data.

### Problem 6.12
**Angular is described as a "full-featured framework." Who maintains it, and what language is it built with? Name one core concept.**

Angular is maintained by Google and is built with TypeScript, a typed superset of JavaScript. One core concept is its component-based architecture, where the interface is composed of reusable components; another is two-way data binding, which keeps the model and view synchronized.

### Problem 6.13
**React is often called a library rather than a full framework. Who created it, and what key feature makes it unique?**

React was created at Facebook (now Meta). A defining feature is the Virtual DOM: React keeps a lightweight in-memory representation of the interface, and when state changes it computes the minimal set of real DOM updates needed, which makes updates efficient compared to manipulating the DOM directly.

### Problem 6.14
**If your JavaScript is not working as expected, what tools or techniques help you debug it?**

Open the browser's developer tools (F12) and check the Console for error messages. Use `console.log()` to inspect values at different points, set breakpoints in the Sources/Debugger panel to step through execution line by line, and watch variables as they change. The Network tab helps diagnose failed requests in AJAX-based code.

### Problem 6.15
**Which JavaScript function generates a random number, and what range does it return?**

`Math.random()` returns a floating-point number in the range from 0 (inclusive) to 1 (exclusive). To simulate a dice roll, scale and shift it: `Math.floor(Math.random() * 6) + 1` produces an integer from 1 to 6.

## Hands-On Exercises

### Exercise 6.1 — Validating a Credit Card Form
**Goal.** Build an HTML form with a card-number input and validate its format with JavaScript on submit.

**Approach.** Give the `<input>` an `id`, `name`, `placeholder`, and `title`. Attach an `onsubmit` handler that tests the value against the regular expression `/^([0-9]{4} ){3}[0-9]{4}$/`, which requires four groups of four digits separated by spaces. On a match, alert success; otherwise alert a re-entry message and `return false` to block submission.

**Reference implementation:** [`src/ch06-javascript/credit-card-validation/`](../code/index.md)

### Exercise 6.2 — Image Toggle on Click
**Goal.** Display an image that switches between two pictures each time it is clicked.

**Approach.** Place an `<img>` with an `id` and the first image as its `src`. Write a function that inspects the current `src` (or a tracking variable) with an `if...else` and swaps to the other image. Trigger it with an `onclick` attribute or `addEventListener("click", ...)`. Update the `alt` text alongside the image so the toggle state stays consistent.

**Reference implementation:** [`src/ch06-javascript/image-toggle/`](../code/index.md)
