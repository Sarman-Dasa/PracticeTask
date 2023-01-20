<?php
    class Employee1
    {
        public $name;
        public $age;

        public function show()
        {
            echo "Employee Name :".$this->name;
            echo "\nEmployee Age :".$this->age;
        }
    }

    $emp = new Employee1();
    $emp->name = "Dasa Sarman";
    $emp->age = 22;
    $emp->show();
?>