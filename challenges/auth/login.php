<?php

session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Music Manangement - Login</title>
</head>

<body>
    <h1>Login to the Music Management</h1>
    <form action="./users/login.php" method="post">
        <label for="email">Email</label>
        <input minlength="5" type="text" name="email" id="email">
        <label for="password">Password</label>
        <input minlength="8" type="password" name="password" id="password">
        <input type="submit" value="Login">
    </form>
</body>

</html>