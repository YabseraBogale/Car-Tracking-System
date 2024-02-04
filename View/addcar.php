<?php
    include "Database.php";
    if($_SERVER['REQUEST_METHOD']==="POST"){
        $connection=new Database();
        $driverid=$_POST['driverid'];
        $platenumber=$_POST['platenumber'];
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
              
              $connection->OpenConnection()->query("insert into Car(driverid,platenumber,carimage) values($driverid,'$platenumber','$target_file')");
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
    <link rel="stylesheet" href="css/addcar.css">
    <title>Add Car</title>
</head>
<body>
<nav>
        <a href="signout.php">Sign out</a>
    </nav>
    <form action="addcar.php" method="post" enctype="multipart/form-data">
        <table>
            <tr>
                <td>
                    Driver Id
                </td>
                <td>
                    <input type="number" name="driverid" id="">
                </td>
            </tr>
            <tr>
                <td>
                    plate number
                </td>
                <td>
                    <input type="text" name="platenumber" id="">
                </td>
            </tr>
            <tr>
                <td>
                    Car Image
                </td>
                <td>
                    <input type="file" name="images" id="">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" value="Enter">
                </td>
                <td>
                    <input type="reset" value="cancel">
                </td>
            </tr>
        </table>
    </form>
    <a href="car.php">back</a>
</body>
</html>