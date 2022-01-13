<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
</head>
<body>
    <?php
        error_reporting(0);

        // using the escape character "\" before each double quote
        echo "<p>I think this is \"really\" cool!</p>";
        echo '<p>I think this is "really" cool!</p>';
        echo "<p>I think this is $adj cool!</p>";
    ?>
</body>
</html>
