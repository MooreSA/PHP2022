<!DOCTYPE html>
<html>
<head>
    <title>
        Array Functions
    </title>
</head>

<body>

    <h1>Array Functions</h1>

    <?php
        //count()
        $students = array(
            'Matt',
            'Ashley',
            'Ryan',
            'Willow',
        );

        //count items in the array
        echo count($students);
        echo '<br>';

        //join elements together, note the ' ' sperator
        echo implode(' ', $students);
        echo '<br>';

        //shuffle
        shuffle($students);
        echo implode(' ', $students);
        echo '<br>';

        //sort elements - sort, asort (maintain index) and ksort (by key).
        //see also rsort (reverse) and arsort. Later check out usort (user defined)! 
        rsort($students);
        echo implode(' ', $students);
        echo '<br>';

        //building an array from a string
        $student = "William, Weston, Willow";
         print_r(explode(',', $student));

    ?>


</body>
</html>
