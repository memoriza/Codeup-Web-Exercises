<?php 

session_start();

$sessionId = session_id();

function clearSession() {
    // clear $_SESSION array
    session_unset();

    // delete session data on the server
    session_destroy();

     // start a new session - session_destroy() ended our previous session so
    // if we want to store any new data in $_SESSION we must start a new one
    session_start();

    // ensure client is sent a new session cookie
    session_regenerate_id();

}

if (isset($_GET['reset'])) {
    clearsession();
    echo "You logged out. Log back in.";

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
		<a href="login.php?reset=<?=true?>">Log in</a>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</body>
</html>