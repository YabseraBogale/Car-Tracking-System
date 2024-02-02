<?php

include "Database.php";


$conn=new Database();
$result=$conn->CreateUser('Yabsera','Bogale','Abate',"d55a",91322161);
echo $result;



?>