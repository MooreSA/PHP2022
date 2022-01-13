<!DOCTYPE html>
<html>
<head>
    <title>Using Logical Operators</title>
</head>
<body>
    <?php
        $degrees = "101";
        $hot = true;
        //test whether $degrees is greater than 100 or if the value of $hot is yes.
        if (($degrees >100) || ($hot == true)) {
            echo "<p>TEST 1: It's <strong>really</strong> hot!</p>";
        } else {
            echo "<p>TEST 1: It's bearable.</p>";
        }
        /*Because this conditional expression is actually made up of two smaller
        conditional expressions, an extra set of parentheses surrounds it.*/
        // now lets try &&, then explore "and", "or", "xor" and "!"
        if (($degrees > 100) && ($hot == true)) {
            echo "<p>TEST 2: It's <strong>really</strong> hot!</p>";
        } else {
            echo "<p> TEST 2: It's bearable.</p>";
        }

        /*it's worth noting that use of "and" and "or" is strongly discoraged because
        the = assignment operator takes precidence and can inadvertantly re-assign*/
    ?>
</body>
</html>