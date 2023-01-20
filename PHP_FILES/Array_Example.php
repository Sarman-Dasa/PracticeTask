<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Array Example</title>
</head>
<body>
    <?php
        //------------------------------------------------Indexed Array------------------------------------------------
        $cityname = array("Gandhinagar","Rajkot","Porbandar","Judagadh","Surat","Baroda");

        echo "I am From ".$cityname[2]. " City";
        echo "<br>number Of City is ". count($cityname);

        echo "<br><mark><b>Print Array using for loop</b></mark><br>";

        $citysize = count($cityname);

        for ($i=0; $i < $citysize; $i++) { 
            echo $cityname[$i] ."<br>";
        }
        
        //------------------------------------------------Associative Arrays------------------------------------------------

        $stationery = array("Pen"=>10,"Pencil"=>15,"Book"=>60,"Pad"=>100,"Eraser"=>5);

        echo "<br> Pencil Price is ".$stationery['Pencil'];

        echo "<br><mark><b>Print Array using foreach loop</b></mark><br>";
        foreach ($stationery as $key => $value) {
            echo "Key= " .$key . " Value= ". $value . "<br>";
        }

        echo "<br><mark><b>Print Array using foreach loop</b></mark><br>";
        foreach ($stationery as $key => $value) {
            echo $key . "=>". $value . "<br>";
        }

        //------------------------------------------------ Two-dimensional Arrays------------------------------------------------
        //stationery item Array to how many item is sold and on stock

        $stationery1 = array(
            array("pen",100,45), // itemname,stock,sold
            array("Pencil",50,40),
            array("Book",200,150),
            array("Pad",50,20),
            array("Eraser",30,15)
        );

        //print Data
        echo "<br><mark><b>Print Array in Formating Way</b></mark><br>";
        echo "<br><br>";
        echo $stationery1[0][0] . ": In stock :" . $stationery1[0][1] . ", sold ". $stationery1[0][2];
        echo "<br><br>";
        echo $stationery1[1][0] . ": In stock :" . $stationery1[1][1] . ", sold ". $stationery1[1][2];
        echo "<br><br>";
        echo $stationery1[2][0] . ": In stock :" . $stationery1[2][1] . ", sold ". $stationery1[2][2];
        echo "<br><br>";
        echo $stationery1[3][0] . ": In stock :" . $stationery1[3][1] . ", sold ". $stationery1[3][2];
        echo "<br><br>";
        echo $stationery1[4][0] . ": In stock :" . $stationery1[4][1] . ", sold ". $stationery1[4][2];


        echo "<br><mark><b>Print Array in Formating Way using for loop </b></mark><br>";
     
        $mainItem = count($stationery1);
        $subItem = count($stationery1[0]);

        for ($i=0; $i <$mainItem ; $i++) { 
            echo "<ul>";
                for ($j=0; $j <$subItem ; $j++) { 
                    echo "<li>" . $stationery1[$i][$j] ."</li>";
                }
            echo "</ul>";
        }
      //------------------------------------------------ Sorting Arrays ------------------------------------------------ 

      function printArray($arr)
      {
        $citysize = count($arr);

        for ($i=0; $i < $citysize; $i++) { 
            echo $arr[$i] .", ";
        }
      }

      function printarray2($stationery)
      {
        foreach ($stationery as $key => $value) {
            echo $key . "=>". $value . "<br>";
        }

      }
      //cityname Array sort 
      echo "<br><mark><b>Sort City Data Array </b></mark><br>";

      echo "<br><b>Before Sort</b><br>";
      printArray($cityname);
      
      sort($cityname);
      echo "<br><b>After Sort Accending Order</b><br>";
      printArray($cityname);
      
      echo "<br><b>After Sort Descending Order</b><br>";
      rsort($cityname);
      printArray($cityname);


      ////stationery Array sort 
      echo "<br><mark><b>Sort stationery Data Array Accending order </b></mark><br>";

      echo "<br><b>Before Sort</b><br>";
      printArray2($stationery);
      
      asort($stationery);
      echo "<br><b>After Sort Value wise</b><br>";
      printArray2($stationery);
      
      echo "<br><b>After Sort key Wise</b><br>";
      ksort($stationery);
      printArray2($stationery);

      echo "<br><mark><b>Sort stationery Data Array Descending order </b></mark><br>";

      echo "<br><b>Before Sort</b><br>";
      printArray2($stationery);
      
      arsort($stationery);
      echo "<br><b>After Sort Value wise</b><br>";
      printArray2($stationery);
      
      echo "<br><b>After Sort key Wise</b><br>";
      krsort($stationery);
      printArray2($stationery);


       


    ?>
</body>
</html>