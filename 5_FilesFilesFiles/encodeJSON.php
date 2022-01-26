<?php

$partArray = array(
    'Matt',
    'Ashley',
    'Ryan',
    'Willow',
);

$userArray = [
    [   'id' => 1,
        'first_name' => 'Jeanette',
        'last_name' => 'Penddreth',
        'email' => 'jpenddreth0@census.gov',
        "ip_address" => "67.76.188.26"
    ],
    [
        "id"=> 2,
        "first_name"=> "Giavani",
        "last_name"=> "Frediani",
        "email"=> "gfrediani1@senate.gov",
        "ip_address"=> "229.179.4.212"
    ],
    [
        "id" => 3,
        "first_name" => "Willard",
        "last_name" => "Valek",
        "email" => "wvalek3@vk.com",
        "ip_address" => "67.76.188.26"
    ],
    [
        "id" => 4,
        "first_name" => "Willard",
        "last_name" => "Valek",
        "email" => "wvalek3@vk.com",
        "ip_address" => "67.76.188.26"
    ]

];

var_dump($userArray);

// Convert Array to JSON String
$userJSON = json_encode($userArray);
echo $userJSON;

echo "<br>";

$partJSON = json_encode($partArray);
echo $partJSON;

?>