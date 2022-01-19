<!DOCTYPE html>
<html>
<head>
    <title>Comparison Operators</title>
</head>
<body>
    <?php
    $a = 21;
    $b = 15;
    echo "<p>Original value of \$a is $a and \$b is $b</p>";
    //test whether $a is equal to $b.
    if ($a == $b) {
        echo "<p>TEST 1: \$a equals \$b</p>";
    } else {
        echo "<p>TEST 1: \$a is not equal to \$b</p>";
    }
    // Notice that conditional arguments are enclosed in parentheses... shocking!
    //test whether $a is not equal to $b. 
    if ($a != $b) {
        echo "<p>TEST 2: \$a is not equal to \$b</p>";
    } else {
        echo "<p>TEST 2: \$a is equal to \$b</p>";
    }
    //The curly braces { and } separate the blocks of statements within a control structure.
    //test whether $a is greater than $b.
    if ($a > $b) {
        echo "<p>TEST 3: \$a is greater than \$b</p>";
    } else {
        echo "<p>TEST 3: \$a is not greater than \$b</p>";
    }
    //test whether $a is less than $b. 
    if ($a < $b) {
        echo "<p>TEST 4: \$a is less than \$b</p>";
    } else {
        echo "<p>TEST 4: \$a is not less than \$b</p>";
    }
    //$a is greater than or equal to $b.
    if ($a >= $b) {
        echo "<p>TEST 5: \$a is greater than or equal to \$b</p>";
    } else {
        echo "<p>TEST 5: \$a is not greater than or equal to \$b</p>";
    }
    //$a is less than or equal to $b.
    if ($a <= $b) {
        echo "<p>TEST 6: \$a is less than or equal to \$b</p>";
    } else {
        echo "<p>TEST 6: \$a is not less than or equal to \$b</p>";
    }
    //$a is identical to $b.
    if ($a === $b) {
        echo "<p>TEST 7: \$a is identical to \$b</p>";
    } else {
        echo "<p>TEST 7: \$a is not identical to \$b</p>";
    }
    //$a is not identical to $b.
    if ($a !== $b) {
        echo "<p>TEST 8: \$a is not identical to \$b</p>";
    } else {
        echo "<p>TEST 8: \$a is identical to \$b</p>";
    }
    //testing.
    ?>
</body>
</html>