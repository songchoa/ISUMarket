<?php 
	session_start();
?>

<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

	<title>ISU Market</title>
	<link rel="stylesheet" href="../css/mainStyle.css" type="text/css"> 

</head>

<body>
    
    <div id="mainContainer">
    	<div id="header">
    		<div id="headerWrapper">
    			<div id="imageHolder">
    				<img src="../images/isumarketlogo2.png" width="180px" height="60px">
    			</div>

    			<div id="menuHolder">
    				<div id="textHolder">
    					<ul id="navbar">
    						<li class="tab"><a href="home.php" class="active">Home</a></li>
    						<li class="tab"><a href="mealplan.php">Meal Plan</a></li>
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

        <!-- GOLD AND CARDINAL SILKS-->
        <div id="goldsilk">    
        </div>
        <div id="cardinalsilk">         
        </div>

    	<div class="container">
            
            <center><h1>Welcome to ISUMARKET</h1></center>
  <br>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->        
      <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
      </ol>      

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="../images/macbookair.jpg" width="460" height="345">
      </div>

      <div class="item">
        <img src="../images/amazongiftcard.jpg"  width="460" height="345">
      </div>
    
      <div class="item">
        <img src="../images/textbooks.jpg" width="460" height="345">
      </div>

      <div class="item">
        <img src="../images/mealplan.jpg" width="460" height="345">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

    	</div> <!-- mainContent -->

    </div> <!-- mainContainer -->

    <div id="footercontainer">

        <div id="footerwrapper">
            <div>
                <p>
                    This is the webpage footer.
                </p>
            </div>
        </div>
        
    </div>

</body>

</html>