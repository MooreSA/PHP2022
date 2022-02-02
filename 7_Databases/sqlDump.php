
<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$database = 'test';
$user = 'root';
$pass = '';
$host = 'localhost';
$dir = dirname(__FILE__) . '/dump.sql';

echo "<h3>Backing up database to `<code>{$dir}</code>`</h3>";

$path = 'C:\wamp64\bin\mariadb\mariadb10.4.13\bin';

exec("mysqldump --user={$user} --password={$pass} --host={$host} {$database} --result-file={$dir} 2>&1", $output);

var_dump($output);