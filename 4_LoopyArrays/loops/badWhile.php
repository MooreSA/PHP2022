<?php
    echo ini_get('display_errors');

    if (ini_get('display_errors')) {
        ini_set('display_errors', '2');
    }

    echo ini_get('display_errors');
?>

<html>
<head>
    <title>
        A bad While Loop
    </title>
</head>

<body>
    <h1>A bad while loop</h1>

    <?php
        $i = 1;

        while ($i <= 10){
          print "$i <br>\n";
          $i++;
        } // end while	
    ?>


</body>
</html>

