<?php 

session_start();

$sessionId = session_id();

if ($_SESSION["username"] && $_SESSION["username"] == "Joshua") {

	echo "you are allowed here ";

} else { 

	echo "you are not allowed here";
	header("Location: http://codeup.dev/login.php");

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
		<h1> Authorized | <?= htmlspecialchars(strip_tags($_SESSION["username"]))  ; ?> </h1>
		<a href="logout.php?reset=<?='true;' ?>">LogOut</a>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</body>
</html>