<?php 

function pageController() {

	$value = [];

	if (isset($_GET["hit"])) { 

		$hit = $_GET["hit"];

	} else {

		$hit = 0;

	}


	if (isset($_GET["miss"])) {
		echo("YOU MISSED! BITCH");
	}

	$value["hit"] = $hit; 

	return $value;

}

extract(pageController());

?>

<!DOCTYPE html>

<html>
	<head>
		<title>PING</title>
	</head>
	<body>

		<h1>PING</h1>
		<h1> Count: <?= $hit;  ?> </h1>
		<a href="pong.php?hit=<?=$hit + 1; ?>">Hit</a>
		<a href="ping.php?miss=<?=$hit = true; ?>">Miss</a>

	</body>
</html>