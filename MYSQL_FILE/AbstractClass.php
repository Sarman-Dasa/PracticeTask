<?php
    abstract class Personal_Info
    {
        public $name;
        public $department;
        public $mobile;
        public $semester;
        public $rollNo;

        public function Personal_Info($name,$department,$mobile,$semester,$rollNo)
        {
            $this->name = $name;
            $this->department = $department;
            $this->mobile = $mobile;
            $this->semester = $semester;
            $this->rollNo = $rollNo;
        }
    }

    class Fees_Department extends Personal_Info
    {
        public $fees_price;
        public $fee_status;
        public $pay_fees;
        public $remining_Fees;

        public function __construct($name,$department,$mobile,$semester,$rollNo,$fees_price,$fee_status,$pay_fees,$remining_Fees)
        {
            parent::Personal_Info($name,$department,$mobile,$semester,$rollNo);
            $this->fees_price = $fees_price;
            $this->fee_status = $fee_status;
            $this->pay_fees = $pay_fees;
            $this->remining_Fees = $remining_Fees;
        }

        public function Show_All_Data()
        {
            echo "\nStudent Name :".$this->name;
            echo "\nStudent Department :".$this->department;
            echo "\nStudent Mobile :".$this->mobile;
            echo "\nStudent Semester :".$this->semester;
            echo "\nStudent rollNo :".$this->rollNo;
            echo "\nStudent Fees Price :".$this->fees_price;
            echo "\nStudent Fees Status :".$this->fee_status;
            echo "\nStudent Pay Fees :".$this->pay_fees;
            echo "\nStudent Remining Fees :".$this->remining_Fees;

        }
    }
    $name = "Vijay";
    $department = "BCA";
    $mobile = "8967564534";
    $semester = "3";
    $rollNo = "12";
    $fees_price = "11000";
    $fee_status = "half Pay";
    $pay_fees = "5500";
    $remining_Fees = "5500";
    $fees = new Fees_Department($name,$department,$mobile,$semester,$rollNo,$fees_price,$fee_status,$pay_fees,$remining_Fees);
    $fees->Show_All_Data();

?>