<html>
<head>
    <title>
        A simple For Loop
    </title>
</head>

<body>
    <h1>A simple for loop</h1>

    <?php
    //Note Parameters: Initialize Sentry; Set Condition; and Change Sentry Variable/increment
    for ($i = 0; $i < 10; $i++) {
        print "$i <br>\n";
    } // end for loop

    echo "<h2>Counting SDRWKCAB</h2>";
    for ($i = 10; $i > 0; $i--) {
        print "$i <br>\n";
    } // end for loop

    echo "<h2>Counting by 5</h2>";
    for ($i = 5; $i <= 50; $i+= 5){
        print "$i <br>\n";
    } // end for loop
    ?>

</body>
</html>



