<?php
   try{
        error_reporting(0);
        $con = mysqli_connect('localhost','root','root','practicetask');
        if(mysqli_connect_error())
        {
            throw new Exception('Connection Failed..');
        }
   }
   catch(Exception $e)
   {
     echo $e->getMessage();
   }
?>