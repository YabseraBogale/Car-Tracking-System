<?php

class View extends Controller{
    function loginform(){
        echo'
            <form action="" method="post">
                username <input type="text" name="username" id="" required>
                password <input type="password" name="password" id="" required>
                <input type="submit" value="login">
                <input type="reset" value="cancel">
            </form>
        ';
    }
    
    function login($username,$password){
        $result=$this->AdminSeeAllUser($username,$password);
        return $result->fetch_assoc();
        
    }
    function signup($firstname,$lastname,$username,$email,$password){
        $this->CreateUser($firstname,$lastname,$username,$email,$password);
        session_start();
        $_SESSION['username']=$username;
        header('location:index.php');
        exit;
    }
    function signupForm(){
        echo'
            <form action="" method="post">
                firstname <input type="text" name="firstname" id="" required>
                lastname <input type="text" name="lastname" id="" required>
                username <input type="text" name="username" id="" required>
                email <input type="email" name="email" id="" required>
                password <input type="password" name="password" id="" required>
                <input type="submit" value="enter">
                <input type="reset" value="clear">
            </form>
        ';

    }
    function GuestNavHtml(){
        echo'
            <nav>
                <a href="index.php">home</a>
                <a href="login.php">login</a>
                <a href="signup.php">Regisiter</a>
                <a href="about.php">about</a>
            </nav>
        ';
    }
    function UserNavHtml(){
        echo'
            <nav>
                <a href="index.php">home</a>
                <a href="logout.php">logout</a>
                <a href="addcar.php">Add Car</a>
                <a href="about.php">about</a>
            </nav>
        ';
    }
    
    
}


?>