<?php 
    
$config = parse_ini_file("config.ini", true);

// var_dump($config["database"]);

// var_dump($config["database"]["DB_HOST"]);
// var_dump($config["database"]["DB_USER"]);
// var_dump($config["database"]["DB_PASS"]);
// var_dump($config["database"]["DB_NAME"]);


$con = new mysqli(
    $config["database"]["DB_HOST"], 
    $config["database"]["DB_USER"], 
    $config["database"]["DB_PASS"], 
    $config["database"]["DB_NAME"]) or die(mysqli_error($con));