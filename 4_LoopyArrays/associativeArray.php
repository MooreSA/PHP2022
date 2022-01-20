<!DOCTYPE html>
<html>
<head>
    <title>
    Associative Arrays
    </title>
</head>

<body>

    <h1>Assiciative Arrays</h1>

    <?php

        //associative arrays use a name-value pair instead of a numerical index:
       $bikesSerial = array(
           'BMX' => 378383736,
           'MTB' => 533553533,
           // note the double arrow operator for accessing array values. 
           //Not to be confused with -> object operator.
        );
        print_r($bikesSerial);
        echo '<br>';

        //accessing the data:
        echo $bikesSerial['BMX'];
        echo '<br>';
        echo $bikesSerial['MTB'];
        echo '<br>';

        //Adding new data:
        $bikesSerial['Rocky Mountain'] = 38723973;
        print_r($bikesSerial);
        echo '<br>';


        // But wait... there's more! 
        print "<h3>Got bikes?</h3>\n";
                //$array as $arrayKey => $keyValue
        foreach ($bikesSerial as $name => $serial){
            print "I have a $name bike with the serial #: $serial<br>\n";
        }
        echo '<br>';
        // or just print values by key
        foreach ($bikesSerial as $name){
            print "I have a bike with the serial #: $name<br>\n";
        }
        echo '<br>';


        // Working with JSON is easy too!
        $bikesJSON = json_encode($bikesSerial);

        var_dump($bikesJSON);

        echo '<br>';

        $bikesArray = json_decode($bikesJSON);

        var_dump($bikesArray);



    ?>


</body>
</html>