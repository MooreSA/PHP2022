<!DOCTYPE html>
<html>
<head>
    <title>Assignment Operators</title>
</head>
<body>
    <?php
        $origVar = 100;
        echo "<p>Original value is: $origVar</p>";

        $origVar = 25;
        echo "<p>Added value is: $origVar</p>";
        
        $origVar = 12;
        echo "<p>Subtracted value is: $origVar</p>";
        
        $origVar = "chickens";
        echo "<p>Final Answer: $origVar</p>";

        echo is_string($origVar);
    ?>
</body>
</html>