<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String Function Example </title>
</head>
<body>
    <?php
        $str = " my Name is Dasa ";


        echo "Total length :".strlen($str);
        echo "<br>";
        echo "<br>";
        echo "Total World :".str_word_count($str);
        echo "<br>";
        echo "<br>";
        echo "Reverse String :".strrev($str);
        echo "<br>";
        echo "<br>";
        echo "Dasa at position :". strpos($str,"Dasa");
        echo "<br>";
        echo "<br>";
        echo "Total World : ".str_word_count($str);
        echo "<br>";
        echo "<br>";
        echo "Replace String World : ".str_replace("Dasa","<b>Sarman</b>",$str);

        $newstr = explode(" ",$str);
        echo "<br>";
        echo "<br> Convert String into Array :";
        print_r($newstr);

        echo "<br>";
        echo "<br> convert Array into String : ";
        echo implode(" ",$newstr);
    
        echo "<br>";
        echo "<br> Remove Whitespace :";
        echo trim($str) ." Total legth after trim use is ".strlen(trim($str));

        echo "<br>"; echo "<br>";
        echo strtolower($str);

        echo "<br>"; echo "<br>";
        echo strtoupper($str);


        $str1 = "my name is sarman";
        echo "<br>"; echo "<br>";
        echo ucfirst($str1);

        echo "<br>"; echo "<br>";
        echo lcfirst($str1);

        echo "<br>"; echo "<br>";
        echo ucwords($str1);
    ?>
</body>
</html>