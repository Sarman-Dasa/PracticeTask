<?php  declare(strict_types=1); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Define Function</title>
</head>
<body>
    <?php

        function myName() // Simple Function 
        {
            echo "My Name is Dasa";
        }

      
        function carsName($carname) // with Paramenter Function
        {
            echo "<br>Car Name is :".$carname;
        }

        function addition( $a,$b) : float
        {
            return $a+$b;
        }

        function cityData($cityname = "Gandhinagar")
        {
           if((strlen($cityname))==11)
                echo "<br><b>This Is Default Argument Value :</b>".$cityname;
            else
                echo "<br>City Name is :".$cityname;
        }

        function callByRefence(&$name)
        {
            return $name ." Dasa";
        }

        myName();
        echo "<br><br> With Paramenter Function";
        carsName("Thar");
        carsName("BMW");
        carsName("Creta");
        carsName("Honda-City");
        echo "<br><br> With Paramenter with return Function";
        // echo "<br>".addition(10,"25"); not work if you declear a stricat_type 
        echo "<br>".addition(10.7,25);

        echo "<br>Default Aragument Function";
        cityData("Rajkot");
        cityData("Porbandar");
        cityData();
        cityData("Surat");

        echo "<br> Passing Arguments by Reference";
        $name = "Sarman";
        echo "<br>".callByRefence($name);

    ?>
</body>
</html>