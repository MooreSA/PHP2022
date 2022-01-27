<?php
$filename = "../txt/newfile.txt";
if (file_exists($filename)) {
    $msg = "<p>File already exists.</p>";
} else {
    $newfile = @fopen($filename, "w+") or die("Couldn't create file."); // note die() & @ for error suppression
    $msg = "<p>File created!</p>";
    fclose($newfile);
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Creating a New File</title>
</head>
<body>
    <?php echo "$msg"; ?>
</body>
</html>

