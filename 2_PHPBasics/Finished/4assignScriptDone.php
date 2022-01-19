<!DOCTYPE html>
<html>
<head>
    <title>Assignment Operators</title>
</head>
<body>
    <?php
        //Basic assignment
        $origVar = 100;
        echo "<P>Original value is $origVar</P>";
        //Overwrite that
        $origVar = 115;
        echo "<P>New value is $origVar</P>";
        //Add to that value and then print it
        $origVar += 25;
        echo "<P>Added a value, now it's $origVar</P>";
        //Subtract from that value and then print it
        $origVar -= 12;
        echo "<P>Subtracted a value, now it's $origVar</P>";
        //Concatenate a string and then print it:
        $origVar .= " chickens";
        echo "<P>Final answer: $origVar</P>";

        /**
         * Other include:
         * multiply *=
         * Divide /=
         * Modulus %=
         */
        
    ?>
</body>
</html>