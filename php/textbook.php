<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <title>ISU Market - TEXTBOOK</title>
    <link rel="stylesheet" href="../css/mainStyle.css" type="text/css"> 

</head>

<body>
    <div id="mainContainer">
        <div id="header">
            <div id="headerWrapper">
                <div id="imageHolder">
                    <img src="../images/isumarketlogo.png" width="180px" height="60px">
                </div>

                <div id="menuHolder">
                    <div id="textHolder">
                        <ul id="navbar">
                            <li><a href="home.php" >Home</a></li>
                            <li><a href="mealplan.php">Meal Plan</a></li>
                            <li><a href="textbook.php" class="active">Textbook</a></li>
                            <li><a href="tech.php">Technology</a></li>
                            <li><a href="others.php">Others</a></li>
                            <li style="float: right;"> 

                            <?php 

                            if ($_SESSION['status'] === "login") {
                                    echo '<a href="login.php"> Login or signup</a>';
                                } else {
                                    echo '<a href="logout.php"> Log out</a>';
                                }

                            ?>
                           
                            </li>
                            <p style="float: right; color: red;">Welcome, 
                                <?php 
                                echo $_SESSION['username'];
                                 ?>
                            </p>
                            
                        </ul>
                    </div>

                </div> <!-- menuHolder -->
            </div> <!-- headerWrapper -->
        </div>  <!-- header -->

        <div id="mainContent">
            <div id="contentHolder">
                <div id="contentHeader">
                    <h1 class="subheader">TEXTBOOK</h1>
                </div>
                <div>
                    <table>
                        <tr class="book 1">
                            <th>
                                <img src="../images/isumarketlogo.png" width="180px" height="120px">
                            </th>

                            <th>
                                <a class="title" href="asdflkjlk">Caculus II</a>
                                <p>A very good book but very hard to learn.</p>
                              
                            </th>
                        </tr>

                        <tr class="book 2">
                            <th>
                                <img src="../images/isumarketlogo.png" width="180px" height="120px">
                            </th>

                            <th>
                                <a class="title" href="asdflkjlk">Caculus II</a>
                                <p>A very good book but very hard to learn.</p>
                                
                            </th>
                        </tr>


                    </table>
                </div>
                          

            </div> <!-- contentHolder -->   
        </div> <!-- mainContent -->

    </div> <!-- mainContainer -->
</body>

</html>