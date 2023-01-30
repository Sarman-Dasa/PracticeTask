<?php
    include_once("Connction.php");

    $id = $_POST['id'];

    $query = "update todutbl set status = 0 where id = $id";

    mysqli_query($con,$query);
?>