<?php
    $username = 'admin';
    $password = 'admin';
    session_start();
    if(isset($_SESSION['login'])){
       header('location:../view/product/product.php');
    }
    else
    {
        if($_POST['username'] == $username && $_POST['password'] == $password){
            $_SESSION['login'] = $username;
            header('Location:../view/product/product.php');
        }
        else{
            header('Location:login.php');
        }
    }
    ?>