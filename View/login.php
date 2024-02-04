<?php
include "Database.php";
if($_SERVER['REQUEST_METHOD']==="POST"){
    $connection = new Database();
    $password=password_hash($_POST['password']);
    $phonenumber=$_POST['phonenumber'];
    $result=$connection->OpenConnection()->query("select * from User");
    while($row=$result->fetch_assoc()){
        if($row['phonenumber']===$phonenumber && $row['password']===$password){
            $_SESSION['phonenumber']=$phonenumber;
            $_SESSION['logged']=true;
            header('location:car.php');
            exit;
        }
    }
    echo "please Enter the right phonenumber and password <br>";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <title>Login</title>
</head>
<body>
<nav>
        <a href="home.php">home</a>
        <a href="login.php">login</a>
        <a href="about.php">about</a>
        <a href="regsister.php">Register</a>
    </nav>
    <form action="car.php" method="post">
        <table>
            <tr>
                <td>
                    phonenumber
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
                    <input type="submit" value="Enter">
                </td>
                <td>
                    <input type="reset" value="cancel">
                </td>
            </tr>
        </table>
    </form>
    
    <h4>
        <a class=".sign" href="regsister.php">Sign up</a>
    </h4>
</body>
</html>