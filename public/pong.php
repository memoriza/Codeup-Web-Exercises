<?php 

function pageController() {

	$value = [];

	if (isset($_GET["hit"])) { 

		$hit = $_GET["hit"];

	} else {

		$hit = 0;

	}

	if(isset($_GET["miss"])) {
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
		<title>PONG</title>
	</head>
	<body>

		<h1> Count: <?= $hit;  ?> </h1>
		<a href="ping.php?hit= <?= $hit + 1; ?>">Hit</a>
		<a href="pong.php?miss= <?= $miss = true;?>">Miss</a>

	</body>
</html>