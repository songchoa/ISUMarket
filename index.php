<?php 
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>ISU Market</title>
	<link rel="stylesheet" href="css/mainStyle.css" type="text/css"> 

</head>

<body>
    <div id="mainContainer">
    	<div id="header">
    		<div id="headerWrapper">
    			<div id="imageHolder">
    				<img src="images/isumarketlogo.png" width="180px" height="60px">
    			</div>

    			<div id="menuHolder">
    				<div id="textHolder">
    					<ul id="navbar">
    						<li><a href="index.php" class="active">Home</a></li>
    						<li><a href="php/meanPlan.php">Meal Plan</a></li>
    						<li><a href="php/textbook.php">Textbook</a></li>
    						<li><a href="php/tech.php">Technology</a></li>
    						<li><a href="php/others.php">Others</a></li>
    						<li style="float: right;">
                            <a href="php/login.php">Login or Signup</a></li>
                            <p style="float: right; color: red;">Welcome</p>
    						
    					</ul>
    				</div>

    			</div> <!-- menuHolder -->
    		</div> <!-- headerWrapper -->
    	</div>  <!-- header -->

    	<div id="mainContent">
    		<div id="contentHolder">
    			<center><h1>Welcome to ISUMARKET</h1></center>
    			
    		</div> <!-- contentHolder -->	
    	</div> <!-- mainContent -->

    </div> <!-- mainContainer -->

</body>

</html>