<?php

include "Database.php";


$conn=new Database();
$result=$conn->CreateUser('Yabsera','Bogale','Abate',"dsa",9201161);
echo $result;



?>