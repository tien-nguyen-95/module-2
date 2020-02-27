<?php
    require "model/DBConnection.php";
    require "model/ProductDB.php";
    require "model/Product.php";
    require "controller/ProductController.php";
    use Controller\ProductController;
    $controlProducts = new ProductController();
    $productss = $controlProducts->productDB->getAll();
    require 'index.view.php';   
    if(isset($_POST['login'])){
        echo '<meta http-equiv="refresh" content="0;url=view/product/product.php">';
        //header('location:view/login/login.php');
    }
?>  