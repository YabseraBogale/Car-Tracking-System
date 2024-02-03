<?php 
include "Database.php";
session_start();
$connection=new Database();
$driverid=$_SESSION['phonenumber'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>See All Car</title>
</head>
<body>
    <table>
        <?php
            $result=$connection->OpenConnection()->query("Select * from Car where driverid=$driverid");
            while($row=$result->fetch_assoc()){
                    ?>
                <tr>
                    <td>
                        <img src="<?php echo $row['carimage']; ?>" alt="carimage">
                    </td>
                    <td>
                        <?php echo $row['driverid'];?>
                    </td>
                    <td>
                        <?php echo $row['platenumber'];?>
                    </td>
                </tr>    
                <?php
            }
        ?>
    </table>
    <a href="car.php">back</a>
</body>
</html>