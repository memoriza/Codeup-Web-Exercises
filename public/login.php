<?php 


require_once("../Auth.php");
require_once("../Input.php");

session_start();

$sessionId = session_id();

function pageController() {

	$data = [];

	$data["username"] = Input::get("username");

	$data["password"] = Input::get("password");


	Auth::attempt($data["username"], $data["password"]);

	if (Auth::check()) {
		header("Location: http://codeup.dev/authorized.php");
		die();
	}
		
	return $data;
			
}

extract(pageController());

?>

<!DOCTYPE html>

<html>
	<head>
		<title>Login</title>
		<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/login.css">
	</head>
	<body>
		<h1>Login</h1>
		<form action="login.php" method="POST">
			User Name: 
			<input type="text" name="username">
			Password:
			<input type="text" name="password">
			<input type="submit" value="submit">
			<p> User Name entered: <?= htmlspecialchars(strip_tags($username)) . " "  ; ?> </h1>
		</form>

		<script src="https://code.jquery.com/jquery-3.2.1.js"   integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="   crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</body>
</html>