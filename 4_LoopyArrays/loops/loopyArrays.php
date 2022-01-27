<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Looping through Arrays</title>
</head>
<body>
    <?php
    // Consider the following indexed array

    $bikes = ['BMX', 'ROAD', 'MTB', 'CX', 'FAT'];


    //output array values
    print "<h3>Matt's Bike Collection</h3>\n";
    
    for ($i = 0; $i <= 3; $i++){
        print "$i: $bikes[$i]<br>\n";
    } //notice this produces an undefined offset in the case that we don't specify the exact number of items

        // Better: notice the use of the count function to detect the size of the array
    print "<h3>Got bikes?</h3>\n";
    for ($i = 0; $i < count($bikes); $i++){
        print "$i: $bikes[$i]<br>\n";
    }

    // But wait... there's more! 
    print "<h3>Got bikes?</h3>\n";
    foreach ($bikes as $bike){
        print "$bike<br>\n";
    }

    ?>

    
</body>
</html>