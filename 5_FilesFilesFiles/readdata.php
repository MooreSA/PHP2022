<?php
$filename = "../newfile.txt";
$whattoread = @fopen($filename, "r") or die("Couldn't open file");
$file_contents = fread($whattoread, filesize($filename)); //also, check out fgets(), fgetss(), fgetc() & fgetcsv()
$new_file_contents = nl2br($file_contents);
$msg = "Boom I got yo contents:<br>";
fclose($whattoread);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Reading Data From a File</title>
</head>
<body>
    <?php echo "$msg"; ?>
    <?php //echo readfile($filename);?>

    <?php echo $file_contents;?>
    <?php //echo nl2br($file_contents);?>
    <?php echo $new_file_contents;?>
</body>
</html>