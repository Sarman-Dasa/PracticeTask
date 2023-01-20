<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Globals Variable Example</title>
</head>
<body>
    <?php
        //-----------------------------// NORMAR EXAMPLE //-----------------------------//

        $name = "Vijay";
        function test()
        {
            $name = "Rahul";
            echo "Local Variable Value :".$name; // print Local Variable value : Rahul
            echo "<br><br>";
            echo "Global Variable Value :". $GLOBALS['name'];
        }

        test();

         //-----------------------------// EXAMPLE - 2 //-----------------------------//

         //Use Local Variable As Global

         function test2()
         {
            echo "<br><br>";
            $city = "Porbandar";
            echo "City Name is :" . $city;
            echo "<br><br>";
            echo "Capital Of Gujrat City Name is:" . $GLOBALS['city'];
         }
         
         $city = "Gandhinagar";
         test2();


          //-----------------------------// EXAMPLE - 3 //-----------------------------//

         //Copy Global Variable Value
         echo "<br><br>";
         $globals = $GLOBALS;
         $globals['name'] = "Bharat";

         var_dump($name);
         echo "<br><br>";
         foreach ($globals as $key => $value) {
            $GLOBALS[$key]= $value;
         }
         var_dump($GLOBALS);
    ?>
</body>
</html>