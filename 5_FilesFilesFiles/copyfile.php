<?php
$orig_filename = "../newfile.txt";
$new_filename = "../booimadeacopy.txt";
$success = @copy($orig_filename, $new_filename) or die("Couldn't copy file.");
if ($success) {
    $msg = "Copied $orig_filename to $new_filename";
} else {
        $msg = "Could not copy file.";
}
?>

<!DOCTYPE html>

<html>
<head>
    <title>Copy a File</title>
</head>
<body>
    <?php echo "$msg"; ?>
</body>
</html>
