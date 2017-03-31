<?php 

require_once("../Auth.php");
require_once("../Input.php");

session_start();

if (!Auth::check()) {

   header("Location: http://codeup.dev/login.php");
   die();

} else {

    Auth::logout();

}

?>

<!DOCTYPE html>
<html>
	<head>
		<title>Logged Out</title>
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/login.css">
	</head>
	<body>

        <h1>Log back in!!!</h1>
		<a href="login.php">Log in</a>

        <script   src="https://code.jquery.com/jquery-3.2.1.js"   integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="   crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</body>
</html>