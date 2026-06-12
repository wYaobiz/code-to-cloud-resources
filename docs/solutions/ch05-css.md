# Chapter 5 · Cascading Style Sheets

Selected solutions for the review questions on CSS selectors, the cascade, the box model, layout, and responsive design. See the [section introduction](index.md) for scope and the disclaimer.

### Problem 5.1
**Three ways to include CSS.**

CSS can be applied as inline styles using the style attribute on an element, as an internal stylesheet inside a `<style>` block in the page head, or as an external stylesheet linked with `<link>`. External stylesheets are the standard choice for real sites because they separate presentation from structure and can be shared and cached across pages. Internal styles suit a single one-off page, and inline styles are best reserved for narrow, element-specific overrides.

### Problem 5.2
**Structure of a CSS rule.**

A rule has a selector and a declaration block. The selector chooses which elements the rule applies to, and the block contains one or more declarations, each a property and a value separated by a colon. For example, in `p { color: blue; }`, `p` is the selector, `color` is the property, and `blue` is the value.

### Problem 5.3
**Class selectors vs. ID selectors.**

A class selector, written with a dot as in `.note`, can match many elements and is meant for styles you reuse. An ID selector, written with a hash as in `#header`, is meant for a single unique element, since an ID should appear only once per page. ID selectors carry higher specificity than class selectors, so use classes for general reusable styling and reserve IDs for unique elements or scripting hooks.

### Problem 5.4
**The cascade and how conflicts resolve.**

The cascade is the process CSS uses to decide which rule wins when several target the same element. Four factors determine the outcome, considered in order: importance (whether `!important` is present), origin (where the styles come from, such as author or browser), specificity (how precisely the selector targets the element), and source order (later rules override earlier ones of equal weight).

### Problem 5.6
**Descendant vs. child selectors.**

A descendant selector, written with a space as in `div p`, matches an element anywhere inside an ancestor, at any depth. A child selector, written with a greater-than sign as in `div > p`, matches only direct children. So `div p` would style a paragraph nested inside another element within the div, while `div > p` would style only paragraphs that are immediate children of the div.

### Problem 5.7
**Pseudo-classes vs. pseudo-elements.**

A pseudo-class targets an element in a particular state or position, such as `:hover`, `:focus`, or `:first-child`. A pseudo-element targets a specific part of an element or a generated piece of content, such as `::before`, `::after`, or `::first-line`. The fundamental difference is that pseudo-classes select existing elements based on state, while pseudo-elements style a sub-part of an element or create new content around it.

### Problem 5.10
**The CSS box model.**

Every element is a rectangular box made of four parts from the inside out: the content, the padding around the content, the border around the padding, and the margin outside the border. By default an element's width applies only to the content, so padding and border add to the total rendered size. Setting box-sizing: border-box changes this so the declared width includes content, padding, and border, which makes sizing more predictable.

### Problem 5.11
**Padding vs. margin, and margin collapse.**

Padding is space inside an element, between its content and its border, and it takes on the element's background. Margin is space outside the border that separates the element from its neighbors and is always transparent. Margin collapse occurs when the vertical margins of adjacent block elements meet: instead of adding together, they combine into a single margin equal to the larger of the two.

### Problem 5.15
**Media queries and responsive design.**

Media queries apply styles conditionally based on characteristics of the device or viewport, such as width, which is what lets a layout adapt to different screen sizes. A query that applies styles only on screens wider than 768 pixels looks like this:

```css
@media (min-width: 769px) {
  .sidebar { display: block; }
}
```

### Problem 5.22
**Ordering selectors by specificity.**

From lowest to highest specificity, the selectors are: `p`, then `p[title]` and `p.highlight` (each a single element plus one class or attribute, of equal weight), then `.content p` and `body div p` at the same level as the attribute and class forms depending on the exact counts, and finally `#main p`, which is highest because it includes an ID. In short, IDs outweigh classes and attributes, which outweigh plain element selectors, and ties are broken by source order.

### Problem 5.23
**display: none vs. visibility: hidden.**

With display: none the element is removed from the layout entirely, taking up no space and being skipped by most screen readers. With visibility: hidden the element is invisible but still occupies its space in the layout, leaving a gap where it would have been. Choose display: none to remove an element completely and visibility: hidden to hide it while preserving the surrounding layout.
