<?php 
	session_start();
	session_unset();
	session_destroy();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Log out information</title>
	<style type="text/css">
	h1 {
		position: relative;
		top: 200px;
		color: #ffd700;
	}

	body {
		background-color: #33334d;
	}
	</style>
</head>
<body>

<center>
<h1>Log out successfully.</h1>
</center>
</body>
</html>