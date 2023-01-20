<?php
    interface operation1
    {
        function Addition($no1,$no2);
        function Substraction($no3,$no4);
    }

    interface operation2
    {
        function Multiplication($n1,$n2);
        function Devision($n3,$n4);
    }

    class Calculater implements operation1,operation2
    {
        public function Addition($no1, $no2)
        {
            echo "$no1 + $no2 = ".($no1 + $no2);
        }
        public function Substraction($no3, $no4)
        {
            echo "\n$no3 - $no3 = ".($no3 - $no4);
        }
        public function Multiplication($n1, $n2)
        {
            echo "\n$n1 * $n2 = ".($n1 * $n2);
        }
        public function Devision($n3, $n4)
        {
            echo "\n$n3 / $n4 = ".($n3 / $n4);
        }
    }
    $cal = new Calculater();
    $cal->Addition(10,20);
    $cal->Substraction(30,20);
    $cal->Multiplication(5,10);
    $cal->Devision(50,5);
?>