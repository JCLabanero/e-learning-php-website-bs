<?php
    session_start(); 
    if(isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
        //nothing
    } else {
        header('Location: ../index.php');
        exit;
    }
?>