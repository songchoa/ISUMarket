<!DOCTYPE html>
<html>
<head>
    <title>Sign up</title>
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
                            <li><a href="../index.php">Home</a></li>
                            <li><a href="meanPlan.php">Meal Plan</a></li>
                            <li><a href="textbook.php">Textbook</a></li>
                            <li><a href="tech.php">Technology</a></li>
                            <li><a href="others.php">Others</a></li>
                            <li style="float: right;"><a href="login.php" class="active">Login or signup</a></li>
                            <p style="float: right; color: red;">Welcome</p>
                            
                        </ul>
                    </div>

                </div> <!-- menuHolder -->
            </div> <!-- headerWrapper -->
        </div>  <!-- header -->

        <div id="mainContent">
            <div id="contentHolder">
                <center>
                <h1>Sign up</h1>
                <form action="userSignup.php" method="post">
                    <label for="signupusername">Username:</label>
                    <input name="signupusername" type="text" required="requried"></input> <br> <br>

                    <label for="signuppassword">Password:</label>
                    <input name="signuppassword" type="password" required="requried"></input> <br> <br>

                    <label for="confirmsignuppassword">Confirm Password:</label>
                    <input name="confirmsignuppassword" type="password" required="requried"></input> <br> <br>

                    <input type="submit" value="Sign up"></input> <br><br>

                </form>
                </center>
                
            </div> <!-- contentHolder -->   
        </div> <!-- mainContent -->

    </div> <!-- mainContainer -->


</body>
</html>