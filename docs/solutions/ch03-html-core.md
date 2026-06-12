# Chapter 3 · HTML I: Core Elements and Markup

Selected solutions for the review questions on HTML document structure, text elements, links, lists, tables, and images. See the [section introduction](index.md) for scope and the disclaimer.

### Problem 3.1
**The purpose of HTML.**

HTML defines the structure and content of a web page. In a three-tier web application, HTML belongs to the client tier: the browser receives it from the server and renders it for the user. It is called the structure or skeleton of a page because it marks up what each piece of content is, such as a heading, a paragraph, a list, or a link, while CSS handles appearance and JavaScript handles behavior.

### Problem 3.2
**Basic structure of an HTML document.**

A minimal document has a `<!DOCTYPE html>` declaration followed by an `<html>` element containing two parts. The `<head>` holds metadata that is not displayed directly, such as the page `<title>`, character encoding, links to stylesheets, and `<meta>` tags. The `<body>` holds everything the user sees, including headings, paragraphs, images, and links.

### Problem 3.3
**Block-level vs. inline elements.**

Block-level elements such as `<div>`, `<p>`, and `<h1>` start on a new line and span the full available width, stacking vertically. Inline elements such as `<span>`, `<a>`, and `<strong>` flow within a line of text and take only as much width as their content needs, sitting side by side.

### Problem 3.7
**The alt attribute on images.**

The alt attribute supplies alternative text that describes an image. It matters because it is shown when an image fails to load, and screen readers announce it to users who cannot see the image, which makes it essential for accessibility. It also gives search engines a textual description of the image. A good alt text for a chart describes what the chart conveys, for example "Bar chart showing quarterly revenue rising from Q1 to Q4," rather than a vague label like "chart."

### Problem 3.8
**Relative paths vs. absolute URLs.**

A relative path is interpreted relative to the current page's location, while an absolute URL specifies the complete address including the protocol and domain. If your page is at http://mywebsite.com/about/team.html, then src="images/photo.jpg" refers to http://mywebsite.com/about/images/photo.jpg, resolved relative to the current folder, whereas the absolute form points to the exact stated address regardless of where the page lives. Relative paths keep a site portable across domains and folders, while absolute URLs are needed when linking to resources on other sites.

### Problem 3.12
**The `<tr>`, `<td>`, and `<th>` tags.**

`<tr>` defines a table row, `<td>` defines a standard data cell within a row, and `<th>` defines a header cell. A row is a horizontal group of cells. Header cells differ from data cells in meaning and default rendering: browsers typically display `<th>` content bold and centered, and screen readers treat header cells as labels for the data cells they describe.

### Problem 3.13
**Spanning cells across columns and rows.**

To make a cell span two columns, use the colspan attribute, as in `<td colspan="2">`, which makes that single cell occupy the width of two. The row then needs one fewer cell to keep the column count consistent. To span multiple rows, use the rowspan attribute, as in `<td rowspan="2">`, which extends a cell downward over the stated number of rows.

### Problem 3.19
**HTML character entities.**

Character entities are codes that represent characters which either have special meaning in HTML or are hard to type directly. Three common ones are `&amp;` for an ampersand, `&lt;` for a less-than sign, and `&copy;` for a copyright symbol. You cannot always type the literal character because some, like `<` and `&`, are part of HTML syntax: a literal `<` would be read as the start of a tag, so it must be escaped to display as text.

### Problem 3.20
**The `<thead>`, `<tbody>`, and `<tfoot>` elements.**

These elements group the rows of a table into a header section, a body section, and a footer section. They clarify the table's structure, which helps when styling each region differently and lets browsers repeat the header and footer when a long table prints across pages. They also improve accessibility by giving assistive technology a clearer model of the table.
