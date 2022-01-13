<!DOCTYPE html>
<html>
<head>
    <title>Using Arithmetic Operators</title>
</head>
<body>
    <?php
        $a = 85;
        $b = 24;
        echo "<p>The original value of \$a is $a and \$b is $b</p>";

        $c = $a + $b;
        echo "<p>Added \$a and \$b and got $c</p>";

        $c = $a - $b;
        echo "<p>Subtracted \$a and \$b and got $c</p>";

        $c = $a * $b;
        echo "<p>Multiplied \$a and \$b and got $c</p>";

        $c = $a ** $b;
        echo "<p>eXPONENT \$a TO THE \$b and got $c</p>";

        $c = $a / $b;
        echo "<p>Divy'd er up and got $c</p>";

        $c = $a % $b;
        echo "<p>The modulus of \$a and \$b is $c</p>";
        echo "...and end Academic Math Requirement!";
    ?>
</body>
</html>