# HTML Code Examples

Worked code examples for the HTML chapters, drawn from the material used in the course. Each example shows the complete, runnable source with explanatory comments, followed by a note on what it produces. Every example lives in its own folder under `src/ch03-html/` so you can open it directly, view the source, or download it.

!!! note "How to run these"
    Each example is a standalone `.html` file. Open the linked file in any web browser to see the live result, or browse the source on GitHub. No server is required for these HTML examples (the file-upload and login forms reference a server-side script, so submitting them would need a server, but the markup still renders).

## Form Input Controls

### Date input

A single `date` input that lets the user choose a date from a calendar control.

```html
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Form Example</title>
</head>
<body>
  <!-- Allow the user to enter a date -->
  Choose a date : <input type="date">
</body>
</html>
```

**Produces:** a label followed by a date field that opens a calendar picker when clicked.

[View full source](https://github.com/wYaobiz/code-to-cloud-resources/blob/main/src/ch03-html/input-date/index.html){ .md-button }

### Numeric input

A short form pairing a plain text field for a name with a numeric field that accepts only numbers. The `type="number"` control shows spinner arrows and rejects non-numeric input.

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

**Produces:** two labeled fields on separate lines. The first accepts any text, and the second accepts only numeric entry with up and down spinner controls.

[View full source](https://github.com/wYaobiz/code-to-cloud-resources/blob/main/src/ch03-html/input-number/index.html){ .md-button }

### Range input

Uses `type="range"` to create a slider for a pain level from 1 (minimal) to 10 (severe), with labels at each end.

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

[View full source](https://github.com/wYaobiz/code-to-cloud-resources/blob/main/src/ch03-html/input-range/index.html){ .md-button }

### File upload input

A file-upload control inside a form. The form sets `enctype="multipart/form-data"`, which is required for uploading files.

```html
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>input type = file Example</title>
</head>
<body>
  <!-- Create a form that uploads a file -->
  <form method="POST" enctype="multipart/form-data">
    Click to upload a file : <input type="file" value="Select a file" />
  </form>
</body>
</html>
```

**Produces:** a label and a file-chooser button that opens the operating system's file dialog when clicked.

[View full source](https://github.com/wYaobiz/code-to-cloud-resources/blob/main/src/ch03-html/input-file/index.html){ .md-button }

### Various text input types

One form gathering several input types: text, password, a multi-line textarea, search, email (with an initial value supplied through the `value` attribute), telephone, and url. Each specialized type gives the browser a hint about the expected input.

```html
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Form Example</title>
</head>
<body>
  <!--
    Create a form with several input types and a submit button.
    The email field uses the value attribute to assign an initial value.
  -->
  <form action="#">
    <label>Enter your First Name :</label>
    <input type="text" id="firstName" name="firstName" />
    <br><br>
    <label>Enter your password:</label>
    <input type="password" id="myPassword" name="myPassword" />
    <br><br>
    <label>Enter a brief statement about yourself :</label>
    <textarea rows="6" cols="50" id="statement" name="statement"></textarea>
    <br><br>
    <label>Enter a string for the word to search for:</label>
    <input type="search" id="searchString" name="searchString" />
    <br><br>
    <label>Enter an email address:</label>
    <input type="email" id="myEmail" name="myEmail" value="JDoe@email.com">
    <br><br>
    <label>Enter a telephone number:</label>
    <input type="tel" id="myPhone" name="myPhone" />
    <br><br>
    <label>Enter a URL:</label>
    <input type="url" id="myURL" name="myURL" />
  </form>
  <input type="submit">
</body>
</html>
```

**Produces:** a series of labeled fields, one per line, each rendered according to its type. The password field masks input, the email field is preset to a sample address, and the textarea spans several lines.

[View full source](https://github.com/wYaobiz/code-to-cloud-resources/blob/main/src/ch03-html/text-input-types/index.html){ .md-button }

## Lists

### Nested unordered lists

A heading styled in a blue cursive face, then an unordered list of countries where each country contains its own nested unordered list of cities. Inline styles color each country differently.

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

**Produces:** a cursive blue heading above a bulleted list of three colored countries, each with its cities indented as a sub-list beneath it.

[View full source](https://github.com/wYaobiz/code-to-cloud-resources/blob/main/src/ch03-html/nested-list-unordered/index.html){ .md-button }

### Nested ordered lists

The same structure as the unordered example, but using ordered lists so each level is numbered.

```html
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Ordered List</title>
</head>
<body>
  <!-- Create a heading styled to be blue, bold, and in a cursive face -->
  <h1 style="color:blue; font-weight:bold; font-family:cursive">Countries To Visit</h1>

  <!-- Create an ordered list containing three nested ordered lists -->
  <ol>
    <li style="color:green">Ireland</li>
    <ol>
      <li>Dublin</li>
      <li>Donegal</li>
      <li>Dingle</li>
    </ol>
    <li style="color:goldenrod">Spain</li>
    <ol>
      <li>Valencia</li>
      <li>Madrid</li>
      <li>Barcelona</li>
    </ol>
    <li style="color:red">Italy</li>
    <ol>
      <li>Rome</li>
      <li>Florence</li>
      <li>Venice</li>
    </ol>
  </ol>
</body>
</html>
```

**Produces:** a cursive blue heading above a numbered list of three colored countries, each with its cities numbered as an indented sub-list.

[View full source](https://github.com/wYaobiz/code-to-cloud-resources/blob/main/src/ch03-html/nested-list-ordered/index.html){ .md-button }

### Description list

A description list (`dl`) that pairs each country name as a data term (`dt`) with its nickname as a data definition (`dd`).

```html
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Description List</title>
</head>
<body>
  <!-- Create a heading styled to be blue, bold, and in a cursive face -->
  <h1 style="color:blue; font-weight:bold; font-family:cursive">Countries To Visit</h1>

  <!--
    Create a description list with each country's name as the data term (dt)
    and its nickname as the data definition (dd).
  -->
  <dl>
    <dt style="color:green">Ireland</dt>
    <dd>The Emerald Isle</dd>
    <dt style="color:goldenrod">Spain</dt>
    <dd>La Roja</dd>
    <dt style="color:red">Italy</dt>
    <dd>Bel Paese</dd>
  </dl>
</body>
</html>
```

**Produces:** a cursive blue heading above three country names, each followed by its indented nickname.

[View full source](https://github.com/wYaobiz/code-to-cloud-resources/blob/main/src/ch03-html/description-list/index.html){ .md-button }

### List with paragraph elements

Nested ordered lists where each city is followed by a paragraph describing it, showing how block elements can sit between list items.

```html
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>List with Paragraphs</title>
</head>
<body>
  <!-- Create a heading styled to be blue, bold, and in a cursive face -->
  <h1 style="color:blue; font-weight:bold; font-family:cursive">Countries To Visit</h1>

  <!-- Create an ordered list of nested ordered lists, each city followed by a paragraph -->
  <ol>
    <li style="color:green">Ireland</li>
    <ol>
      <li>Dublin</li>
      <p>Capital city of Ireland located on the east coast of the Island in the province of Leinster</p>
      <li>Donegal</li>
      <p>Located on the northwest coast of the island in the province of Ulster</p>
      <li>Dingle</li>
      <p>Located southwest coast of the island in the province of Munster</p>
    </ol>
    <li style="color:goldenrod">Spain</li>
    <ol>
      <li>Valencia</li>
      <p>Located on the east coast of the Iberian Peninsula</p>
      <li>Madrid</li>
      <p>Capital city of Spain located in the center of the Iberian Peninsula</p>
      <li>Barcelona</li>
      <p>Located on the northeastern coast of Spain</p>
    </ol>
    <li style="color:red">Italy</li>
    <ol>
      <li>Rome</li>
      <p>Capital city of Italy located in the central-western part of the Italian Peninsula</p>
      <li>Florence</li>
      <p>Located in central part of the Italian Peninsula</p>
      <li>Venice</li>
      <p>An island city located in Northern Italy</p>
    </ol>
  </ol>
</body>
</html>
```

**Produces:** a numbered list of countries and cities, with a descriptive paragraph under each city.

[View full source](https://github.com/wYaobiz/code-to-cloud-resources/blob/main/src/ch03-html/list-with-paragraphs/index.html){ .md-button }

## Dropdown Menus

### Multiple selection dropdown

A `select` element with the `multiple` attribute, which lets the user choose several options at once, plus the `selected` attribute to preselect one.

```html
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Form Example</title>
</head>
<body>
  <!-- Create a form with a select element that allows multiple selections -->
  <form>
    <!-- Dropdown menu via the select element with the multiple attribute -->
    <select id="country" name="country" multiple>
      <option>Choose a city in a country</option>
      <option value="Ireland">Ireland</option>
      <option value="Italy" selected>Italy</option>
      <option value="Spain">Spain</option>
    </select>
    <p>Please press the Ctrl (Windows) or Command (Mac) key to select multiple options</p>
  </form>
</body>
</html>
```

**Produces:** a list box showing the options with Italy preselected, and a note explaining how to hold Ctrl or Command to select several.

[View full source](https://github.com/wYaobiz/code-to-cloud-resources/blob/main/src/ch03-html/select-multiple/index.html){ .md-button }

### Grouped options with optgroup

The `optgroup` element groups related options under a labeled heading inside a dropdown. This version corrects a few items from the original draft, where some cities were grouped under the wrong country, two names were misspelled, and one `optgroup` was missing its closing tag.

```html
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Form Example</title>
</head>
<body>
  <!-- Create a form with a select element that uses optgroup to group related options -->
  <form>
    <select id="country" name="country">
      <option>Choose a city in a country</option>
      <optgroup label="Ireland">
        <option>Dublin</option>
        <option>Donegal</option>
        <option>Dingle</option>
      </optgroup>
      <optgroup label="Italy">
        <option>Rome</option>
        <option>Florence</option>
        <option>Venice</option>
      </optgroup>
      <optgroup label="Spain">
        <option>Barcelona</option>
        <option>Madrid</option>
        <option>Valencia</option>
      </optgroup>
    </select>
  </form>
</body>
</html>
```

**Produces:** a dropdown whose options are grouped under bold country labels (Ireland, Italy, Spain), each with its cities listed beneath.

[View full source](https://github.com/wYaobiz/code-to-cloud-resources/blob/main/src/ch03-html/select-optgroup/index.html){ .md-button }

### Select with size attribute

The `size` attribute on a `select` element displays a fixed number of options as a scrollable list rather than a single-line dropdown.

```html
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Form Example</title>
</head>
<body>
  <!-- Create a form with a select element that uses the size attribute -->
  <form>
    <!-- The size attribute shows a set number of options at once -->
    <label>Choose a Country to Visit</label>
    <select id="country" name="country" size="2">
      <option>Ireland</option>
      <option>Italy</option>
      <option>Spain</option>
    </select>
  </form>
</body>
</html>
```

**Produces:** a label above a two-row list box showing the country options, scrollable to reach the rest.

[View full source](https://github.com/wYaobiz/code-to-cloud-resources/blob/main/src/ch03-html/select-size/index.html){ .md-button }

## Tables

### Basic table

A basic table of children's authors with a header row and data rows, styled with a header background, centered cells, and thin borders.

```html
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Table of Authors</title>
  <!-- Style the th and td elements -->
  <style>
    th { background-color: lightsteelblue; }
    td { text-align: center; }
    td, th { border: thin solid black; }
  </style>
</head>
<body>
  <!-- Create a table that contains data about children's authors -->
  <table>
    <tr>
      <th>Author Name</th>
      <th>Title of Book</th>
      <th>Year Published</th>
    </tr>
    <tr>
      <td>Beatrix Potter</td>
      <td>The Tale of Peter Rabbit</td>
      <td>1902</td>
    </tr>
    <tr>
      <td>A A Milne</td>
      <td>Winnie the Pooh</td>
      <td>1926</td>
    </tr>
    <tr>
      <td>Eric Carle</td>
      <td>The Very Hungry Caterpillar</td>
      <td>1969</td>
    </tr>
    <tr>
      <td>Marcus Pfister</td>
      <td>The Rainbow Fish</td>
      <td>1999</td>
    </tr>
  </table>
</body>
</html>
```

**Produces:** a three-column table with a shaded header row and four author entries, all cells centered and bordered.

[View full source](https://github.com/wYaobiz/code-to-cloud-resources/blob/main/src/ch03-html/table-basic/index.html){ .md-button }

### Spanning columns with colspan

Uses the `colspan` attribute so a single header cell spans two columns. Here the author's first and last names occupy two columns under one "Author Name" heading.

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
    <tr>
      <td>A A</td>
      <td>Milne</td>
      <td>Winnie the Pooh</td>
      <td>1926</td>
    </tr>
    <tr>
      <td>Eric</td>
      <td>Carle</td>
      <td>The Very Hungry Caterpillar</td>
      <td>1969</td>
    </tr>
    <tr>
      <td>Marcus</td>
      <td>Pfister</td>
      <td>The Rainbow Fish</td>
      <td>1999</td>
    </tr>
  </table>
</body>
</html>
```

**Produces:** a four-column table where the single "Author Name" header sits above the first two columns, while "Title of Book" and "Year Published" each head their own column.

[View full source](https://github.com/wYaobiz/code-to-cloud-resources/blob/main/src/ch03-html/table-colspan/index.html){ .md-button }

### Spanning rows with rowspan

Uses the `rowspan` attribute so a single cell spans two rows, here letting each "Title of Book" header cover two book titles by the same author.

```html
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>rowspan Example</title>
  <!-- Style the table -->
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
      <th>Author Name</th>
      <td>Beatrix Potter</td>
    </tr>
    <tr>
      <!-- Use the rowspan attribute to have the heading span over two rows -->
      <th rowspan="2">Title of Book</th>
      <td>The Tale of Peter Rabbit</td>
    </tr>
    <tr>
      <td>The Tale of Benjamin Bunny</td>
    </tr>
    <tr>
      <th>Author Name</th>
      <td>A A Milne</td>
    </tr>
    <tr>
      <th rowspan="2">Title of Book</th>
      <td>Winnie the Pooh</td>
    </tr>
    <tr>
      <td>The House at Pooh Corner</td>
    </tr>
    <tr>
      <th>Author Name</th>
      <td>Eric Carle</td>
    </tr>
    <tr>
      <th rowspan="2">Title of Book</th>
      <td>The Very Hungry Caterpillar</td>
    </tr>
    <tr>
      <td>The Busy Spider</td>
    </tr>
    <tr>
      <th>Author Name</th>
      <td>Marcus Pfister</td>
    </tr>
    <tr>
      <th rowspan="2">Title of Book</th>
      <td>The Rainbow Fish</td>
    </tr>
    <tr>
      <td>Dazzle the Dinosaur</td>
    </tr>
  </table>
</body>
</html>
```

**Produces:** a table where each "Title of Book" header cell stretches down across two rows of titles for the same author.

[View full source](https://github.com/wYaobiz/code-to-cloud-resources/blob/main/src/ch03-html/table-rowspan/index.html){ .md-button }

## Putting Controls Together

### A complete login form

Combines several controls into one working form: text and password fields for credentials, a dropdown to pick a transaction, and a submit button. The `action` attribute names the PHP script that would process the data, and `onsubmit` calls a validation script before the form is sent.

```html
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Form Example</title>
</head>
<body>
  <h1>LOGIN PAGE</h1>

  <!--
    Create a form with two input fields, a dropdown menu, and a submit button.
    The action attribute names the PHP script that processes the submitted data.
    The onsubmit attribute runs a validate() script when the form is submitted.
  -->
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
</body>
</html>
```

**Produces:** a "LOGIN PAGE" heading above a form with a username field, a masked password field, a transaction dropdown, and a SUBMIT button.

[View full source](https://github.com/wYaobiz/code-to-cloud-resources/blob/main/src/ch03-html/login-form/index.html){ .md-button }
