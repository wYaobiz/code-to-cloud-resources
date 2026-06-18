# HTML Code Examples

Worked code examples for the HTML chapters, drawn from the material used in the course. Each example shows the complete, runnable source with explanatory comments, followed by a note on what it produces. Every example lives in its own folder under `src/ch03-html/` so you can open it directly, view the source, or download it.

!!! note "How to run these"
    Each example is a standalone `.html` file. Open the linked file in any web browser to see the live result, or browse the source on GitHub. No server is required for these HTML examples.

## Tables

### Spanning columns with `colspan`

This example builds a table of authors and their books, using the `colspan` attribute so a single header cell spans two columns. The accompanying styles give the header a background color, center the cell text, and add thin borders.

```html
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>colspan Example</title>
  <!-- Style the table cells: header background, centered text, thin borders -->
  <style>
    th { background-color: lightsteelblue; }
    td { text-align: center; }
    td, th { border: thin solid black; }
  </style>
</head>
<body>
  <!-- Create a table of authors and their books -->
  <table>
    <tr>
      <!-- Use the colspan attribute to have the heading span over two columns -->
      <th colspan="2">Author Name</th>
      <th>Title of Book</th>
      <th>Year Published</th>
    </tr>
    <tr>
      <td>Beatrix</td>
      <td>Potter</td>
      <td>The Tale of Peter Rabbit</td>
      <td>1902</td>
    </tr>
    <!-- additional rows omitted here for brevity; see the full file -->
  </table>
</body>
</html>
```

**Produces:** a four-column table where the single "Author Name" header sits above the first two columns (first name and last name), while "Title of Book" and "Year Published" each head their own column.

[View full source](https://github.com/<YOUR-USERNAME>/code-to-cloud-resources/blob/main/src/ch03-html/table-colspan/index.html){ .md-button }

## Lists

### Nested unordered lists

This example creates a heading styled in a blue cursive face, then an unordered list of countries where each country contains its own nested unordered list of cities. Inline styles color each country differently.

```html
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Unordered List</title>
</head>
<body>
  <!-- Create a heading styled to be blue, bold, and in a cursive face -->
  <h1 style="color:blue; font-weight:bold; font-family:cursive">Countries To Visit</h1>

  <!-- Create an unordered list containing three nested unordered lists -->
  <ul>
    <li style="color:green">Ireland</li>
    <ul>
      <li>Dublin</li>
      <li>Donegal</li>
      <li>Dingle</li>
    </ul>
    <li style="color:goldenrod">Spain</li>
    <ul>
      <li>Valencia</li>
      <li>Madrid</li>
      <li>Barcelona</li>
    </ul>
    <li style="color:red">Italy</li>
    <ul>
      <li>Rome</li>
      <li>Florence</li>
      <li>Venice</li>
    </ul>
  </ul>
</body>
</html>
```

**Produces:** a cursive blue heading "Countries To Visit" above a bulleted list of three countries, each in its own color, with the cities indented as a sub-list beneath each country.

[View full source](https://github.com/<YOUR-USERNAME>/code-to-cloud-resources/blob/main/src/ch03-html/nested-list-unordered/index.html){ .md-button }

## Form Input Controls

### Numeric input

A short form that pairs a plain text field for a name with a numeric field that accepts only numbers. The `type="number"` control shows spinner arrows and rejects non-numeric input.

```html
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Form Example</title>
</head>
<body>
  <!-- Create a form that uses input type = number -->
  Employee Name: <input type="text" />
  <br>
  Number of Hours Worked: <input type="number" />
</body>
</html>
```

**Produces:** two labeled fields on separate lines. The first accepts any text, and the second accepts only numeric entry, with up and down spinner controls.

[View full source](https://github.com/<YOUR-USERNAME>/code-to-cloud-resources/blob/main/src/ch03-html/input-number/index.html){ .md-button }

### Range input

This example uses `type="range"` to create a slider for a pain level from 1 (minimal) to 10 (severe), with labels at each end.

```html
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Form Example</title>
</head>
<body>
  <!-- Create a form that uses input type = range -->
  <label>Pain Level</label>
  <br>
  Minimal
  <input type="range" min="1" max="10" step="1" />
  Severe
</body>
</html>
```

**Produces:** a "Pain Level" label above a draggable slider, with "Minimal" to its left and "Severe" to its right, stepping in whole numbers from 1 to 10.

[View full source](https://github.com/<YOUR-USERNAME>/code-to-cloud-resources/blob/main/src/ch03-html/input-range/index.html){ .md-button }

## Putting Controls Together

### A complete login form

This example combines several controls into one working form: text and password fields for credentials, a dropdown to pick a transaction, and a submit button. The `action` attribute names the PHP script that would process the data on the server, and `onsubmit` calls a validation script before the form is sent.

```html
<form action="processtransaction.php" method="POST" onsubmit="return validate();">
  <div>
    <!-- Input fields for the user name and password -->
    <label>Username</label>
    <input type="text" id="username" name="username" />
    <br><br>
    <label>Password</label>
    <input type="password" id="password" name="password" />
  </div>
  <br><br>
  <div>
    <!-- Transactions that can be chosen by the user -->
    <label>Transaction</label>
    <select id="choice" name="choice">
      <option>Select one of the following</option>
      <option>Search Your Account(s)</option>
      <option>Make a Payment</option>
      <option>Logout</option>
    </select>
  </div>
  <div>
    <br><br>
    <input type="submit" value="SUBMIT" />
  </div>
</form>
```

**Produces:** a "LOGIN PAGE" heading above a form with a username field, a password field that masks input, a transaction dropdown, and a SUBMIT button. On submission the form would post the data to the named PHP script after the validation function runs.

[View full source](https://github.com/<YOUR-USERNAME>/code-to-cloud-resources/blob/main/src/ch03-html/login-form/index.html){ .md-button }
