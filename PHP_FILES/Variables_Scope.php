<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables Scope Example</title>
</head>
<body>
    <?php  
        $name = "Vijay";// Global variable
        $sname = "sharma";
        function local_var()
        {
            echo "<b>Local Variable Output :</b><br>";
            $name = "Rahul"; // inside function local variable high priority
            echo "My Name is :" .$name;
        }

        function global_var()
        {
            echo "<br><b>Global Variable Output inside function :</b><br>";
            global $name; // Access Global variable inside function use global keyword before variable
            echo "My Name is :" .$name;
        }

        function print_Full_Name()
        {
            $name = $GLOBALS['sname'] ." ".$GLOBALS['name'];
            echo "<br>Full Name :".$name; 
        }

        function static_var()
        {
            static $num1 =4;
            $num2 = 6;

            $num1++;
            $num2++;
            echo "<br><b>static Variable Output :</b><br>";
            echo "Static Variable :".$num1;
            echo "<br>non - Static Variable :".$num2;
        }

        local_var();
        global_var();
        echo "<br>Access Outside Function Global Variable :".$name;

        print_Full_Name();

        static_var();
        static_var();
    ?>
</body>
</html>