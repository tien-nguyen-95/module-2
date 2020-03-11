<?php
    require "DBConnection.php";
    require "ProductDB.php";
    require "Product.php";
    require "../controller/ProductController.php";
    use Controller\ProductController;
    use Model\ProductDB;
    $controlProducts = new ProductController();
    $productss = $controlProducts->productDB->getAll();
?>