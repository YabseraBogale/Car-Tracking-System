<?php
class Controller extends Model{
    function login($username,$password){
        $result=$this->AdminSeeAllUser();
        while($row=$result->fetch_assoc()){
            if($row['username']==$username && $row['password']==password_hash($password,PASSWORD_DEFAULT)){
                session_start();
                $_SESSION['username']=$username;
                header('location:index.php');
                exit;
            }
        }
    }
}

?>