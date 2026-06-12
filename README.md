# From Code to Cloud — Companion Resources

Companion website and source code for the textbook **_From Code to Cloud: Developing Web Applications_** by Maura A. Deek and Fadi P. Deek (CRC Press / Taylor & Francis).

The live site is built with [MkDocs Material](https://squidfunk.github.io/mkdocs-material/) and hosted free on GitHub Pages. The `src/` directory holds runnable example code, organized by chapter.

---

## For maintainers

### Editing content

All site pages are plain Markdown files under `docs/`. Edit them in any text editor — no Python or build step needed on your machine. When you push to the `main` branch, GitHub automatically builds the site and publishes it.

- `docs/index.md` — home page
- `docs/how-to-use.md` — usage guide
- `docs/solutions/` — one Markdown file per chapter
- `docs/code/index.md` — source-code index
- `docs/errata.md` — corrections
- `src/` — example code, one folder per chapter

### Optional: preview locally before pushing

You do **not** need to install Python. If you ever want to preview changes before pushing, install [uv](https://docs.astral.sh/uv/) (a single standalone binary, does not touch your system Python) and run:

```bash
uvx --from mkdocs-material mkdocs serve
```

Then open <http://127.0.0.1:8000>. This runs MkDocs in a throwaway isolated environment. Press Ctrl+C to stop.

### How deployment works

Pushing to `main` triggers `.github/workflows/deploy.yml`, which installs MkDocs on a temporary GitHub runner, builds the site, and publishes it to the `gh-pages` branch. There is no server to maintain and no cost — the published site is just static files served by GitHub Pages.

---

## License

Source code is released under the [MIT License](LICENSE). Textbook content and suggested solutions remain the copyright of the authors and publisher.
