<?php

	$dbHost = 'localhost';
	$dbName = 'db_store';
	$dbUsername = 'root';
	$dbPassword = '';

try {
	$dbConn = new PDO("mysql:host={$dbHost};dbname={$dbName}", $dbUsername, $dbPassword);
	
	$dbConn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}catch(PDOException $e) {
	
	echo $e->getMessage();

}

?>