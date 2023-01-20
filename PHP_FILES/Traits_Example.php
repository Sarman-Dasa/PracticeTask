<?php
    trait test{
        public function hello()
        {
            echo "\nSayHello from test";
        }
    }
    trait test2
    {
        public function hello()
        {
            echo "\nSayhii from test1";
        }
    }
    class MyClass
    {
        use test;
    }

    class myClass2
    {
        use test,test2
        {
            test2::hello insteadOf test;
            test::hello as newhello;
        }
    }

    $obj = new MyClass();
    $obj->hello();


    $obj = new MyClass2();
    $obj->hello();
    $obj->newhello();
?>