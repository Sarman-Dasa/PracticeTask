<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Server Variable Example</title>
</head>
<body>
    <form action="#" method="post">
        <table>
            <tr>
                <td><input type="text" name="emp_name" id="emp_name" placeholder="Enter Employee Name"> </td>
            </tr>
            <tr>
                <td><input type="submit" value="Submit" name="submit"></td>
            </tr>
        </table>
    </form>
    <?php
        $method = $_SERVER['REQUEST_METHOD'];
        echo "Form Method is :".$method;
        echo "<br>";
        echo $_SERVER['PHP_SELF']; // Display filename of the currently executing script
        echo "<br>";
        echo $_SERVER['SERVER_NAME']; // name of the host server
        echo "<br>";
        echo $_SERVER['HTTP_HOST']; // Host header from the current request
        echo "<br>";
        echo $_SERVER['HTTP_USER_AGENT'];
        echo "<br>";
        echo $_SERVER['SCRIPT_NAME']; // path of the current script
        echo "<br>";
        echo $_SERVER['SERVER_SOFTWARE']; // server identification string 
        echo "<br>";
        echo $_SERVER['QUERY_STRING'] ;// query string if the page is accessed via a query string
        echo "<br>";
    ?>
</body>
</html>