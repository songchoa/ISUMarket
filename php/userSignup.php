<?php
	
	session_start();

	include('connectDB.php');

	//Get information from registration form
	$signupUsername = $_POST['signupusername'];
	$signupPassword = $_POST['signuppassword'];
	$confirmSignupPassword = $_POST['confirmsignuppassword'];

	if($signupPassword === $confirmSignupPassword) {

		$sql = "SELECT * FROM users WHERE username = '$signupUsername'";
		$result = $dbconn->query($sql);

		if ($result->num_rows > 0) {

    		echo "user exists";

		} else {

			$sql = "INSERT INTO users (username, password) VALUES ( '$signupUsername', '$signupPassword' )";
			if ($dbconn->query($sql) === TRUE) {
				$_SESSION["username"] = $signupUsername;
				$_SESSION["status"] = "logout";
				header('Location: http://localhost/www/ISUMarket/php/home.php');
			} else {
				echo "Error: " . $dbconn->connect_error;
			}
	
		}

	} else {
		echo "password not the same";
	}

	// echo $signupPassword;
	// echo $signupUsername;
	//echo "success";

	$dbconn->close();

?>