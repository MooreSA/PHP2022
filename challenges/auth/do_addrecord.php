<?php
require("./require_login.php");
//check for required fields
if ((!$_POST['id']) || (!$_POST['format']) || (!$_POST['title'])) {
        header("Location: /show_addrecord.html");
        exit;
}

$table_name = "music";

//connect to MySQL and select database to use
require("db_connect.php");

var_dump($con);
// prepare SQL


$stmt = $con->prepare(
    "INSERT INTO $table_name 
        (music_id, format, title, artist_fn, artist_ln, rec_label, my_notes, date_acq) 
    VALUES 
        (?, ?, ?, ?, ?, ?, ?, ?)");

$stmt->bind_param("isssssss", $id, $format, $title, $artist_fn, $artist_ln, $rec_label, $my_notes, $date_acq);

$id = intval($_POST['id']);
$format = $_POST['format'];
$title = $_POST['title'];
$artist_fn = $_POST['artist_fn'];
$artist_ln = $_POST['artist_ln'];
$rec_label = $_POST['rec_label'];
$my_notes = $_POST['my_notes'];
$date_acq = $_POST['date_acq'];

$result = $stmt->execute() or die(mysqli_error($con));

?>
<!DOCTYPE html>
<html>*

<head>
    <title>Add a Record</title>
</head>

<body>
    <h1>Adding a Record to <?php echo "$table_name"; ?></h1>
    <table cellspacing=3 cellpadding=3>
        <tr>
            <td valign=top>
                <p><strong>ID:</strong><br>
                    <?php echo "$_POST[id]"; ?></p>
                <p><strong>Date Acquired (YYYY-MM-DD):</strong><br>
                    <?php echo "$_POST[date_acq]"; ?></p>
            </td>
            <td valign=top>
                <p><strong>Format:</strong><br>
                    <?php echo "$_POST[format]"; ?>
                </p>
            </td>
        </tr>
        <tr>
            <td valign=top>
                <p><strong>Title:</strong><br>
                    <?php echo "$_POST[title]"; ?></p>
            </td>
            <td valign=top>
                <p><strong>Record Label:</strong><br>
                    <?php echo "$_POST[rec_label]"; ?></p>
            </td>
        </tr>
        <tr>
            <td valign=top>
                <p><strong>Artist's First Name:</strong><br>
                    <?php echo "$_POST[artist_fn]"; ?></p>
            </td>
            <td valign=top>
                <p><strong>Artist's Last Name (or Group Name):</strong><br>
                    <?php echo "$_POST[artist_ln]"; ?></p>
            </td>
        </tr>
        <tr>
            <td valign=top colspan=2 align=center>
                <p><strong>My Notes:</strong><br>
                    <?php echo stripslashes($_POST['my_notes']); ?></p>
                <p><a href="show_addrecord.html">Add Another</a></p>
            </td>
        </tr>
    </table>
</body>

</html>