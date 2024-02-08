<?php
include "includes/includes.inc.php";
$view = new View();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>home</title>
</head>
<body>
    <?php 
        
        session_start();
        if(isset($_SESSION['username'])){
            $view->UserNavHtml();
        } else{
            $view->GuestNavHtml();
        }
    ?>
   <div class="body">
   <h4>What MTY Tracking System</h4>
    <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa, accusantium quidem incidunt illo neque reiciendis, omnis fuga excepturi facere quisquam iure minima voluptas placeat autem nesciunt! Officia et architecto culpa!
    </p>
   </div>
</body>
</html>