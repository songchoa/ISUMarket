<?php
	session_start();

	include('connectDB.php');
	

	//Get information from registration form
	$loginUsername = $_POST['loginusername'];
	$loginPassword = $_POST['loginpassword'];

	$sql = "SELECT * FROM users WHERE username = '$loginUsername'";
	$result = $dbconn->query($sql);

	if($result->num_rows > 0) {

		$row = $result->fetch_assoc();

		if($row["password"] === $loginPassword) {
			$_SESSION['username'] = $loginUsername;
			$_SESSION["status"] = "logout";
			echo $_SESSION["username"];
			header('Location: http://localhost/www/ISUMarket/php/home.php');
		} else {
			echo "password not correct.";
		}

	} else {

		echo "user does not exist.";
	}

	$dbconn->close();

?>