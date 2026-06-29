# CSS Code Examples

Worked code examples for the CSS chapter, drawn from the material used in the course. Each example shows the complete, runnable source with explanatory comments, followed by a live preview and a button to view the full source on GitHub. Every example lives in its own folder under `src/ch05-css/`.

!!! note "Live previews"
    Each example below shows a live preview rendered directly in your browser, followed by a button to view the full source on GitHub. These CSS examples run entirely in the browser, so no server is required.

## Ways to Apply CSS

### Inline styling

Applies CSS directly through the `style` attribute on individual elements. Inline styles have the highest specificity but cannot be reused, so they suit one-off adjustments.

```html
<!DOCTYPE html>

<html>

<head>

<meta charset="UTF-8">

<title>inline styling</title>

</head>

<body>

<!-- Code that uses inline styling for h1, li and ul elements -->

<h1 style= "color:blue; font-weight:bold;font-family:cursive">Countries To Visit</h1>

<ul>

  <li style = "color:green">Ireland</li>

<ul style = "font-style: italic">

    <li> Dublin</li>

<li> Donegal</li>

<li> Dingle</li>

</ul>

</ul>

 </body>

</html>
```

**Produces:** a blue cursive heading above a nested list, with the styling applied directly on each element.

<iframe src="../../examples/ch05-css/inline-styling/index.html" style="width:100%; height:200px; border:1px solid var(--md-default-fg-color--lightest); border-radius:4px; background:white; margin-bottom:0.5rem;" title="Live preview of inline-styling" loading="lazy"></iframe>

[View full source](https://github.com/wYaobiz/code-to-cloud-resources/blob/main/src/ch05-css/inline-styling/index.html){ .md-button }

### Internal (embedded) styling

Places CSS in a `<style>` block inside the document `<head>`. The rules apply to the whole page but are not shared with other pages.

```html
<!DOCTYPE html>

<html>

<head>

  <meta charset="utf-8">

  <title>embedded styling</title>

<!-- Code the embedded or internal style sheets -->

  <style>

   h1

   {

      color:blue;

      font-weight:bold;

      font-family:cursive;

   }

  li

   {

      color:green;

      font-size: 24pt

   }

  ul

   {

      font-style: italic;

   }

  </style>

</head>

<body>

<h1 >Countries To Visit</h1>

<ul>

  <li>Ireland</li>

<ul>

    <li> Dublin</li>

<li> Donegal</li>

<li> Dingle</li>

</ul>

</ul>

</body>

</html>
```

**Produces:** the same styled list as the inline example, but driven by a single style block in the head.

<iframe src="../../examples/ch05-css/embedded-styling/index.html" style="width:100%; height:260px; border:1px solid var(--md-default-fg-color--lightest); border-radius:4px; background:white; margin-bottom:0.5rem;" title="Live preview of embedded-styling" loading="lazy"></iframe>

[View full source](https://github.com/wYaobiz/code-to-cloud-resources/blob/main/src/ch05-css/embedded-styling/index.html){ .md-button }

### External styling

Links a separate stylesheet with `<link>`. This is the standard approach for real sites, since one stylesheet can style many pages and is cached by the browser. (The accompanying `countries.css` is included in the example folder.)

```html
<!DOCTYPE html>

<html>

<head>

  <meta charset="utf-8">

  <title>external styling</title>

<!-- Link to external style sheet for the page -->

 <link rel="stylesheet" href="countries.css" />

</head>

<body>

<h1 >Countries To Visit</h1>

<ul>

  <li>Ireland</li>

<ul>

    <li> Dublin</li>

<li> Donegal</li>

<li> Dingle</li>

</ul>

</ul>

</body>

</html>
```

**Produces:** the styled list rendered from rules kept in an external `countries.css` file.

<iframe src="../../examples/ch05-css/external-styling/index.html" style="width:100%; height:200px; border:1px solid var(--md-default-fg-color--lightest); border-radius:4px; background:white; margin-bottom:0.5rem;" title="Live preview of external-styling" loading="lazy"></iframe>

[View full source](https://github.com/wYaobiz/code-to-cloud-resources/blob/main/src/ch05-css/external-styling/index.html){ .md-button }

## Specificity

### Specificity rules

Shows how CSS decides which rule wins when several target the same element. An id selector outweighs a class, which outweighs an element selector, regardless of source order.

```html
<!DOCTYPE html>

<html>

<head>

<meta charset="UTF-8">

<title>Rules of Specificity</title>

<style>

 body{

  font-weight:bold;

  font-family:Lucida, Times New Roman, serif;

  color:cornflowerblue;

 }

 div{

  font-weight:bold;

  color:maroon;

}

 p{

color:blue;

}

#para1{

    font-family: sans-serif, Times New Roman, Arial;

font-weight: bold;

font-size: 12pt;

color:limegreen;

}

.lang{

font-style: italic;

color:red;

}

</style>

</head>

<body>

  <h1>Welcome to Web Applications</h1>

  <div>

       <h2>Front End Languages taught:</h2>

       <p>HTML,CSS, JavaScript</p>

       <p id = "para1">Back End Languages taught:</p>

       <p class = "lang">SQL and PHP</p>

 </div>

</body>

</html>
```

**Produces:** a page where each paragraph takes its color from the most specific rule that targets it, demonstrating the specificity hierarchy.

<iframe src="../../examples/ch05-css/specificity/index.html" style="width:100%; height:240px; border:1px solid var(--md-default-fg-color--lightest); border-radius:4px; background:white; margin-bottom:0.5rem;" title="Live preview of specificity" loading="lazy"></iframe>

[View full source](https://github.com/wYaobiz/code-to-cloud-resources/blob/main/src/ch05-css/specificity/index.html){ .md-button }

## Selectors

### Element / type selectors

Targets all elements of a given tag, such as every `<p>` or every `<em>`.

```html
<!DOCTYPE html>

<html>

<head>

  <meta charset="utf-8">

  <title>Element/Type Selectors</title>

 <style>

   em

    {

      color: blue;

    }

   p

    {

      margin: 10px 0 5px 0;

  font-family: sans-serif, Times New Roman, Arial;

  font-size: 12pt;

  font-weight: bold;

    }

 </style>

</head>

<body>

<p>

This page demonstrates the use of <em>Element/Type selectors</em>

</p>

</body>

</html>
```

**Produces:** text where every element of the selected type receives the same styling.

<iframe src="../../examples/ch05-css/selector-element/index.html" style="width:100%; height:200px; border:1px solid var(--md-default-fg-color--lightest); border-radius:4px; background:white; margin-bottom:0.5rem;" title="Live preview of selector-element" loading="lazy"></iframe>

[View full source](https://github.com/wYaobiz/code-to-cloud-resources/blob/main/src/ch05-css/selector-element/index.html){ .md-button }

### Universal selector

The universal selector `*` matches every element on the page, useful for broad resets but applied with care.

```html
<!DOCTYPE html>

<html>

<head>

  <meta charset="utf-8">

  <title>Universal Element Selector</title>

 <style>

  * {

       color: blue; /* color of all the elements is set to blue*/

       font-weight: bold; /* font weight for all the elements is set to bold*/

       font-family:cursive /*font family for all elements is set to cursive*/

      }

</style>

</head>

<body>

<h1>The universal element selector</h1>

<p>

This page demonstrates the use of * (universal element selector)

</p>

<p>

All the elements (h1, h2, p, ul, li)will have the same styling

</p>

<h2> A simple list styled via the * selector</h2>

<ul>

 <li>Item One </li>

 <li>Item Two </li>

 <li>Item Three </li>

</ul>

</body>

</html>
```

**Produces:** a page where a single rule reaches every element through the universal selector.

<iframe src="../../examples/ch05-css/selector-universal/index.html" style="width:100%; height:200px; border:1px solid var(--md-default-fg-color--lightest); border-radius:4px; background:white; margin-bottom:0.5rem;" title="Live preview of selector-universal" loading="lazy"></iframe>

[View full source](https://github.com/wYaobiz/code-to-cloud-resources/blob/main/src/ch05-css/selector-universal/index.html){ .md-button }

### Group selectors

Groups several selectors separated by commas so one rule block applies to all of them at once.

```html
<!DOCTYPE html>

<html>

<head>

  <meta charset="utf-8">

  <title>Group Selectors</title>

 <style>

  h1, h2

   {

 color: blue; /* color of all the elements is set to blue*/

 font-weight: bold; /* font weight for all the elements is set to bold*/

 font-family:cursive; /*font family for all elements is set to cursive*/

 text-align:center;

   }

</style>

</head>

<body>

<h1>Group Selectors</h1>

<p>

This page demonstrates the use of group selectors

</p>

<p>

The styling for the elements h1 and h2 are grouped so they will have the same styling

</p>

<h2> A simple list </h2>

<ul>

 <li>Item One </li>

 <li>Item Two </li>

 <li>Item Three </li>

</ul>

</body>

</html>
```

**Produces:** several different elements sharing one set of declarations through a grouped selector.

<iframe src="../../examples/ch05-css/selector-group/index.html" style="width:100%; height:220px; border:1px solid var(--md-default-fg-color--lightest); border-radius:4px; background:white; margin-bottom:0.5rem;" title="Live preview of selector-group" loading="lazy"></iframe>

[View full source](https://github.com/wYaobiz/code-to-cloud-resources/blob/main/src/ch05-css/selector-group/index.html){ .md-button }

### Class selectors

Targets elements carrying a given `class` attribute. Classes are reusable across many elements, which makes them the workhorse of CSS styling.

```html
<!DOCTYPE html>

<html>

<head>

<meta charset="UTF-8">

<title>Class Selectors </title>

<style>

  #heading

    {

       color:blue;

       font-weight:bold;

       font-family:cursive;

      }

  .ireland

    {

       color:green;

     }

  .spain

    {

      color:goldenrod;

     }

  .italy

    {

       color:red;

     }

</style>

</head>

<body>

<!--Create a heading that is styled to be blue in color bold in face type and cursive -->

<h1 id = "heading">Countries To Visit</h1>

<!--Create an unordered list that will consist of three nested unordered lists and uses class selectors -->

<ul>

  <li class = "ireland">Ireland</li>

<ul>

    <li> Dublin</li>

    <li> Donegal</li>

     <li> Dingle</li>

</ul>

  <li class="spain">Spain</li>

<ul>

    <li> Valencia</li>

    <li> Madrid</li>

    <li> Barcelona</li>

</ul>

  <li class="italy">Italy</li>

<ul>

    <li> Rome</li>

    <li> Florence</li>

     <li> Venice</li>

</ul>

</ul>

</body>

</html>
```

**Produces:** a cursive blue heading above a nested list where Ireland, Spain, and Italy each take a different color from their class.

<iframe src="../../examples/ch05-css/selector-class/index.html" style="width:100%; height:320px; border:1px solid var(--md-default-fg-color--lightest); border-radius:4px; background:white; margin-bottom:0.5rem;" title="Live preview of selector-class" loading="lazy"></iframe>

[View full source](https://github.com/wYaobiz/code-to-cloud-resources/blob/main/src/ch05-css/selector-class/index.html){ .md-button }

### ID selectors

Targets the single element with a given `id`. An id should be unique on a page, so id selectors are for one specific element.

```html
<!DOCTYPE html>

<html>

<head>

<meta charset="UTF-8">

<title>id selectors </title>

<style>

<!-- Class Selectors and ID Selectors for the various page elements -->

div

   {

   width: 150px;   height: 100px;

 }

.heading

{

 color:blue;

 font-weight:bold;

 font-family:cursive;

}

.ireland

{

 color:green;

}

.spain

{

 color:goldenrod;

}

.italy

{

 color:red;

}

#irelandlist

  {

    font-family: Arial;

    font-style: italic;

    color: green;

  }

 #spainlist

  {

    font-family: Arial;

    font-style: italic;

    color: goldenrod;

  }

 #italylist

  {

    font-family: Arial;

    font-style: italic;

    color: red;

  }

</style>

</head>

<body>

<!--Create a heading that is styled to be blue in color bold in face type and cursive -->

<h1 class = "heading">Countries To Visit</h1>

<!--Create an unordered list that will consist of three nested unordered lists.  Each list uses a class selector and an id selector -->

<ul>

<div>

  <li class = "ireland">Ireland</li>

<ul id = "irelandlist">

    <li> Dublin</li>

    <li> Donegal</li>

     <li> Dingle</li>

</ul>

  <li class="spain">Spain</li>

<ul id = "spainlist">

    <li> Valencia</li>

    <li> Madrid</li>

    <li> Barcelona</li>

</ul>

  <li class="italy">Italy</li>

<ul id = "italylist">

    <li> Rome</li>

    <li> Florence</li>

     <li> Venice</li>

</ul>

</div>

</ul>

</body>

</html>
```

**Produces:** a nested list where elements styled by id stand out from those styled by class.

<iframe src="../../examples/ch05-css/selector-id/index.html" style="width:100%; height:360px; border:1px solid var(--md-default-fg-color--lightest); border-radius:4px; background:white; margin-bottom:0.5rem;" title="Live preview of selector-id" loading="lazy"></iframe>

[View full source](https://github.com/wYaobiz/code-to-cloud-resources/blob/main/src/ch05-css/selector-id/index.html){ .md-button }

### Attribute selectors

Targets elements based on an attribute and its value, for example matching items whose `title` contains a given word.

```html
<!DOCTYPE html>

<html>

<head>

<meta charset="UTF-8">

<title>attribute selectors </title>

<!-- Attribute Selectors for the various page elements -->

<style>

  div

   {

      width: 150px;   height: 100px;

  }

  .heading

   {

     color:blue;

     font-weight:bold;

     font-family:cursive;

    }

  .ireland

   {

      color:green;

   }

  .spain

   {

       color:goldenrod;

    }

  .italy

   {

      color:red;

    }

  #irelandlist

   {

     font-family: Arial;

     font-style: italic;

     color: green;

   }

  #spainlist

   {

     font-family: Arial;

     font-style: italic;

     color: goldenrod;

   }

  #italylist

   {

     font-family: Arial;

     font-style: italic;

     color: red;

   }

  [title~="Ireland"]

   {

     border: 5px solid green;

   }

  [title~="Spain"]

   {

     border: 5px solid goldenrod;

   }

  [title~="Italy"]

   {

     border: 5px solid red;

   }

</style>

</head>

<body>

<!--Create a heading that is styled to be blue in color bold in face type and cursive -->

<h1 class = "heading">Countries To Visit</h1>

<!--Create an unordered list that will consist of three nested unordered lists.  -->

<ul>

 <div>

  <li class = "ireland">Ireland</li>

     <ul id = "irelandlist" title = "Ireland">

        <li> Dublin</li>

        <li> Donegal</li>

        <li> Dingle</li>

     </ul>

  <li class="spain">Spain</li>

    <ul id = "spainlist" title = "Spain">

        <li> Valencia</li>

        <li> Madrid</li>

        <li> Barcelona</li>

    </ul>

  <li class="italy">Italy</li>

    <ul id = "italylist" title = "Italy">

        <li> Rome</li>

        <li> Florence</li>

        <li> Venice</li>

     </ul>

</div>

</ul>

</body>

</html>
```

**Produces:** a list where elements are bordered or colored according to their attribute values.

<iframe src="../../examples/ch05-css/selector-attribute/index.html" style="width:100%; height:380px; border:1px solid var(--md-default-fg-color--lightest); border-radius:4px; background:white; margin-bottom:0.5rem;" title="Live preview of selector-attribute" loading="lazy"></iframe>

[View full source](https://github.com/wYaobiz/code-to-cloud-resources/blob/main/src/ch05-css/selector-attribute/index.html){ .md-button }

## Pseudo-classes and Pseudo-elements

### Pseudo-elements

Styles a specific part of an element using `::`, such as `::first-line`, `::first-letter`, `::before`, and `::after`.

```html
<!DOCTYPE html>

<html>

<head>

<meta charset="UTF-8">

<title>pseudo-element selectors </title>

<!-- pseudo element Selectors for the various page elements -->

<style>

 h1::first-letter {

     color:blueviolet;

 font-weight:bold;

 font-family:Snell Roundhand;

 font-size: 2em;

        }

 h1::after

{

  content: url("   Flags.png");

}

 p::first-line

{

  color : mediumorchid;

  font-family: American Typewriter;

  font-weight:bold;

}

input::placeholder {

            color: mediumvioletred;

            font-style: italic;

        }

li::marker {

            color: crimson;

            font-size: 1.5em;

        }

::selection {

            color: darkorange;

            background-color: yellow;

        }

 p::before {

            content: "Please read Carefully: ";

            color: darkorange;

.heading

{

 color:Cornflowerblue;

 font-weight:bold;

  font-family:cursive;

}

.ireland

{

 color:green;

}

.spain

{

 color:goldenrod;

}

.italy

{

 color:red;

}

#irelandlist

  {

    font-family: Arial;

    font-style: italic;

    color: green;

  }

 #spainlist

  {

    font-family: Arial;

    font-style: italic;

    color: goldenrod;

  }

 #italylist

  {

    font-family: Arial;

    font-style: italic;

    color: red;

  }

</style>

</head>

<body>

<!--Create a heading that is styled to be blue in color bold in face type and cursive -->

<h1 class ="heading">Countries To Visit   </h1>

<!--Create an unordered list that will consist of three nested unordered lists.  -->

<p>Below is a list of different countries and cities to visit <br>

   If you do not see a country you like type in a country name below

</p>

<input type = "text" placeholder = "Enter the name of a country"

<br>

<ul>

 <div>

  <li class = "ireland">Ireland</li>

    <ul id = "irelandlist">

      <li>Dublin</li>

      <li>Donegal</li>

      <li>Dingle</li>

    </ul>

  <li class="spain">Spain</li>

    <ul id = "spainlist">

       <li>Valencia</li>

       <li>Madrid</li>

       <li>Barcelona</li>

    </ul>

  <li class="italy">Italy</li>

    <ul id = "italylist" >

       <li>Rome</li>

       <li>Florence</li>

       <li>Venice</li>

    </ul>

</div>

</ul>

</body>

</html>
```

**Produces:** a page where the first letter and first line are styled differently, and generated content appears before or after elements.

<iframe src="../../examples/ch05-css/pseudo-element/index.html" style="width:100%; height:460px; border:1px solid var(--md-default-fg-color--lightest); border-radius:4px; background:white; margin-bottom:0.5rem;" title="Live preview of pseudo-element" loading="lazy"></iframe>

[View full source](https://github.com/wYaobiz/code-to-cloud-resources/blob/main/src/ch05-css/pseudo-element/index.html){ .md-button }

### Pseudo-class selectors

Targets elements in a particular state or position, such as `:hover`, `:link`, `:visited`, and `:nth-child`.

```html
<!DOCTYPE html>

<html>

<head>

<meta charset="UTF-8">

<title>pseudo-class selectors </title>

<!-- pseudo-class Selectors -->

<style>

a:link

 {

   color: green;

   text-decoration: underline overline dotted red;

 }

a:visited

 {

   color: magenta;

   text-decoration-color: green;

 }

a:hover

 {

   text-decoration: none;

   color: cyan;

   font-weight: bold;

 }

a: active

 {

   background-color: yellow;

 }

li:first-child

 {

   background-color: green;

 }

li:last-child

 {

   background-color: red;

 }

.image img:only-child

 {

   border: 4px solid goldenrod;

   padding: 10px;

}

input:focus

 {

   border: 2px solid blue;

   background-color: blueviolet;

   color: white;

 }

input[type="radio"]:checked

 {

  box-shadow: 0 0 7px 5px blueviolet;

 }

div

 {

   width: 150px;   height: 100px;

 }

</style>

</head>

<body>

<p> Travel to the country of your dreams! To learn more visit

   <a href="www.ourSite.com">OUR SITE</a> and start your adventure!

</p>

<div class="image">

  <img src="Flags.png" alt="Flags" >

</div>

<div>

  <nav>

    <ul>

       <li><a href="#">Ireland</a></li>

       <li><a href="#">Spain</a></li>

        <li><a href="#">Italy</a></li>

    </ul>

  </nav>

</div>

<p>If you did not find a country listed above then perhaps choose one from below </p>

England <input type="radio" name = "destination">

France <input type = "radio" name = "destination">

Greece <input type="radio" name = "destination">

Germany <input type = "radio" name = "destination">

<p>Otherwise type the name of the country you would like to visit below </p>

<input type = "text" placeholder = "Enter country name">

</body>

</html>
```

**Produces:** a page where links and list items change appearance based on their state, such as on hover.

<iframe src="../../examples/ch05-css/pseudo-class/index.html" style="width:100%; height:420px; border:1px solid var(--md-default-fg-color--lightest); border-radius:4px; background:white; margin-bottom:0.5rem;" title="Live preview of pseudo-class" loading="lazy"></iframe>

[View full source](https://github.com/wYaobiz/code-to-cloud-resources/blob/main/src/ch05-css/pseudo-class/index.html){ .md-button }

## Contextual Selectors

### Contextual selectors

Targets elements by their relationship to others using combinators: descendant (space), child (`>`), adjacent sibling (`+`), and general sibling (`~`).

```html
<!DOCTYPE html>

<html>

<head>

<meta charset="UTF-8">

<title>Contextual Selectors </title>

<!-- Contextual Selectors -->

<style>

 div p {

     color: blueviolet;

     font-weight:bold;

}

 nav>ul

{

color: dodgerblue;

}

 li>a{

     color: orangered;

     font-family: cursive;

     }

div+h2 {

color: green;

font-family: cursive;

}

p~input

{

background-color:cornflowerblue;

}

</style>

</head>

<body><div>

<p> Travel to the country of your dreams! To learn more visit

   <a href="www.ourSite.com">OUR SITE</a> and start your adventure!

</p>

</div>

<div class="image">

  <img src="Flags.png" alt="Flags" >

</div>

<div>

  <nav>

    <ul>

       <li><a href="#">Ireland</a></li>

       <li><a href="#">Spain</a></li>

        <li><a href="#">Italy</a></li>

    </ul>

  </nav>

</div>

<h2>If you did not find a country listed above then perhaps choose one from below </h2>

England <input type="radio" name = "destination">

France <input type = "radio" name = "destination">

Greece <input type="radio" name = "destination">

Germany <input type = "radio" name = "destination">

<p>Otherwise type the name of the country you would like to visit below </p>

<input type = "text" placeholder = "Enter country name">

</body>

</html>
```

**Produces:** a page where elements are styled based on their position relative to others, such as a paragraph inside a div or a sibling that follows another element.

<iframe src="../../examples/ch05-css/contextual/index.html" style="width:100%; height:420px; border:1px solid var(--md-default-fg-color--lightest); border-radius:4px; background:white; margin-bottom:0.5rem;" title="Live preview of contextual" loading="lazy"></iframe>

[View full source](https://github.com/wYaobiz/code-to-cloud-resources/blob/main/src/ch05-css/contextual/index.html){ .md-button }
