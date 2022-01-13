<!DOCTYPE html>
<html>
<head>
        <title>Trying for another error</title>
    </head>
    <body>
        <?php
            // error_reporting(E_ERROR);
            # This will generate an error when php tries to parse the double quotes :-(
            echo "<P>I think this is \"really\" cool!</P>";

            echo '<P>I think this is "really" cool!</P>';

            echo "<P>I think this is $adj cool!</P>";
        ?>
    </body>
</html>
