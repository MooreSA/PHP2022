<!DOCTYPE html>
<html>
<head>
    <title>Printing Variables</title>
</head>
<body>
    <?php

        /* What are the two main types or categories of data we will encounter in our variables? Anybody? Anybody?
        That's right... Scalar(base) and Array. We'll work with arrays next class*/

        $intVar = 955421;
        $floatVar = 1542.2232235;
        $stringVar = "This is a string.";
        $boolVar = true;
        /*
            Naming Rules: 
                - must start with letter or _
                - can not start with number
                - only alpha-numeric and _ allowed
                - names are CASE SENSETIVE!
        */
        echo "<p>Our integer: $intVar</p>";
        print "<p>Our float: $floatVar</p>";
        print_r("<p>Our string: $stringVar</p>");
        echo "<p>Our bool: $boolVar</p>";

        echo is_int($intVar);
        echo is_float($floatVar);
        echo is_string($stringVar);
        echo is_bool($boolVar);
        echo "<br>";
        print_r($intVar);
        echo "<br>";

        var_dump($intVar);
        var_dump((bool)$intVar); // if necessary, you can use (bool) or (boolean) casts. Although unlikely, if a bool arg is required since it will already be a bool. Also see boolval().
        

        // Are these local or global variables? Whats the diff?
            //tricky question... anything outside of a function is automatically global

        /* PHP has three different variable scopes:
                local
                global
                static
        */

        # PHP offers a metric ah... tonne of predefined variables as well. These are refered to as superglobals. Check em out with phpinfo()
    ?>
</body>
</html>