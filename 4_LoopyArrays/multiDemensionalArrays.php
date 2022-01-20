<!DOCTYPE html>
<html>
<head>
    <title>
        Multidemensional Arrays
    </title>
</head>

<body>

    <h1>Multidemensional Arrays</h1>

    <?php
        $bikes = array(
            'CX',
            'MTB',
            'Fat',
            'Tri',
            'Road',
        );

        //what if we want to group these into two catagories? On-Road vs Off-Road?
        $bikes = array(
            'onroad' => array(
            'Road',
            'Tri',
            'CX',
            ),
            'offroad' => array(
            'MTB',
            'Fat',
            )
        );

        //Let's check it:
        print_r($bikes);
        echo '<br>';

        //more specifically... we access one array by specifying it's key:'
        print_r($bikes['onroad']);
        echo '<br>';
        print_r($bikes['offroad']);
        echo '<br>';

        //even more specifically:
        echo $bikes['onroad'][1];
        echo '<br>';

        //to modify the data, specify the array first
        $bikes['onroad'][0] = 'GravelGrinder';

        echo $bikes['onroad'][0];
        echo '<br>';
    ?>


</body>
</html>