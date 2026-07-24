<?php
// Handling an uploaded file safely.
//
// An upload form lets a visitor place a file on your server, so every
// assumption about that file has to be checked rather than trusted.

if ($_SERVER['REQUEST_METHOD'] !== 'POST' || !isset($_FILES['upload'])) {
    exit('No file submitted.');
}

$file = $_FILES['upload'];

// 1. Check that the upload itself succeeded.
if ($file['error'] !== UPLOAD_ERR_OK) {
    exit('Upload failed.');
}

// 2. Limit the size. Also set upload_max_filesize and post_max_size in
//    php.ini, since those apply before this code ever runs.
$maxBytes = 2 * 1024 * 1024; // 2 MB
if ($file['size'] > $maxBytes) {
    exit('File is too large.');
}

// 3. Determine the type from the file's contents, not from the name or from
//    the type the browser reported. Both of those are supplied by the client
//    and can say anything.
$finfo = new finfo(FILEINFO_MIME_TYPE);
$mime = $finfo->file($file['tmp_name']);

// 4. Check against an allow-list. Listing what is permitted is safer than
//    trying to list everything that is not.
$allowed = [
    'image/jpeg' => 'jpg',
    'image/png'  => 'png',
    'image/gif'  => 'gif',
];
if (!isset($allowed[$mime])) {
    exit('File type not allowed.');
}

// 5. Generate a new name. The name the user supplied may contain path
//    traversal sequences or characters that mean something to the file
//    system, so it is discarded rather than cleaned.
$newName = bin2hex(random_bytes(16)) . '.' . $allowed[$mime];

// 6. Store the file outside the web root, so it cannot be requested by URL
//    and cannot be executed as a script.
$destination = '/var/www/uploads/' . $newName;

if (!move_uploaded_file($file['tmp_name'], $destination)) {
    exit('Could not save the file.');
}

echo "Uploaded successfully.";
?>
