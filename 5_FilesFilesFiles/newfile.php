<?php
$filename = "../newfile.txt";
$newfile = fopen($filename, "w+") or exit("Exit: Couldn't create file.");
fclose($newfile);
$msg = "<p>File created!</p>";

//get new file info
$fileInfo = stat($filename);
var_dump($fileInfo);
$fileInfo = realpath($filename);
var_dump($fileInfo);
$fileInfo = pathinfo($filename);
var_dump($fileInfo);
$fileInfo = fileperms($filename);
var_dump($fileInfo);
$fileInfo = fileowner($filename);
var_dump($fileInfo);
$fileInfo = file($filename);
var_dump($fileInfo);

?>
<!DOCTYPE html>
<html>
<head>
    <title>Creating a New File</title>
</head>
<body>
    <?php echo "$msg <br>"; ?>
</body>
</html>

