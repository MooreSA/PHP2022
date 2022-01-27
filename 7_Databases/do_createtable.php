<?php
//error_reporting(0);
//ini_set("error_reporting", "off");
ini_set("error_reporting", E_ALL);
//indicate the database you want to use
    //$db_name = "test";

//connect to database
// A slightly better DB connect

require 'config.php'; //note require vs include vs require_once
$host=$config['DB_HOST'];
$db_name=$config['DB_DATABASE'];
$connection = mysqli_connect($host, $config['DB_USERNAME'], $config['DB_PASSWORD'])
    or die(mysqli_error($connection)); 
$db = mysqli_select_db($connection, $db_name) or die(mysqli_error($connection));
//start creating the SQL statement
$sql = "CREATE TABLE $_POST[table_name] (";

//continue the SQL statement for each new field
for ($i = 0; $i < count($_POST['field_name']); $i++) {
    $sql .= $_POST['field_name'][$i]." ".$_POST['field_type'][$i];

    if (isset($_POST['auto_increment'][$i]) == "Y") {
        $additional = "NOT NULL auto_increment";
    } else {
        $additional = "";
    }

    if (isset($_POST['primary'][$i]) == "Y") {
        $additional .= ", primary key (".$_POST['field_name'][$i].")";
    } else {
        $additional = "";
    }

    if (isset($_POST['field_length'][$i]) != "") {
        $sql .= " (".$_POST['field_length'][$i].") $additional ,";
    } else {
        $sql .= " $additional ,";
    }

}

//clean up the end of the string
$sql = substr($sql, 0, -1);
$sql .= ")";

//execute the query
$result = mysqli_query($connection, $sql) or die(mysqli_error($connection));

//get a good message for display upon success
if ($result) {
        $msg = "<P>".$_POST['table_name']." has been created!</P>";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Create a Database Table: Step 3</title>
</head>
<body>
    <h1>Adding table to <?php echo "$db_name"; ?>...</h1>
    <?php echo $sql; ?>
    <?php echo "$msg"; ?>
</body>
</html>


