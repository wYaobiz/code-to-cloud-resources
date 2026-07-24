# Handling file uploads safely

An upload handler that validates the file, renames it, and stores it out of reach, together with an Apache configuration for the case where uploads must live under the web root.

## What is being defended against

The serious case is an attacker uploading a script and then requesting it, which turns an upload form into a way to run code on the server. Type checks alone do not settle this, because the type reported by the browser and the extension in the filename are both supplied by the client.

## The checks, and why each is there

The type is read from the file's contents with `finfo`, rather than from the name or the browser's claim. It is compared against an allow-list, since listing what is permitted is more reliable than trying to enumerate what is not.

The original filename is discarded rather than cleaned. Names can carry path traversal sequences such as `../../`, and generating a fresh random name removes the whole class of problem.

The file is stored outside the web root, so there is no URL that reaches it. When that is not possible, the accompanying `.htaccess` turns off script execution in the upload directory, so a file that does land there cannot be run.

## Size limits

The size check in the script runs after PHP has already accepted the upload, so `upload_max_filesize` and `post_max_size` in `php.ini` should be set as well. Those apply first.
