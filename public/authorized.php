<?php 

require_once("../Auth.php");
require_once("../Input.php");

session_start();

$sessionId = session_id();


 if (Auth::check()) {
 	echo "you logged in.";

 } else {
 	echo "get out";

 	header("Location: http://codeup.dev/login.php");
 	die();

 }
		
?>

<!DOCTYPE html>

<html>
	<head>
		<title>AUTHORIZED</title>
		<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/login.css">
	</head>
	<body>
		<main class="container">
			<h1> Authorized | <?= htmlspecialchars(strip_tags(Auth::user()))  ; ?> </h1>
			<a href="http://codeup.dev/logout.php">LogOut</a>
			<script   src="https://code.jquery.com/jquery-3.2.1.js"   integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="   crossorigin="anonymous"></script>
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		</main>
	</body>
</html>