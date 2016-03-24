<!DOCTYPE html>
<html>
<head>
    <title>Sign up</title>
    <link rel="stylesheet" href="../css/mainStyle.css" type="text/css"> 

</head>
<body>
<div id="mainContainer">

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