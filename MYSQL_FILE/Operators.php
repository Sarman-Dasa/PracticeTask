<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php All Operator Example</title>
</head>
<body>
        <?php
        function breakcode()
        {
            echo "<br><br>";
        }

                //--------------------------------------Arithmentic---------------------------

                $num1 = 10;
                $num2 =  5;

                echo "************ Arithmentic Operation ************";
                breakcode();

                echo "Addition of $num1 + $num2 = ".($num1+$num2);
                breakcode();
                echo "Subtraction of $num1 - $num2 = ".($num1-$num2);
                breakcode();
                echo "Multiplication of $num1 * $num2 = ".($num1*$num2);
                breakcode();
                echo "Division of $num1 / $num2 = ".($num1/$num2);
                breakcode();
                echo "Modulus of $num1 % $num2 = ".($num1%$num2);
                breakcode();
                echo "Exponentiation of $num1 ** $num2 = ".($num1**$num2);
                breakcode();
                
                //******************* Assignment Operators ********************/

                echo "******************* Assignment Operators ********************";
                breakcode();
                $num1 = $num2;
                echo $num1;
                breakcode();
                echo "Addition " .$num1+= $num2;
                breakcode();
                echo "Subtraction ".$num1-=$num2;
                breakcode();
                echo "Multiplication ".$num1*=$num2;
                breakcode();
                echo "Division ".$num1/=$num2;
                breakcode();
                echo "Mudulus ".$num1*=$num2;
                breakcode();

                echo "******************* Comparison Operators ********************";

                breakcode();
                echo "$num1 and $num2 is same  ".var_dump($num1 !=$num2);
                breakcode();
                echo "$num1 and $num2 is same value and same datatype ".var_dump($num1 ===$num2);
                breakcode();
                echo "$num1 and $num2 is not Equal ".var_dump($num1 !=$num2);
                breakcode();
                echo "$num1 and $num2 is not Equal  ".var_dump($num1<>$num2);
                breakcode();
                echo "$num1 and $num2 is not Equal Data type or value ".var_dump($num1!==$num2);
                breakcode();
                echo "$num1 Greater than $num2  ".var_dump($num1>$num2);
                breakcode();
                echo "$num1 less than $num2  ".var_dump($num1<$num2);
                breakcode();
                echo "$num1 Greater than or equal to $num2  ".var_dump($num1>=$num2);
                breakcode();
                echo "$num1 is less than, equal to, or greater than $num2".var_dump($num1<=>$num2);
                breakcode();

                echo "************************* Increment / Decrement Operators *************************";
                breakcode();
                echo "Pre-increment :".++$num1;
                breakcode();
                echo "Post-inncrement :".$num1++;
                breakcode();
                echo "Pre-decrement :".--$num2;
                breakcode();
                echo "Post-decrement :".$num2--;
                breakcode();

                echo"*************************Logical Operators*************************";
                breakcode();
                var_dump($num1==27 and $num2==3);
                breakcode();
                var_dump($num1==27 or $num2==5);
                breakcode();
                var_dump($num1==27 xor $num2==4);
                breakcode();
                var_dump($num1==27 && $num2==3);
                breakcode();
                var_dump($num1==27 || $num2==3);
                breakcode();
                var_dump(!$num1);
                breakcode();

                echo "*************************String Operators*************************";
                breakcode();

                $sname = "Dasa";
                $lname = "Sarmman";

                echo $sname . $lname;
                breakcode();
                $sname .= $lname;
                echo $sname;
                breakcode();

                echo "************************* Array Operators *************************";
                breakcode();

                $arr = array("name"=>"Dasa","rollno"=>12);
                $arr1 = array("subject"=>"PHP","city"=>"Gandhinagar");
                print_r($arr+$arr1);
                breakcode();

                var_dump($arr == $arr1);
                breakcode();

                var_dump($arr === $arr1);
                breakcode();

                var_dump($arr != $arr1);
                breakcode();

                var_dump($arr <> $arr1);
                breakcode();

                var_dump($arr !== $arr1);
                breakcode();

                echo "************************* Conditional Assignment *************************";

                breakcode();
                echo $status = (empty($arr)) ? "Black Array" : "Array With Data";
                echo("<br>");

                breakcode();
                $data = "";
                echo $data ?? "Black"; // if value is null set "Black Data into data Variable"


                
        ?>
</body>
</html>