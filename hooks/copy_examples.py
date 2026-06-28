"""
MkDocs build hook: copy runnable example HTML from src/ into the built site
so that iframes on the documentation pages can render them live.

This keeps src/ as the single source of truth. The examples are copied at
build time, so editing a file under src/ is enough; the live preview updates
automatically on the next build. No duplicate files are committed to the repo.
"""
import os
import shutil

def on_post_build(config, **kwargs):
    site_dir = config["site_dir"]
    # 项目根目录（mkdocs.yml 所在处）
    root = os.path.dirname(config["config_file_path"])
    src = os.path.join(root, "src", "ch03-html")
    dest = os.path.join(site_dir, "examples", "ch03-html")
    if os.path.isdir(src):
        if os.path.exists(dest):
            shutil.rmtree(dest)
        shutil.copytree(src, dest)
        print(f"[copy_examples] Copied live examples to {dest}")
