<?php
    session_start();
    if(isset($_SESSION['login'])){
        $_SESSION = array();
        session_destroy();
        header("location:../index.php");
    }
    else
    {
        header("location:../index.php");
    }
?>