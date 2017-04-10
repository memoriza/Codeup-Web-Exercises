<?php 

require __DIR__ . '/constants.php'; //don't forget the forward slash at beginning when using DIR

try{
	$connection = new PDO(
		dsn:'mysql:host=' . DB_HOST . ';dbname=' . DB_NAME,
		username: DB_USER,
		passwd: DB_PASS
		
	);

	$connection->setAttribute(attribute: PDO::ATTR_ERRMODE, value: PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
	echo $e->getMessage(), PHP_EOL;
}

 ?>