<?php
    class College
    {
        private $college_name; // no Access OutSide class
        private $city;

        public function __construct($college_name,$city)
        {
            echo "\nParent Contructor Calling...\n";
            $this->college_name = $college_name;
            $this->city = $city;
        }

        protected function Data_Print() // No Access outside but child Class also Access.
        {
            echo "\n\tCollege Data Prin\n";
            echo "College Name :".$this->college_name;
            echo "\nCollege City :".$this->city;
        }
    }

    class Student extends College
    {
    
        private $student_name;
        private $department_name;

        public function __construct($college_name,$city,$student_name,$department_name)
        {
            parent::__construct($college_name,$city,$student_name,$department_name); // Call Parent Contructor
            echo "\nChild Contructor Calling...\n";

           $this->student_name = $student_name;
           $this->department_name = $department_name;
       }

       public function data_print()
       {
            parent::Data_Print(); // call Parent class Method
            echo "\n\tStudent Data Prin\n";
            echo "Student Name :".$this->student_name;
            echo "\nDepartment Name :".$this->department_name;
       }
    }

    $stud = new Student("xyz","junaghdh","vijay","BCA");
    $stud->data_print();
    $clg = new College("abc","Rjk");
    //$clg->data_print(); You Can't Access This Method 
?>