<!DOCTYPE html>
<html>
<head>
    <title>Sign up</title>
    <link rel="stylesheet" href="../css/mainStyle.css" type="text/css"> 

    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

</head>
<body>

<?php
    
    session_start();

    include('connectDB.php');

    $signupPasswordErr = $signupUsernameErr = $signupUsername = $signupPassword = $confirmSignupPassword = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $signupUsername = test_input($_POST['signupusername']);
        $signupPassword = test_input($_POST['signuppassword']);
        $confirmSignupPassword = test_input($_POST['confirmsignuppassword']);


        if($signupPassword === $confirmSignupPassword) {

        $sql = "SELECT * FROM users WHERE username = '$signupUsername'";
        $result = $dbconn->query($sql);

        if ($result->num_rows > 0) {

            $signupUsernameErr = "username existed";

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

        $signupPasswordErr = "passwords not the same";
    }

    }
    
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $dbconn->close();

?>

<div id="logincontainerwrapper"></div>
    <div class="container" id="logindiv">
 <h2 class="col-sm-offset-4 col-sm-8">User Signup</h2> 
  <form class="form-horizontal" role="form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
    <div class="form-group">
      <label class="control-label col-sm-4" for="username">Username:</label>
      <div class="col-sm-3 ">
        <input type="text" class="form-control" name="signupusername" id="username" placeholder="Enter username" required="required">
        </div>
        <div class="col-sm-5"><span class="errormsg"><?php echo $signupUsernameErr;?></span>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-4" for="pwd">Password:</label>
      <div class="col-sm-3">          
        <input type="password" class="form-control" id="pwd" name="signuppassword" placeholder="Enter password" required="required">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-4" for="confirmsignuppassword">Confirm Password:</label>
      <div class="col-sm-3">          
      <input type="password" class="form-control" id="confirmsignuppassword" name="confirmsignuppassword" placeholder="Enter confirm password" required="required">
      </div>
      <div class="col-sm-5"><span class="errormsg"><?php echo $signupPasswordErr;?></span>
      </div>
    </div>
    
    <div class="form-group">        
      <div class="col-sm-offset-4 col-sm-8">
        <button type="submit" class="btn btn-default" id="loginbutton">Sign up</button>
      </div>
    </div>

  </form>
</div>


</body>
</html>