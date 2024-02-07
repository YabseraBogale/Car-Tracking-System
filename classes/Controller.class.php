<?php
class Controller extends Model{
    function login($username,$password){
        $result=$this->AdminSeeAllUser($username,$password);
        return $result;
        
    }
    }
    


?>