<?php
	session_start();


	$serverName = "localhost:3306";
	$username = "root";
	$password = "";
	$dbName = "isumarket";

	//establish connection
	$conn = new mysqli($serverName,$username,$password,$dbName);

	//verify connection
	if($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}

	//Get information from registration form
	$loginUsername = $_POST['loginusername'];
	$loginPassword = $_POST['loginpassword'];

	$sql = "SELECT * FROM users WHERE username = '$loginUsername'";
	$result = $conn->query($sql);

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

	$conn->close();

?>