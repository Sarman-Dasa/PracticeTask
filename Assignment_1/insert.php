<?php

    include_once("Connction.php");
    // if(isset($_POST['save']))
    // {
        $title = $_POST['title'];
        $description = $_POST['description'];
       // echo "$title"." $description";

       $query = "insert into todutbl values(null,'$title','$description')";
       if(mysqli_query($con,$query))
       {
           echo 1;
       }
       else
       {
           echo 0;
       }
    //}
?>