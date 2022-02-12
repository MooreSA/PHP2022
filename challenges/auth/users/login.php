<?php
    session_start();
    if(!isset($_POST['email']) || !isset($_POST['password'])) {
        header("Location: /php2022/challenges/auth/login.php");
        exit;
    }
    
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    if(!$email || !$password) {
        echo "You must enter an email and password.";
        header("Location: /php2022/challenges/auth/login.php");
        exit;
    }

    // ensure email & password are alpha-numeric
    if(!ctype_alnum($password)) {
        header("Location: /php2022/challenges/auth/login.php");
        exit;
    }

    require("../db_connect.php");
    $config = parse_ini_file("../config.ini", true);
    
    $stmt = $con->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $result = $stmt->execute() or die(mysqli_error($con));

    $result = $stmt->get_result();
    $row = $result->fetch_assoc();

    $dbPW = $row['password'];
    $salt = $config["auth"]["SALT"];

    $hashedPW = hash("sha256", $salt . $password);
    if($hashedPW == $dbPW) {
        $_SESSION['email'] = $email;
    } else {
        header("Location: /php2022/challenges/auth/login.php");
        exit;
    }
    $session_id = session_id();

    $stmt = $con->prepare("UPDATE users SET session_id = ? WHERE email = ?");
    $stmt->bind_param("ss", $session_id, $email);
    $result = $stmt->execute() or die(mysqli_error($con));

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    Welcome <?php echo($email); ?>!
    <p><a href="../my_menu.html">Return to Menu</a></p>
</body>

</html>