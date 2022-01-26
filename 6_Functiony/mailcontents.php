<?php

	$filename = "../files/txt/newfile.txt";
	$whattoread = @fopen($filename, "r") or die("Couldn't open file");
	$file_contents = fread($whattoread, filesize($filename));
	$to = "matt@nscctruro.ca";
	$subject = "File Contents";
	$mailheaders = "From: My Web Site <matt@nscctruro.ca> \n";
	mail($to, $subject, $file_contents, $mailheaders);
	$msg = "<p>Check your mail!</p>";
	fclose($whattoread);
?>

<!DOCTYPE html>

<html>
	<head>
		<title>Mailing Data From a File</title>
	</head>
	<body>
		<?php echo "$msg"; ?>
	</body>
</html>