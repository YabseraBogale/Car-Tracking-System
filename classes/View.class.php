<?php

class View extends Controller{
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
        $this->login($username,$paasword);
        
    }
    function signup($firstname,$lastname,$username,$email,$password){
        $this->CreateUser($firstname,$lastname,$username,$email,$password);
    }
    function signupForm(){
        echo'
            <form action="" method="post">
                firstname <input type="text" name="firstname" id="" >
                lastname <input type="text" name="lastname" id="" >
                username <input type="text" name="username" id="">
                email <input type="email" name="email" id="" >
                password <input type="password" name="password" id="">
                <input type="submit" value="enter">
                <input type="reset" value="clear">
            </form>
        ';

    }
}


?>