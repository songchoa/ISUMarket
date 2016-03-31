<?php
session_start();

$target_dir = "../uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
       // echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
        // echo '<script>';
        // echo 'alert("good")';
        // echo '</script>';

        include('connectDB.php');

        $title = $_POST["title"];
        $intro = $_POST["intro"];
        $price = $_POST["price"];
        $picture = $_FILES['fileToUpload']['name'];
        $contact = $_POST["contact"];
        $table = $_SESSION['recent'];

        $sql = "INSERT INTO " . $table . "(title,intro,picture,price,contact) VALUES ( '$title','$intro','$picture','$price','$contact')";
    
        if ($dbconn->query($sql) === TRUE) {
            $dbconn->close();
          header('Location: http://localhost/www/ISUMarket/php/' .$table.'.php');
        } else {
            echo "Error: " . $dbconn->connect_error;
            $dbconn->close();
        }

    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}



?>