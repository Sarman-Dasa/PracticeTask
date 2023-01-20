<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login page</title>
</head>
<body>
    <form action="Session_Login.php" method="post">
        <table border="2" align="center">
            <tr>
                <th colspan="2">Login page</th>
            </tr>
            <tr>
                <td>User name</td>
                <td><input type="text" name="user_name" id="user_name"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="password" id="password"></td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <input type="submit" value="login" name="submit">
                </td>
            </tr>
        </table>
    </form>

    <?php
    if(isset($_POST['submit'])){
        $_SESSION['user_name'] = $_REQUEST['user_name'];
        echo "done";
        header('location: Session_WelcomePage.php');
    }
    ?>
</body>
</html>