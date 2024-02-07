<?php
class Controller extends Model{
    function Login($username,$password){
      
        $result=$this->AdminSeeAllUser($username,$password);
        return $result;
        
    }
    }
    


?>