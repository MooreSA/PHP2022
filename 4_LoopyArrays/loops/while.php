<!DOCTYPE html>
<html>
<head>
    <title>
    A simple While Loop
    </title>
</head>

<body>
    <h1>A simple while loop</h1>

    <?php
    $i = 1;

    while ($i <= 10) {
        print "$i <br>\n";
        $i++;
    }// end while

    echo "<br><br>";
    
    // or the dreaded do while...

    $x = 1;

    do {
        echo "$x <br>\n";
        $x++;
    } while ($x <=10);

    ?>


</body>
</html>

