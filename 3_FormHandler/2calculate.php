<?php

// var_dump($_POST['calc']);

if(!isset($_GET['calc']) || empty($_GET['val1'])){
    header("Location: 1calculate_form.html");
    exit;
} else{
    var_dump($_POST['calc']);

    if(is_numeric($_POST['val1']) && is_numeric($_POST['val2'])){

        if ($_POST['calc'] == "add"){
            $result = $_POST['val1'] + $_POST['val2'];
        }else if ($_POST['calc'] == "subtract"){
            $result = $_POST['val1'] - $_POST['val2'];
        }else if ($_POST['calc'] == "multiply"){
            $result = $_POST['val1'] * $_POST['val2'];
        }else if ($_POST['calc'] == "divide"){
            $result = $_POST['val1'] / $_POST['val2'];
        }
    } else {
        $result = "BUSTED!!!! Numbers only please!!!!";
    }    
}


?>
<!DOCTYPE html>
<html>

<head>
    <title>Boom I got ur numbers!</title>
</head>

<body>
    <p>Boom! I got your numbers: <?php echo $result?></p>

</body>

</html>