<?php
function displayDirectory($dir, $level = 0) {
    // Open the directory
    if ($handle = opendir($dir)) {
        // Loop through the directory contents
        while (false !== ($entry = readdir($handle))) {
            // Skip the current and parent directory entries
            if ($entry != "." && $entry != "..") {
                // Indent based on the level of depth
                echo str_repeat("&nbsp;", $level * 4); // 4 spaces for each level
                echo "<li>$entry</li>";

                // If the entry is a directory, recursively call this function
                if (is_dir($dir . '/' . $entry)) {
                    echo "<ul>";
                    displayDirectory($dir . '/' . $entry, $level + 1);
                    echo "</ul>";
                }
            }
        }
        closedir($handle);
    }
}

// Start displaying from the current directory
echo "<h1>Filesystem Structure</h1>";
echo "<ul>";
displayDirectory(__DIR__); // Use __DIR__ to start from the current directory
echo "</ul>";
?>
