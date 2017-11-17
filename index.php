<?php
require "autoload.php";

use MFFResources\ResourceJSONReader;

$reader = new ResourceJSONReader("test.json");

$courses = $reader->read();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Sbírka materiálů</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
    <?php echo $courses->allDetailsHTML(); ?>
	</body>
</html>
