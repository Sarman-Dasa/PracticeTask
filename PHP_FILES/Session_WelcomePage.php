<?php session_start() ?>
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Page</title>
</head>
<body>
    <?php
        if(isset($_SESSION['user_name']))
        {
            echo "Welcome, " . $_SESSION['user_name'];
            echo "<br>";
            echo " <a href='Session_logout.php'>LogOut</a>";
        }
        else
        {
            header('location: Session_Login.php');
        }
    
    ?>
   
</body>
</html>