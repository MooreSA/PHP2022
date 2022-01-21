<?php

var_dump($_POST);

// if (($_POST['val1'] == "") || ($_POST['val2'] == "") || ($_POST['calc'] =="")) {
//     header("Location: calculate_form.html");
//     exit;
// }

// if (isset($_POST['calc']) && !empty($_POST['val2']) && !empty($_POST['val1'])) {
//     $result = "";
// } else {
//     header("Location: calculate_form.html");
//     exit;
// }


//check for post data - note isset() will not work for the text inputs
if (!isset($_POST['calc']) || empty($_POST['val1']) || empty($_POST['val2'])) {
    header("Location: calculate_form.html");
    exit;
} else {
    //check values - note is_int() will not work here
    if (is_numeric($_POST['val1']) && is_numeric($_POST['val2'])) { 
        //perform calculation
        if ($_POST['calc'] == "add") {
            $result = $_POST['val1'] + $_POST['val2'];
        } else if ($_POST['calc'] == "subtract") {
            $result = $_POST['val1'] - $_POST['val2'];
        } else if ($_POST['calc'] == "multiply") {
            $result = $_POST['val1'] * $_POST['val2'];
        } else if ($_POST['calc'] == "divide") {
            $result = $_POST['val1'] / $_POST['val2'];
        }
    } else {
        //error message
        $result = "Numbers only please!";
    }  
}
?>

<!DOCTYPE html>

<html>
<head>
    <title>Calculation Result</title>
</head>
<body>
    <p>The result of the calculation is: <?php echo "$result";?></p>
</body>
</html>

