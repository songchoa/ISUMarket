<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
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
    include ('connectDB.php');

    $usernameErr = $passwordErr = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = test_input($_POST['loginusername']);
        $password = test_input($_POST['loginpassword']);

        $sql = "SELECT * FROM users WHERE username = '$username'";
        $result = $dbconn->query($sql);

        if($result->num_rows > 0) {

        $row = $result->fetch_assoc();

        if($row["password"] === $password) {
            $_SESSION['username'] = $username;
            $_SESSION["status"] = "logout";
            header('Location: http://localhost/www/ISUMarket/php/home.php');
        } else {
            $passwordErr = "Password not correct";
        }

    } else {
        $usernameErr = "User does not exist";
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
 <h2 class="col-sm-offset-4 col-sm-8">User Login</h2> 
  <form class="form-horizontal" role="form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?> "method="post">
    <div class="form-group">
      <label class="control-label col-sm-4" for="username">Username:</label>
      <div class="col-sm-3">
        <input type="text" class="form-control" name="loginusername" id="username" placeholder="Enter username" required="required">  
      </div>
      <div class="col-sm-5"><span class="errormsg"><?php echo $usernameErr;?></span>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-4" for="pwd">Password:</label>
      <div class="col-sm-3">          
        <input type="password" class="form-control" id="pwd" name="loginpassword" placeholder="Enter password" required="required">
      </div>
      <div class="col-sm-5"><span class="errormsg"><?php echo $passwordErr;?></span>
      </div>
    </div>
    
    <div class="form-group">        
      <div class="col-sm-offset-4 col-sm-8">
        <button type="submit" class="btn btn-default" id="loginbutton">Login</button>
      </div>
    </div>

    <div class="form-group">        
      <div class="col-sm-offset-4 col-sm-8">
        <p>Don't have an acount? Please <a href="signup.php">Sign up</a></p>
      </div>
    </div>

  </form>
</div>


</body>
</html>