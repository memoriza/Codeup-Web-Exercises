<?php 

session_start();

$sessionId = session_id();

function pageController() {

	$data = [];

	if (isset($_POST["username"])){
		$data["username"] = $_POST["username"];
		
	} else {

		$data["username"] = "";
	}

	if (isset($_POST["password"])) {
		$data["password"] = $_POST["password"];
		
	} else { 

		$data["password"] = "";

	}


	if(!empty($_POST)) { 

		if ($data["username"] == "Joshua" && $data["password"] == "Password") {

			$_SESSION["username"] = $data["username"];
			header("Location: http://codeup.dev/authorized.php");
			die();

		} else {

			echo "enter in the correct username and password to enter Authorized site";
		}

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
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</body>
</html>