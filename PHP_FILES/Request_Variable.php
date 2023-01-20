<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Request Variable Example</title>
</head>
<body>
    <form action="<?php $_SERVER['PHP_SELF']?>" method="post">
        <table>
            <tr>
                <td>Employee Name</td>
                <td><input type="text" name="emp_name" id="Emp_name"></td>
            </tr>
            <tr>
                <td>Mobile Number</td>
                <td><input type="tel" name="mobile" id="mobile" pattern="[6-9]{2}[0-9]{5}[0-9]{3}"></td>
            </tr>
            <tr>
                <td><input type="submit" value="submit" name="submit"></td>
                <td><input type="reset" value="reset" name="reset"></td>
            </tr>
        </table>
    </form>

    <?php
        if($_SERVER["REQUEST_METHOD"] == "POST")
        {
            $name = $_REQUEST['emp_name'];
            if(empty($name))
            {
                echo "Please Enter Employee Name!!";
            }
            else
            {
                echo "Welcome ,".$name;
            }
        }
    ?>
</body>
</html>