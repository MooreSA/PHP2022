<!DOCTYPE html>
<html>
<head>
    <title>Using Arithmetic Operators</title>
</head>
<body>
    <?php
        $a = 85;
        $b = 24;
        echo "<p>Original value of \$a is $a and \$b is $b</p>";
        //if you escape the dollar sign (\$), it will print literally instead of being interpreted as a variable.
        //Add the two values and print the result
        $c = $a + $b;
        echo "<p>Added \$a and \$b and got $c</p>";
        //Subtract the two values and print the result
        $c = $a - $b;
        echo "<p>Subtracted \$b from \$a and got $c</p>";
        //Multiply the two values and print the result
        $c = $a * $b;
        echo "<p>Multiplied \$a and \$b and got $c</p>";
        //exponent
        $c = $a ** $b;
        echo "<p>Exponent \$a to the \$b and got $c</p>";
        //divide
        $c = $a / $b;
        echo "<p>Divided \$a by \$b and got $c</p>";
        //Check the modulus of the two values and print the result:
        $c = $a % $b;
        echo "<p>The modulus of \$a and \$b is $c</p>";
        echo "...and end Academic Math req";
    ?>
</body>
</html>