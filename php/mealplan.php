<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

    <title>ISU Market - TEXTBOOK</title>
    <link rel="stylesheet" href="../css/mainStyle.css" type="text/css"> 
    <script type="text/javascript" src="../javascript/popup.js"></script>

</head>

<body>
    <div id="mainContainer">
        <div id="header">
            <div id="headerWrapper">
                <div id="imageHolder">
                    <img src="../images/isumarketlogo2.PNG" width="180px" height="60px">
                </div>

                <div id="menuHolder">
                    <div id="textHolder">
                        <ul id="navbar">
                            <li class="tab"><a href="home.php" >Home</a></li>
                            <li class="tab"><a href="mealplan.php" class="active">Meal Plan</a></li>
                            <li class="tab"><a href="textbook.php">Textbook</a></li>
                            <li class="tab"><a href="technology.php">Technology</a></li>
                            <li class="tab"><a href="others.php">Others</a></li>
                            <li style="float: right;"> 

                            <?php 

                            if ($_SESSION['status'] === "login") {
                                    echo '<a href="login.php"> Login or signup</a>';
                                } else {
                                    echo '<a href="logout.php"> Log out</a>';
                                }

                            ?>
                           
                            </li>
                            <p class="welcome" style="float: right">Welcome, 
                                <?php 
                                echo $_SESSION['username'];
                                 ?>
                            </p>
                            
                        </ul>
                    </div>

                </div> <!-- menuHolder -->
            </div> <!-- headerWrapper -->
        </div>  <!-- header -->

        <div id="goldsilk">        	
        </div>
        <div id="cardinalsilk">       	
        </div>

        <div class="container-fluid">
                <div id="contentHeader">
                    <h1 class="subheader">MEAL PLAN</h1>
                </div>
                <?php
                	include('connectDB.php');
					
					$myquery = "SELECT * FROM mealplan";
					$result = $dbconn->query($myquery);

					if(!$result) {
						die("query failed" . mysql_error());
					}

					while ($row = $result->fetch_assoc()) {
						echo '<div class = "row">'; #row

                		echo '<div class = "col-sm-3">'; # img
                		echo '<img src = "../uploads/' . $row['picture'] . '" ' . 'width = "180px" ' . 'height = "120px">';
                		echo '</div>'; # img end

                		echo '<div class = "col-sm-9">'; # intro 
                		echo '<a href="#">' . $row['title'] . '</a>';
                		echo '<p>' . $row['intro'] . '</p>';
                		echo '</div>'; # intro end

                		echo '</div>'; # row end

					}
           
                	$dbconn->close();
                ?>

               <div id="postitembutton">
                	<p>&nbsp;</p>

                    <?php

                    $_SESSION['recent'] = "mealplan";

                    if($_SESSION["status"] === "logout") {
                        echo '<button type="button" class="btn btn-info" data-toggle="modal" data-backdrop="static" data-keyboard = "false" data-target="#myModal" onclick="popup()">Post Your Item Here</button>';
                    }

                    ?>

                </div>
   
        </div> <!-- mainContent -->

    </div> <!-- mainContainer -->

    
    <div id="footercontainer">
    	<div id="footerwrapper">
    		<div class="panel-footer">This is the footer</div>
    	</div>
    	
    </div>

</body>


</html>