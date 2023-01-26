<?php
    $con = mysqli_connect('localhost','root','root','Assignment_1');

    if(mysqli_connect_error())
    {
        echo "<script>
            alert('Connection Failed..');
        </script>";
    }
?>