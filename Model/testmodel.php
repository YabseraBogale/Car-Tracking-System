<?php

include "Database.php";


$conn=new Database();
$result=$conn->CreateUser('Yabsera','Bogale','Abate',9201161,"dsa");
echo $result;
?>