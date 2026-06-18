# Source Code

The repository's [`src/`](https://github.com/wYaobiz/code-to-cloud-resources/tree/main/src) directory holds all example and reference code, organized by chapter. You can browse it on GitHub or clone the whole repository to run things locally.

```bash
git clone https://github.com/wYaobiz/code-to-cloud-resources.git
cd code-to-cloud-resources/src
```

The code comes in two kinds.

**Code Examples** are the worked examples that illustrate concepts from the book, each with commented source and a note on what it produces. These are grouped by chapter on their own pages, starting with [HTML Code Examples](ch03-html.md).

**Exercise Reference Implementations** are sample solutions to the hands-on exercises, such as the credit card form validation from Chapter 6. These live alongside the examples in the chapter folders under `src/`.

## Organization

Each example or reference sits in its own folder under the relevant chapter, with a short `README` describing how to run it. This keeps every piece self-contained, so a single example can be viewed, edited, or downloaded without touching anything else.

```
src/
├── ch03-html/
│   ├── table-colspan/        ← one example, one folder
│   ├── nested-list-unordered/
│   ├── input-number/
│   ├── input-range/
│   └── login-form/
├── ch05-css/
├── ch06-javascript/
│   └── credit-card-validation/   ← exercise reference
└── ...
```

## Running the Examples

**Front-end examples** (HTML, CSS, JavaScript) run in any modern browser. Open the `.html` file directly, or use a lightweight local server such as the VS Code "Live Server" extension for features that need one.

**Server-side examples** (PHP, SQL/MySQL) need a local server environment. Any of these work: XAMPP or MAMP, which bundle Apache, PHP, and MySQL and are easiest for beginners, or Docker, running official `php` and `mysql` images if you prefer containers.

Each subfolder's `README` gives the exact steps for that example, including any database setup.

## License

The source code in this repository is released under the MIT License, so you are free to use, modify, and learn from it. See the [`LICENSE`](https://github.com/wYaobiz/code-to-cloud-resources/blob/main/LICENSE) file. The worked examples adapted from the course material are included with permission of the authors.
