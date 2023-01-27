<?php
    include_once("Connction.php");
    $id = $_POST['id'];
    $title = $_POST['title'];
    $description = $_POST['description'];

    $query = "UPDATE TODU_TBL SET title='$title',description='$description' WHERE id = $id";
    if(mysqli_query($con,$query))
    {
        echo 1;
    }
    else
    {
        echo 0;
    }
?>