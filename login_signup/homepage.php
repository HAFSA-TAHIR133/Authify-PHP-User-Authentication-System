<?php

   session_start();
   include("connect.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
</head>
<body>

    <div style="text-align:center; padding-top:15%;">
    <p style="font-size:50px; font-weight: bold;">
        HELLO <?php echo isset($_SESSION["UserName"]) ? $_SESSION["UserName"] : "Guest"; ?>
    </p>
    <a href="logout.php" class="btn btn-danger">Logout</a>
</div>
    
</body>
</html>