<?php
define('dbhost', 'localhost:3306');
define('password', '');
define('username', 'root');
define('db', 'isumarket');

$dbconn = mysqli_connect(dbhost,username,password,db);

if($dbconn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}
?>