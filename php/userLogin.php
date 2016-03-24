<?php
	session_start();

	$serverName = "localhost:3306";
	$username = "root";
	$password = "root";
	$dbName = "chao";

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
			echo "welcom.";
			$_SESSION['username'] = $loginUsername;
			$_SESSION["status"] = "Logout";
			echo $_SESSION["username"];
			echo "<a href= " . "'../index.php'" . ">"."home"."</a>";
		} else {
			echo "password not correct.";
		}

	} else {

		echo "user does not exist.";
	}

	$conn->close();

?>