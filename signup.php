<?php 
 include 'includes/includes.inc.php';
    $view = new View();
    if($_SERVER['REQUEST_METHOD']==='POST'){
        $firstname=$_POST['firstname'];
        $lastname=$_POST['lastname'];
        $username=$_POST['username'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        $view->signup($firstname,$lastname,$username,$email,$password);
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sign up</title>
</head>
<body>
    <?php 
        $view->NavHtml();
        $view->signupForm();
    ?>
</body>
</html>