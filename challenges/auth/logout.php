<?php

session_start();
require("./db_connect.php");
$session_id = session_id();

$stmt = $con->prepare("UPDATE users SET session_id = NULL WHERE session_id = ?");

$stmt->bind_param("s", $session_id);

$result = $stmt->execute() or die(mysqli_error($con));

session_unset();
session_destroy();
unset($_COOKIE['PHPSESSID']);
setcookie("PHPSESSID", "", time()-3600, "/");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout</title>
</head>

<body>
    You have been successfully logged out!
    <p><a href="my_menu.html">Return to Menu</a></p>
</body>

</html>