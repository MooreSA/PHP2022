<?php
$sql = "DROP DATABASE music";
$connection = mysqli_connect("db", "root", "password") 
    or die(mysqli_error($connection));
$result = mysqli_query($connection, $sql) or die(mysqli_error($connection));
if ($result) {
    $msg = "<P>Database has been dropped!</P>";
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Drop a MySQL Database</title>
</head>

<body>
    <?php echo "$msg"; ?>
</body>

</html>