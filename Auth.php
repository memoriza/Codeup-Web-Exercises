<?php 

require_once("Log.php");

class Auth {


public static $password = '$2y$10$SLjwBwdOVvnMgWxvTI4Gb.YVcmDlPTpQystHMO2Kfyi/DS8rgA0Fm';

public static function attempt ($username, $password) {

	if ($username == "guest" && password_verify($password, self::$password)) {

		$_SESSION["username"] = $username;

		$log = new Log("click");

		$log->info("User $username logged in.");

		return true;

	} else {

		$log = new Log("click");

		$log->error("User $username failed to log in.");

		return false;
	}

}

public static function check () {

	return isset($_SESSION["username"]);

}

public static function user () {

	if(self::check()) {
		return ($_SESSION["username"]);
	} else {
		return false;
	}


}

public static function logout () {

    session_unset();

    session_regenerate_id();

    session_destroy();

    session_start();

}

}

?>