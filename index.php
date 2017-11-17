<?php
require __DIR__ . "/vendor/autoload.php";

use MFFResources\CourseResourceReader;

try {
    $reader = new CourseResourceReader("sbirka.json");
    $courses = $reader->getCourses();

    $body = $courses->allDetailsHTML();
} catch (\Exception $e) {
    $body = $e->getMessage();
}

?>
<!DOCTYPE html>
<html>
	<head>
		<title>Sbírka materiálů</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
        <?php echo $body; ?>
	</body>
</html>
