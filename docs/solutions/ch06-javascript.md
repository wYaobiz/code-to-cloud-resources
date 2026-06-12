# Chapter 6 · JavaScript

Selected solutions for the review questions on client-side JavaScript, the DOM, events, validation, AJAX, and frameworks. See the [section introduction](index.md) for scope and the disclaimer.

### Problem 6.1
**Two ways to include JavaScript.**

You can place code directly inside a `<script>` block in the HTML (internal), or link to a separate file with `<script src="...">` (external). Internal scripts keep small bits of code with the page, while external files separate behavior from structure and can be cached and reused across pages, which is preferred for anything beyond a trivial snippet.

### Problem 6.3
**Events and event handlers.**

An event is a signal that something happened, such as a click, a key press, or the page finishing loading. Events let you run code in response to user actions rather than only when the page loads. For example, a button click is an event, and the handler is the function that runs when it occurs, attached with an onclick attribute or with addEventListener("click", handler).

### Problem 6.5
**Accessing and changing an element.**

You select an element with a method such as document.getElementById, which requires the element to have an id attribute. Once you have a reference, you can change its content through properties like innerHTML or textContent, or change its appearance through the style property, for example element.style.color = "red".

### Problem 6.7
**Loops, and for vs. while.**

A loop repeats a block of code. A for loop is convenient when you know how many iterations you need, since it bundles the counter setup, condition, and increment in one line. A while loop repeats as long as a condition holds and suits cases where the number of iterations is not known in advance, such as reading until input runs out.

### Problem 6.10
**AJAX.**

AJAX lets a page exchange data with the server in the background and update part of the page without a full reload. This is important for modern applications because it produces a smoother, faster experience: a user can submit a form, load more results, or get live suggestions while the rest of the page stays in place, rather than waiting for a whole new page each time.

### Problem 6.11
**Single Page Applications.**

A Single Page Application loads one HTML document and then updates content dynamically with JavaScript as the user interacts, instead of fetching a new page from the server for each view. Frameworks such as Angular and React provide the structure and tooling to build SPAs efficiently, managing how the interface updates as the underlying data changes.

### Problem 6.13
**React.**

React was created at Facebook (now Meta). A defining feature is the Virtual DOM: React keeps a lightweight in-memory representation of the interface, and when state changes it computes the minimal set of real DOM updates needed, which makes rendering efficient compared to manipulating the DOM directly.

### Problem 6.15
**Generating random numbers.**

`Math.random()` returns a floating-point number from 0 inclusive up to 1 exclusive. To simulate a dice roll, scale and shift it: `Math.floor(Math.random() * 6) + 1` gives an integer from 1 to 6.

## Selected coding exercises

### Problem 6.16: Credit Card Form Validation
A complete reference implementation is provided in the repository at `src/ch06-javascript/credit-card-validation/`. The form uses an `onsubmit` handler that tests the input against the regular expression `/^([0-9]{4} ){3}[0-9]{4}$/`, alerts success or failure, and returns `false` to cancel submission when the format is wrong.

### Problem 6.17: Image Toggle on Click
The approach: place an `<img>` with an id and the first image as its src, then write a function that inspects the current src and swaps to the other image with an if...else, updating the alt text to match. Trigger it with an onclick attribute or addEventListener so each click toggles the state correctly.
