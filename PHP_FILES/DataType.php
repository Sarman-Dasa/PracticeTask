<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Type Example</title>
</head>
<body>
    <?php
       class Mydata{
        public $myname = "Dasa Sarman"; // String
        public $sem = 4; // Integer
        public $per = 84.45; // Float (Double)
        public $subject = array("Php","Laraver","Python","Java"); // Array
        public $pass = true;

        public function __construct()
        {
            echo "My name is $this->myname i am in $this->sem<sup>th</sup> my 3<sup>rd</sup> sem percentage is $this->per currenty work on ".$this->subject[0];
        } 
       }

       $my = new Mydata();
    ?>
</body>
</html>