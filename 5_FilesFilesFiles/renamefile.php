<?php
$orig_filename = "../files/txt/newfile.txt";
$new_filename = "../files/txt/boomimadeabackup.bak"; //change path to move!
$success = @rename($orig_filename, $new_filename) 
        or die("Couldn't rename file.");
if ($success) {
    $msg = "Renamed $orig_filename to $new_filename";
} else {
        $msg = "Could not rename file.";
}
?>

<!DOCTYPE html>

<html>
<head>
    <title>Rename a File</title>
</head>
<body>
    <?php echo "$msg"; ?>
</body>
</html>