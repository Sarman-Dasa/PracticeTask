<?php
    include_once('Connction.php');

    $id = $_POST['id'];

    $query = "delete from TODU_TBL where id = $id";

    if(mysqli_query($con,$query))
    {
       echo 1;
    }
    else
    {
        echo 0;
    }
?>