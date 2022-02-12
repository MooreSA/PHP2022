<?php

$config = parse_ini_file("config.ini", true);

$salt = $config["auth"]["SALT"];

$username = "Seamus";

$password = "password";
$password = hash("sha256", $salt . $password);

print($username);
print($password);