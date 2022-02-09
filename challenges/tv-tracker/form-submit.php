<?php

    // Check there was a valid POST
    if($_SERVER['REQUEST_METHOD'] != "POST") {
        header("Location: index.html");
        die();
    }
    
    // Ensure all fields are filled
    if (!isset(
        $_POST['firstName'],
        $_POST['lastName'],
        $_POST['birthYear'],
        $_POST['currentYear'],
        $_POST['bedTime'],
        $_POST['wakeTime'],
        $_POST['homework'],
        $_POST['video'],
        $_POST['gaming'],
        $_POST['family'],
        $_POST['outside'],
    )) {
        echo "Error: POST data not set";
        die();
    }

    // Calc awake time
    $awakeDate = new DateTime($_POST['wakeTime']);
    $bedDate = new DateTime($_POST['bedTime']);
    
    if ($awakeDate > $bedDate) {
        echo "Error: Wake time is after bed time";
        die();
    } elseif ($awakeDate == $bedDate) {
        echo "Error: Wake time is the same as bed time";
        die();
    } else {
        // Calculate awake time
        $awakeTime = $awakeDate->getTimestamp() - $bedDate->getTimestamp();
        $awakeTime = 0- ($awakeTime / 60 / 60);
    }

    // Get how many years of school remaining
    $yearsRemaining = 13 - $_POST['currentYear'];
    $schoolDaysRemaining = $yearsRemaining * 195;

    // Calc screen time
    $screenTime = intval($_POST['video']) + intval($_POST['gaming']);

    $bigScreenTime = $screenTime * $schoolDaysRemaining;

    $screenPercentage = $screenTime / $awakeTime;

    // open a csv file for writing
    // if the file doesn't exist, create it
    $fileName = "./data/data.csv";
    $csvFile = @fopen($fileName, "a+") or die("Couldn't open file.");

    $csvFields = [
        $_POST['firstName'],
        $_POST['lastName'],
        $_POST['birthYear'],
        $_POST['currentYear'],
        $_POST['bedTime'],
        $_POST['wakeTime'],
        $_POST['homework'],
        $_POST['video'],
        $_POST['gaming'],
        $_POST['family'],
        $_POST['outside'],
        $awakeTime,
        $screenTime,
        $bigScreenTime,
        $screenPercentage,
    ];

    fputcsv($csvFile, $csvFields);

    // close the file
    fclose($csvFile);
    ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank you!</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" />
</head>

<body>
    <div class="container">
        <?php 
            echo('
                <div class=row mx-auto mt-5>
                    <div class="col-6 text-center mx-auto">
                        <h1>Thank you!</h1>
                        <p>Your data has been saved.</p>
                        <p>Thank you '.$_POST["firstName"].' for your response!</p>
                    </div>
                </div>
                <div class="row">
                <div class="col-md-6 col-sm-12 mx-auto text-center">
                    <p>First Name: '.$_POST['firstName'].'</p>
                    <p>Last Name: '.$_POST['lastName'].'</p>
                    <p>Birth Year: '.$_POST['birthYear'].'</p>
                    <p>Current Grade: '.$_POST['currentYear'].'</p>
                </div>
            ');
            ?>
    </div>
</body>

</html>