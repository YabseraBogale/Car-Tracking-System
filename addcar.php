<?php
include "includes/includes.inc.php";

$view=new View();
if($_SERVER['REQUEST_METHOD']==='POST'){
    $platenumber=$_POST['platenumber'];
    $carimage=$_POST['carimage'];
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["images"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    $check = getimagesize($_FILES["images"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }
    // Check file size
    if ($_FILES["images"]["size"] > 500000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
      // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["images"]["tmp_name"], $target_file)) {
            $view->AddCar($platenumber,$carimage);
        } else {
          echo "Sorry, there was an error uploading your file.";
        }
    }
    
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Car</title>
</head>
<body>
    <?php 
        $view->UserNavHtml();
    ?>
    <form action="" method="post">
        platenumber <input type="text" name="platenumber" id="" required>
        car image <input type="file" name="images" id="" required>
        <input type="submit" value="enter">        
    </form>    
</body>
</html>