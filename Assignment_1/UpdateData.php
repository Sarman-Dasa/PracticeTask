<?php
    include_once("Connction.php");
    if(isset($_POST['id']))
    {
        $id = $_POST['id'];
        $query = "select * from todutbl where id = $id";
        $result = mysqli_query($con, $query);
        $result_Data = array();
        $row = mysqli_fetch_assoc($result);
        $result_Data = $row;
        unlink($id);
        echo json_encode($result_Data);
    }
    else if(isset($_POST['editid'])){ 
        $id = $_POST['editid'];
        $title = $_POST['title'];
        $description = $_POST['description'];

        $query = "UPDATE todutbl SET title='$title',description='$description' WHERE id = $id";
        if(mysqli_query($con,$query))
        {
            echo $query;
        }
        else
        {
            return $query;
        }
}
?>