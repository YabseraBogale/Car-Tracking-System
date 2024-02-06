<?php

class View extends Model{
    function loginform(){
        echo'
            <form action="" method="post">
                username <input type="text" name="username" id="">
                password <input type="text" name="password" id="">
                <input type="submit" value="login">
                <input type="reset" value="cancel">
            </form>
        ';
    }
    function login($username,$paasword){
        $result=$this->login($username,$paasword);
    }
    function signupForm($firstname,$lastname,$username,$email,$password){


    }
}


?>