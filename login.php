<?php 
include 'includes/includes.inc.php';
$view =new View();
if($_SERVER['REQUEST_METHOD']==='POST'){
    $username=$_POST['username'];
    $password=$_POST['password'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>
    <?php 
        $view->loginform();
    ?>
    
</body>
</html>