<?php

    include_once("Connction.php");
    // if(isset($_POST['save']))
    // {
        $title = $_POST['title'];
        $description = $_POST['description'];
       // echo "$title"." $description";

       $query = "insert into TODU_TBL values(null,'$title','$description')";
       if(mysqli_query($con,$query))
       {
        
       }
    //}
?>