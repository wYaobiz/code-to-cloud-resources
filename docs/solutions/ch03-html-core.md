# Chapter 3 · HTML Core

Suggested solutions for the review questions and hands-on exercises covering the fundamentals of HTML — document structure, text elements, links, lists, tables, and images.

!!! note
    Attempt each problem yourself before consulting these solutions. For exercises that build something, a complete reference implementation is linked under [Source Code](../code/index.md).

## Review Questions

### Problem 3.1
**What is the purpose of HTML in the context of web development?**

HTML (HyperText Markup Language) defines the structure and content of a web page. In a three-tier web application, HTML belongs to the client tier: the browser receives HTML from the server and renders it for the user. It is often called the structure or skeleton of a page because it marks up what each piece of content *is* — a heading, a paragraph, a list, a link — while CSS handles appearance and JavaScript handles behavior.

### Problem 3.2
**Describe the basic structure of an HTML document.**

A minimal HTML document has a `<!DOCTYPE html>` declaration followed by an `<html>` element containing two parts. The `<head>` holds metadata that is not displayed directly — the page `<title>`, character encoding, links to stylesheets, and `<meta>` tags. The `<body>` holds everything the user sees: headings, paragraphs, images, links, and other visible content.

### Problem 3.3
**What is the difference between a block-level element and an inline element?**

Block-level elements (such as `<div>`, `<p>`, and `<h1>`) start on a new line and span the full available width, stacking vertically. Inline elements (such as `<span>`, `<a>`, and `<strong>`) flow within a line of text and take only as much width as their content needs, sitting side by side.

### Problem 3.4
**How do you create a paragraph break and a line break in HTML?**

Use the `<p>` element to define a new paragraph, which the browser renders with vertical spacing before and after. Use `<br>` to force a line break within the same paragraph, moving to a new line without starting a new paragraph block.

!!! tip "Remaining questions"
    Problems 3.5 through the end of the chapter (lists, tables, `colspan`/`rowspan`, character entities, accessibility, `<thead>`/`<tbody>`/`<tfoot>`) follow the same concise-answer format. Fill these in as you work through the chapter.

## Hands-On Exercises

### Exercise 3.1 — Build a Structured Article Page
**Goal.** Create a single HTML page that demonstrates correct use of headings, paragraphs, lists, links, and an image with alternative text.

**Approach.** Start from a valid document skeleton. Use a single `<h1>` for the page title and `<h2>`/`<h3>` for sections in a logical hierarchy. Include at least one unordered and one ordered list, an anchor linking to an external page, and an `<img>` with a meaningful `alt` attribute. Validate the result with the [W3C Markup Validator](https://validator.w3.org/).

**Reference implementation:** [`src/ch03-html/`](../code/index.md)
