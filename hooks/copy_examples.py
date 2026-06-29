"""
MkDocs build hook: copy runnable example files from src/ into the built site
so that iframes on the documentation pages can render them live.

src/ stays the single source of truth. Examples are copied at build time, so
editing a file under src/ is enough; the live preview updates on the next
build. No duplicate files are committed to the repo.

This copies every chapter directory under src/ (ch03-html, ch05-css, ...).
"""
import os
import shutil

def on_post_build(config, **kwargs):
    site_dir = config["site_dir"]
    root = os.path.dirname(config["config_file_path"])
    src_root = os.path.join(root, "src")
    if not os.path.isdir(src_root):
        return
    for chapter in sorted(os.listdir(src_root)):
        chapter_path = os.path.join(src_root, chapter)
        if not os.path.isdir(chapter_path):
            continue
        dest = os.path.join(site_dir, "examples", chapter)
        if os.path.exists(dest):
            shutil.rmtree(dest)
        shutil.copytree(chapter_path, dest)
    print("[copy_examples] Copied live examples for all chapters under src/")
