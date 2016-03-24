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
	$signupUsername = $_POST['signupusername'];
	$signupPassword = $_POST['signuppassword'];
	$confirmSignupPassword = $_POST['confirmsignuppassword'];

	if($signupPassword === $confirmSignupPassword) {

		$sql = "SELECT * FROM users WHERE username = '$signupUsername'";
		$result = $conn->query($sql);

		if ($result->num_rows > 0) {

    		echo "user exists";

		} else {

			$sql = "INSERT INTO users (username, password) VALUES ( '$signupUsername', '$signupPassword' )";
			if ($conn->query($sql) === TRUE) {
				echo "User sign up successfully";
				$_SESSION["username"] = $signupUsername;
				$_SESSION["status"] = "Logout";
				echo '<a href="../index.php">home</a>';
			} else {
				echo "Error: " . $conn->connect_error;
			}
	
		}

	} else {
		echo "password not the same";
	}

	// echo $signupPassword;
	// echo $signupUsername;
	//echo "success";

	$conn->close();

?>