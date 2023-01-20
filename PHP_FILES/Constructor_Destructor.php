<?php
    class Employee
    {
        public $name;
        public $salary;
        public $position;

        function __construct($name,$salary,$position)
        {
            $this->name = $name;
            $this->salary = $salary;
            $this->position = $position;
        }

        public function show_Data()
        {
            echo "Employee Name :".$this->name;
            echo "\nEmployee Salary :".$this->salary;
            echo "\nEmployee Position :".$this->position;
        }
        function __destruct()
        {
            echo "\n Destroying ".$this->name . " Data..";
        }
    }

    $emp = new Employee("Rahul",45000,"php devaloper");
    $emp1 = new Employee("Vijay",50000,"laravel devaloper");
    $emp->show_Data();
    echo "\n";
    $emp1->show_Data();
?>