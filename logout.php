<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>logging out</title>
</head>
<body>
    <?php 
        session_start();
        unset($_SESSION['username']);
        session_destroy();
        header('location:index.php');
        exit;
        
    ?>
</body>
</html>