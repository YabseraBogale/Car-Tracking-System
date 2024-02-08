<?php
session_start();
$view = new View();
$platenumber=$_Session['platenumber'];
$view->DeleteCar($platenumber);
header('location:see.php');
exit;


?>