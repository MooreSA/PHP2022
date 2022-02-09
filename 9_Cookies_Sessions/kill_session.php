<?php
// Begin the session
session_start();

// var_dump($_SESSION);
// Unset all of the session variables.
session_unset();

// Destroy the session.
session_destroy();

// Clear Session cookie
unset($_COOKIE['PHPSESSID']);
setcookie("PHPSESSID", "", time()-3600, "/");

?>

<!DOCTYPE html>
<html>
<head>
    <title>Kill Session</title>
</head>

<body>
    <h1>Boom I killed your session!</h1>
</body>
</html>