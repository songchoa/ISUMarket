<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="../css/mainStyle.css" type="text/css"> 

</head>
<body>
<div id="mainContainer">

        <div id="mainContent">
            <div id="contentHolder">
                <center>
                <h1>Log in</h1>
                <form action="userLogin.php" method="post"> 
                    <label for="loginusername">Username:</label>
                    <input name="loginusername" type="text" required="required"></input> <br> <br>

                    <label for="loginupassword">Password:</label>
                    <input name="loginpassword" type="password" required="required"></input> <br> <br>

                    <input type="submit" value="Login"></input> <br><br>

                    <label for="signup">Don't have an acount?</label>
                    <a id="signup" href="signup.php">Sign up</a>
                </form>
                </center>
                
            </div> <!-- contentHolder -->   
        </div> <!-- mainContent -->

    </div> <!-- mainContainer -->


</body>
</html>