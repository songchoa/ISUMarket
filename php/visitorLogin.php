<?php
session_start();

$_SESSION['username'] = "visitor";
$_SESSION['status'] = "login";

header('Location: http://localhost/www/ISUMarket/php/home.php')

?>