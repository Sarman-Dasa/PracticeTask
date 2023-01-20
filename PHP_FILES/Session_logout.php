<?php
    session_start();
    session_destroy();
    header('location: Session_Login.php');
?>