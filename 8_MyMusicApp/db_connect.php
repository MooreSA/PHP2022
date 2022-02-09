<?php 
    
$config = parse_ini_file("config.ini", true);

$con = new mysqli(
    $config["database"]["DB_HOST"], 
    $config["database"]["DB_USER"], 
    $config["database"]["DB_PASS"], 
    $config["database"]["DB_NAME"]) or die(mysqli_error($con));