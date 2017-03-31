<?php 

require_once("../Input.php");

$hit = Input::get("hit");

?>

<!DOCTYPE html>

<html>
	<head>
		<title>PONG</title>
	</head>

	<body>
		
		<h1>PONG</h1>
		<h1> Count: <?= $hit;  ?> </h1>

		<a href="ping.php?hit= <?=$hit + 1; ?>">Hit</a>

		<a href="pong.php?hit=0">Miss</a>

	</body>

</html>