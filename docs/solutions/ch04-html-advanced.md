# Chapter 4 · HTML II: Forms, Standards, and Advanced Features

Selected solutions for the review questions on forms, HTML5, semantics, media, encodings, and MIME types. See the [section introduction](index.md) for scope and the disclaimer.

### Problem 4.1
**GET vs. POST for form submission.**

GET appends the form data to the URL as a query string, which makes it visible, bookmarkable, and limited in length. POST sends the data in the request body, which keeps it out of the URL and allows larger amounts. Use GET for safe, repeatable requests such as a search, where having the parameters in the URL is useful, and use POST when the request changes server state or carries sensitive or large data, such as creating an account or uploading content.

### Problem 4.2
**Radio buttons vs. checkboxes.**

Radio buttons in a group share the same name and allow only one selection at a time, so choosing one deselects the others. Checkboxes allow any number of selections, including none. When submitted, a radio group sends a single name-value pair for the chosen option, while a set of checkboxes sends a separate name-value pair for each box that is checked.

### Problem 4.3
**Allowing file uploads in a form.**

The form must use the POST method and set the encoding type to multipart/form-data with enctype="multipart/form-data", and it needs an `<input type="file">` control. On the server side you must handle the uploaded file from the appropriate upload array, validate its type and size, and move it to a safe location, since accepting files introduces security considerations that plain text fields do not.

### Problem 4.5
**Semantic HTML5 elements.**

Semantic elements describe the meaning of the content they contain rather than just its appearance. Two examples are `<nav>`, which marks a navigation menu, and `<article>`, which marks a self-contained piece of content such as a blog post. They are useful because they make the document structure clearer to browsers, search engines, and assistive technology, which improves accessibility and machine readability compared to using generic `<div>` elements everywhere.

### Problem 4.9
**Why the DOCTYPE matters.**

The DOCTYPE declaration tells the browser which rendering mode to use. With a proper DOCTYPE the browser uses standards mode, where it follows modern specifications consistently; without one it may fall back to quirks mode, which emulates old, inconsistent behavior. The HTML5 doctype is simply `<!DOCTYPE html>`, placed at the very top of the document.

### Problem 4.10
**Specifying character encoding.**

You declare the encoding with `<meta charset="UTF-8">` near the top of the `<head>`, or equivalently through a Content-Type HTTP header. It matters because the browser must know how to turn the page's bytes back into characters. If the declared encoding does not match the file's actual encoding, non-ASCII text such as accented letters or symbols appears garbled. UTF-8 is the standard choice because it covers virtually all characters.

### Problem 4.13
**MIME types and how servers use them.**

A MIME type is a standardized label identifying the kind of data in a file, such as text/html for a web page or image/png for an image. When a server sends a file, it includes a Content-Type header with the MIME type so the browser knows how to handle the response, for example rendering it as a page, displaying it as an image, or offering it as a download.
