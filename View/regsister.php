<?php
include "Database.php";
session_start();

if($_SERVER["REQUEST_METHOD"]==="POST"){
    $connect=new Database();
    $firstname=$_POST['firstname'];
    $middlename=$_POST['middlename'];
    $lastname=$_POST['lastname'];
    $phonenumber=$_POST['phonenumber'];
    $password=$_POST['password'];
    $result=$connect->CreateUser($firstname,$lastname,$middlename,$password,$phonenumber);
    if($result=="inserted"){
        $_SERVER["logged"]=true;
        $_SESSION['phonenumber']=$phonenumber;
        header('location:car.php');
        exit;
    } else{
        echo $result;
    }
   
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Regsister</title>
</head>
<body>
<nav>
        <a href="home.php">home</a>
        <a href="login.php">login</a>
        <a href="about.php">about</a>
        <a href="regsister.php">Register</a>
    </nav>
    <form action="./regsister.php" method="POST">
        <table>
            <tr>
                <td>
                    First name
                </td>
                <td>
                    <input type="text" name="firstname" id="">
                </td>
            </tr>
            <tr>
                <td>
                    Middle name
                </td>
                <td>
                    <input type="text" name="middlename" id="">
                </td>
            </tr>
            <tr>
                <td>
                    Last name
                </td>
                <td>
                    <input type="text" name="lastname" id="">
                </td>
            </tr>
            <tr>
                <td>
                    Phonenumber
                </td>
                <td>
                    <input type="tel" name="phonenumber" id="">
                </td>
            </tr>
            <tr>
                <td>
                    password
                </td>
                <td>
                    <input type="password" name="password" id="">
                </td>
            </tr>
            <tr>
                <td>
                    re password
                </td>
                <td>
                    <input type="password" name="middlename" id="">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" value="Register">
                </td>
                <td>
                    <input type="reset" value="Cancel">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>