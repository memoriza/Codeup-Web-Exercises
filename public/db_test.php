<?php 

require __DIR__ . '/db_connect.php';

echo $connection->getAtrribute(attribute:PDO::ATTR_CONNECTION_STATUS), PHP_EOL;

?>