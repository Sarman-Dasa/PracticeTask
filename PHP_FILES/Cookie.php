<?php
    $cookie_name = "User";
    $cookie_value = "dasa";
    setcookie($cookie_name,$cookie_value,time()+60,"/"); // time()+60 means cookie available only one minute after automatically destroy.
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookie Example</title>
</head>
<body>
    <?php
        if(count($_COOKIE) > 0) {
            echo "Cookies are enabled.<br>";
          } else {
            echo "Cookies are disabled.<br>";
          }
        if(!isset($_COOKIE[$cookie_name]))
        {
            echo "Cookie Name '". $cookie_name ."' is not set!";
        }
        else
        {
            echo "Cookie Name '". $cookie_name ."' is set!<br>";
            echo "Value is : ".$_COOKIE[$cookie_name] . "<br>";
            echo count($_COOKIE);
            var_dump($_COOKIE);
        }

    ?>
</body>
</html>