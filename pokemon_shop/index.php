<?php
    require "model/DBConnection.php";
    require "model/ProductDB.php";
    require "model/Product.php";
    require "controller/ProductController.php";
    use Controller\ProductController;
    $controlProducts = new ProductController();
    $productss = $controlProducts->productDB->getAll();
    require 'index.view.php';  
    
?>  