<?php
    session_start();
    if ($_SESSION['user']['role'] != 1){
        header("location: ../homepage.php");
    }
?>