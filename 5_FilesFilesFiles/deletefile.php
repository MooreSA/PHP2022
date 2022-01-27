<?php
$filename = "../newfile.txt";
$success = @unlink($filename) or die("Dead: Couldn't delete file.");
if ($success) {
    $msg = "Deleted $filename";
} else {
        $msg = "Could not delete file.";
}
?>

<!DOCTYPE html>

<html>
<head>
    <title>Delete a File</title>
</head>
<body>
    <?php echo "$msg"; ?>
</body>
</html>

