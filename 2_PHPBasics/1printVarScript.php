<!DOCTYPE html>
<html>
	<head>
		<title>Printing Variables</title>
	</head>
	<body>
		<?php
			$varInt = 1001;
			$varFloat = 123123.123123;
			$varString = "Hello World";
			$varBool = true;
			var_dump($varInt);
			print "<p>Our float: $varFloat</p>";
			echo "<p>Our float: $varFloat</p>";
			echo "<p>Our String: $varString</p>";
			echo "<p>Our Bool: $varBool</p>";
			define("MY_CONSTANT", "this is a constant!");
			echo MY_CONSTANT;
			echo defined('MY_CONSTANT');
			echo "<br>This is a file: " . __FILE__;
			echo "<br>This is a path: " . __DIR__;
			echo "<br>This is a line: " . __LINE__;
			echo "<br>This is your php version: " . PHP_VERSION;
		?>
	</body>
</html>