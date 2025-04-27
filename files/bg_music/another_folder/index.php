<?php
// Set the current directory
$dir = ".";

// Get the full path for the current directory
$currentPath = realpath($dir);
$baseDir = realpath(dirname(__FILE__)); // Get the base directory path
$relativePath = str_replace($baseDir, '', $currentPath); // Get the relative path
$relativePath = trim($relativePath, '/'); // Trim leading and trailing slashes

// Construct the full path for the title
if (empty($relativePath)) {
    $fullPath = basename($baseDir); // This will be "files" when in the root
} else {
    $fullPath = basename($baseDir) . '/' . $relativePath; // This will be "files/bg_music" or similar
}

// If the relative path is not empty, prepend a slash
if (!empty($relativePath)) {
    $fullPath = basename($baseDir) . '/' . $relativePath;
}

if ($handle = opendir($dir)) {
    echo "<html>";
    echo "<head><title>Index of /$fullPath</title></head>";
    echo "<body>";
    echo "<h1>Index of /$fullPath</h1><hr><pre>";
    echo '<a href="../">../</a>' . PHP_EOL;

    $items = [];
    while (false !== ($entry = readdir($handle))) {
        // Skip the current and parent directory entries and index.php
        if ($entry != "." && $entry != ".." && $entry != "index.php") {
            $items[] = $entry;
        }
    }
    closedir($handle);

    sort($items);

    foreach ($items as $entry) {
        $filePath = $dir . "/" . $entry;
        $lastModified = date("d-M-Y H:i", filemtime($filePath));
        $size = is_dir($filePath) ? "-" : filesize($filePath);
        $link = htmlspecialchars($entry);
        
        // Check if it's a directory and add a trailing slash
        if (is_dir($filePath)) {
            $link .= '/'; // Add trailing slash for directories
        }
        
        echo "<a href=\"$entry\">$link</a>" . str_repeat(" ", 50 - strlen($link)) . "$lastModified" . str_repeat(" ", 10 - strlen($size)) . "$size" . PHP_EOL;
    }

    echo "</pre><hr>";
    echo "</body>";
    echo "</html>";
} else {
    echo "Unable to open directory.";
}
?>
