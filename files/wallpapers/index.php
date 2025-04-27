<?php
$urlPath = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);
$urlPath = rtrim($urlPath, "/");
$fullPath = $urlPath === "" ? "/" : $urlPath;

if ($handle = opendir(".")) {
    echo "<html>";
    echo "<head><title>Index of $fullPath</title></head>";
    echo "<body>";
    echo "<h1>Index of $fullPath</h1><hr><pre>";
    echo '<a href="../">../</a>' . PHP_EOL;

    $items = [];
    while (false !== ($entry = readdir($handle))) {
        if ($entry != "." && $entry != ".." && $entry != "index.php") {
            $items[] = $entry;
        }
    }
    closedir($handle);

    sort($items);

    foreach ($items as $entry) {
        $filePath = "./" . $entry;
        $lastModified = date("d-M-Y H:i", filemtime($filePath));
        $size = is_dir($filePath) ? "-" : filesize($filePath);
        $link = htmlspecialchars($entry);

        if (is_dir($filePath)) {
            $link .= '/';
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