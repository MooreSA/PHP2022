<?php
$connection = mysqli_connect("localhost", "root", "") 
    or die(mysqli_error($connection));
if ($connection) {
    $msg = "success!";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>MySQL Connection</title>
</head>
<body>
    <?php echo "$msg"; ?>
</body>
</html>

