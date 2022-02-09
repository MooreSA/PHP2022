<?php
//start a session
session_start();
//check for posted values and register defaults
if (($_POST['sel_font_family']) && ($_POST['sel_font_size'])) {
        $font_family = $_POST['sel_font_family'];
        $font_size = $_POST['sel_font_size'];
        $_SESSION['font_family'] = $font_family;
        $_SESSION['font_size'] = $font_size;
//check for stored values, extract from $_SESSION superglobal and register
} else if (((!$_POST['sel_font_family']) && (!$_POST['sel_font_size'])) 
    &&  ($_SESSION['font_family']) && ($_SESSION['font_size'])) {
    $font_family = $_SESSION['font_family'];
    $font_size = $_SESSION['font_size'];
    $_SESSION['font_family'] = $font_family;
    $_SESSION['font_size'] = $font_size;

//register defaults
} else {
        $font_family = "sans-serif";
        $font_size = "10";
        $_SESSION['font_family'] = $font_family;
        $_SESSION['font_size'] = $font_size;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>My Display Preferences</title>
    <style type="text/css">
       body, p, a {
            font-family:<?php echo "$font_family"; ?>;
            font-size:<?php echo "$font_size"; ?>pt;
            font-weight:normal;
        }
        h1 {
            font-family:<?php echo "$font_family"; ?>;
            font-size:<?php echo $font_size + 4; ?>pt;
            font-weight:bold;
        }
    </style>
</head>
<body>
    <h1>Your Preferences Have Been Set</h1>
    <p>As you can see, your selected font family is now <?php echo "$font_family";
            ?>, with a base size of <?php echo "$font_size" ?> pt.</p>
    <p>Please feel free to <a href="session01.php">change your preferences</a>
            again.</p>
</body>
</html>

