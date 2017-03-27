<?php 

function pageController () {

	$counter = [];

	if (isset($_GET["count"])) { 

		$count = $_GET["count"];

	} else {

		$count = 0;

	}

	$counter["count"] = $count;

	return $counter; 
}

extract(pageController());

?>

<!DOCTYPE html>
<html>
	<head>
		<title>COUNTER</title>
	</head>
	<body>

		<h1> Count: <?= $count;  ?> </h1>
		<a href="counter.php?count=<?= $count + 1; ?>">UP </a>
		<a href="counter.php?count=<?= $count - 1; ?>">Down</a>

	</body>
</html>