<?php
include "includes/includes.inc.php";
session_start();
$view=new View();
$username=$_SESSION['username'];
$userdata=$view->GetCar($username);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>See Cars</title>
</head>
<body>
    <?php 
        $view->UserNavHtml();
    ?>
    <?php 
        while($row=$userdata->fetch_assoc()){
            ?>
                <div class="info">
                    <?php 
                        $_SESSION['platenumber']=row['platenumber'];
                    ?>
                    <img src="<?php $row['carimage']; ?>" alt="">
                    <p>platenumber: <?php $row['platenumber'];?></p>
                    <a href="removecar.php">Remove</a>
                </div>
            <?php
        }
    
    ?>
</body>
</html>