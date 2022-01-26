<?php
$string = file_get_contents("../files/txt/data.json");
var_dump($string);
$json = json_decode($string, true);
var_dump($json);

foreach ($json[0] as $id => $value) {
    echo nl2br("$id => $value\n");
}
foreach ($json[2] as $id => $value) {
    echo nl2br("$id => $value\n");
}
foreach ($json[3] as $id => $value) {
    echo nl2br("$id => $value\n");
}

// $jsonIterator = new RecursiveIteratorIterator(
//     new RecursiveArrayIterator(json_decode($string, true)),
//     RecursiveIteratorIterator::SELF_FIRST
// );

// foreach ($jsonIterator as $key => $val) {
//     if (is_array($val)) {
//         echo nl2br("$key:\n");
//     } else {
//         echo nl2br("$key => $val\n");
//     }
// }