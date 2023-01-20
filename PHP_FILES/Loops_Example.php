<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops Example</title>
</head>
<body>
    <?php
        echo "****  While Loop  ****<br>";
        $num = 0;
        while($num<5)
        {
            echo $num ." ";
            $num++;
        }

        echo "<br>****  While Loop-2  ****<br>";
        $num = 5;
        while($num>0)
        {
            echo $num ." ";
            $num--;
        }

        echo "<br>**** Do..While Loop  ****<br>";
        $num = 5;
        do
        {
            echo $num ; //Atlest one time execute this code if condition true or false
        }while($num>5);

        echo "<br>**** Do..While Loop-2  ****<br>";
        $num = 0;
        do
        {
            echo $num. " "; //Atlest one time execute this code if condition true or false
            $num++;
        }while($num<5);

        echo "<br>**** For Loop  ****<br>";
        for($num=0;$num<10;$num++)
        {
            echo $num ." ";
        }

        echo "<br>**** For Loop-2  ****<br>";
        for($num=0;$num<10;$num+=2)
        {
            echo $num ." ";
        }

        echo "<br>**** For Loop-2 with Break and Continue ****<br>";
        for($num=0;$num<10;$num++)
        {
            if($num==6) // if $num == 4 for loop is terminate
                break;
            else if($num == 4) // num == 4 for loop skip the interation 
                continue;
            echo $num ." ";
        }

        echo "<br>**** Foreach loop  ****<br>";
        $arr = array("Apple","baanana","Olive","Papaya","Mango"); //print using Foreach loop

        foreach($arr as $data)
        {
            echo $data ."<br>";
        }
    ?>
</body>
</html>