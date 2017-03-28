<?php 

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

		if($data["username"] == "Guest" && $data["password"] == "Password") {
			header("Location: http://codeup.dev/authorized.php");
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
	</head>
	<body>
		<h1>Login</h1>
		<form action="login.php" method="POST">
			User Name: 
			<input type="text" name="username">
			Password:
			<input type="text" name="password">

			<input type="submit" value="submit">

		<h1> User Name & Password : <?= htmlspecialchars(strip_tags($username)) . " " . htmlspecialchars(strip_tags($password)) ; ?> </h1>

		</form>
	</body>
</html>