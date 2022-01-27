<?php
// Check file size
// if ($_FILES["img1"]["size"] > 500000) {
// 	echo "Sorry, your file is too large.";
// 	$uploadOk = 0; }
if ($_FILES['img1'] != "") {
    
    copy($_FILES['img1']['tmp_name'], "./img/".$_FILES['img1']['name']) 
        or die("Couldn't copy the file.");
} else {
        die("No input file specified");
}

    // See doc http://php.net/manual/en/features.file-upload.post-method.php

    //consider using move_uploaded_file() it only works if the file was uploaded via php which prevents various sorts of tom-foolery

?>

<!DOCTYPE html>

<html>
<head>
    <title>Successful File Upload</title>
</head>
<body>
    <h1>Success!</h1>
    <p>You sent: <?php echo $_FILES['img1']['name']; ?>, 
    a <?php echo $_FILES['img1']['size']; ?> byte file with 
    a mime type of <?php echo $_FILES['img1']['type']; ?>.</p>
</body>
</html>

