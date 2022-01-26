<?php
$filename = "../files/txt/newfile.txt";
$newstring = "
    Check it out!\n
    I've created a new file and stuck all this text into it!"; 
$myfile = @fopen($filename, "w+") or die("Couldn't open file.");
@fwrite($myfile, $newstring) or die("Couldn't write to file.");
$msg = "<p>File has data in it now...</p>";
fclose($myfile);
?>

<!DOCTYPE html>

<html>
<head>
    <title>Adding Data to a File</title>
</head>
<body>
    <?php echo "$msg"; ?>
</body>
</html>