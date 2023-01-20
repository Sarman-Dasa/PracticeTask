<?php
    class MyData
    {
        public static $name = "Dasa Sarman";

        public static function Display()
        {
            echo "\nMy Name Is : ".self::$name;
        }
    }

    echo MyData ::$name;
    MyData ::Display();
?>