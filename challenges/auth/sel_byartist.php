<?php
    require("./require_login.php");
	require("./db_connect.php");

	$table_name = "music";
    $display_block = "";

	$sql = "SELECT music_id, format, title, trim(concat(artist_fn,' ',artist_ln)) as artist_fullname, rec_label, my_notes, date_acq FROM $table_name ORDER BY artist_fullname";
	$result = @mysqli_query($con, $sql) or die(mysqli_error($con));
	while ($row = mysqli_fetch_array($result)) {
        $id = $row['music_id'];
        $format = $row['format'];
        $title = stripslashes($row['title']);
        $artist_fullname = stripslashes($row['artist_fullname']);
        $rec_label = stripslashes($row['rec_label']);
        $my_notes = stripslashes($row['my_notes']);
        $date_acq = $row['date_acq'];
        if ($date_acq == "0000-00-00") {
             $date_acq = "[unknown]";
        }
        $display_block .= "
        <p><strong>$title</strong> ($artist_fullname)<br>
        $my_notes <em>(acquired: $date_acq, format: $format)</em></p>";
	}
?>
<!DOCTYPE html>
<html>

<head>
    <title>My Music (Ordered by Artist)</title>
</head>

<body>
    <h1>My Music: Ordered by Artist</h1>
    <?php echo "$display_block"; ?>
    <p><a href="my_menu.html">Return to Menu</a></p>
    <p><a href="logout.php">Logout</a></p>
</body>

</html>