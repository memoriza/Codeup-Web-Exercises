<?php 

function pageController() {
	$data = [];

	if (isset($_POST["username"])){
		$username = $_POST["username"];
	} else {
		$username = "";
	}

	if (isset($_POST["password"])) {
		$password = $_POST["password"];
	} else { 
		$password = "";
	}

	$data["username"] = $username;
	$data["password"] = $password;

	return $data;
}

extract(pageController());

?>


<!DOCTYPE html>

<html>
	<head>
		<title>Login</title>
	</head>
	<body>
		<h1>Login</h1>
		<form action="login.php" method="POST">
			User Name: 
			<input type="text" name="username">
			Password:
			<input type="text" name="password">

			<input type="submit" value="submit">

		<h1> User Name & Password : <?= $username . " " . $password; ?> </h1>

		</form>
	</body>
</html>