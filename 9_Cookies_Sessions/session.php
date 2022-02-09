<?php

// take a moment to review this:
// http://php.net/manual/en/intro.session.php
// https://www.owasp.org/index.php/Session_Management_Cheat_Sheet

session_start();
$msg = "started a session....";
?>
<!DOCTYPE html>
<html>
<head>
    <title>Start a Session</title>
</head>
<body>
    <?php 
        echo "$msg";
        $_SESSION["bike"] = "Rocky Mountain";
        $_SESSION["shoes"] = "Salomon Speedcross 5";
        print_r($_SESSION);
        echo session_status();
    ?>

    <p>
    To continue, <a href="session_check.php">click
    here</a>.
    </p>
</body>
</html>

