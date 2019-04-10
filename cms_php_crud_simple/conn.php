<?php
 
//MySQLi Procedural

$user = 'root'; $password = ''; $db = 'upand_running'; $host = '127.0.0.1'; $port = 3306;

$conn = mysqli_connect($host, $user, $password, $db, $port );
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}
?>