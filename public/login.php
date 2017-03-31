<?php 


require_once("../Auth.php");
require_once("../Input.php");

session_start();

$sessionId = session_id();

function pageController() {

	if(!empty($_POST)) {

		$username = Input::get("username");

		$password = Input::get("password");
		

		if (Auth::attempt($username, $password)) {

			header("Location: http://codeup.dev/authorized.php");
			die();

		}
				
	}
}

pageController();


?>

<!DOCTYPE html>

<html>
	<head>
		<title>Login</title>
		<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/login.css">
	</head>
	<body>
		<main class="container">
			<h1>Login</h1>
			<form action="login.php" method="POST">
				User Name: 
				<input type="text" name="username">
				Password:
				<input type="text" name="password">
				<input type="submit" value="submit">
			</form>
		</main>
		<script src="https://code.jquery.com/jquery-3.2.1.js"   integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="   crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</body>
</html>