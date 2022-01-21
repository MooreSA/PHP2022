<!DOCTYPE html>
<html>
<head>
    <title>
    Numerical Indexed Arrays
    </title>
</head>

<body>

    <h1>Numerical Indexed Arrays</h1>

    <?php
        //We have two options for creating arrays:
        // Option 1: array function (prefered for readability)
        $bikes = array();
        // Options 2: [] (the shortcut)
        $bikes = [];

        //Creating arrays with a single value
        $bikes = array('MTB');
        $bikes = ['BMX'];
        
        //Let's check it:
        print_r($bikes);
        echo '<br><br>';

        //to create an aarray with multiple values:
        $bikes = array('BMX','MTB');
        $bikes = ['FAST','SLOW','SOLD'];
        //Let's check it:
        print_r($bikes);
        echo '<br><br>';

        //now let's add to the existing array, What about multiples at once... check out array_push()!
        $bikes[] = 'CX';
        $bikes[] = 'Fat';
        

        //Let's check it:
        print_r($bikes);
        echo '<br><br>';

        //To access data ech the variable[index]
        echo $bikes[0] . '<br>';
        echo $bikes[1] . '<br>';
        echo $bikes[2] . '<br>';
        echo '<br><br>';
        //modify existing data
        $bikes[0] = 'Road';

        //Let's check it:
        print_r($bikes);
        echo '<br><br>';  

    ?>


</body>
</html>



