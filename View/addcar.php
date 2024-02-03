<?php
    include "Database.php";
    if($_SERVER['REQUEST_METHOD']==="POST"){
        $driverid=$_POST['driverid'];
        $platenumber=$_POST['platenumber'];
        $filetype=['jpge','png','jepg'];
        $uploaddir='uploads/';
        $uploadfile = $uploaddir . basename($_FILES['image']['name']);
        $fileType=$_FILES['image']['type'];
        echo $fileType;


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
                    <input type="file" name="image" id="">
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