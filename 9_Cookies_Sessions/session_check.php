<?php

// take a moment to review this:
// http://php.net/manual/en/intro.session.php
// https://www.owasp.org/index.php/Session_Management_Cheat_Sheet

session_start();
$msg = "Do we have session data???";
?>
<!DOCTYPE html>
<html>
<head>
    <title>Check a Session</title>
</head>
<body>
    <?php 
        echo "$msg";
        print_r($_SESSION);
        echo session_status();
    ?>

    <p>
    To continue, <a href="nextpage.php?<?php echo htmlspecialchars(session_id()); ?>">click
    here</a>.
    </p>
</body>
</html>

