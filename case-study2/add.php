<?php
     if(isset($_POST['submitProduct'])){
        try {
            $pdo = new PDO('mysql:host=127.0.0.1:3306;dbname=casestudydb;charset=utf8', 'root', '', array(PDO::ATTR_EMULATE_PREPARES => false, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        $name = $_POST['iName'];
        $width = $_POST['iWidth'];
        $height = $_POST['iHeight'];
        $material = $_POST['iMaterial'];
        $description = $_POST['iDescription'];
        $price = $_POST['iPrice'];
        
        $statement = $pdo->prepare("INSERT INTO `products`(`productName`, `width`, `height`,`material`,`description`,`price`) VALUES (?,?,?,?,?,?)");
        $statement->bindParam(1, $name);
        $statement->bindParam(2, $width);
        $statement->bindParam(3, $height);
        $statement->bindParam(4, $material);
        $statement->bindParam(5, $description);
        $statement->bindParam(6, $price);
        $statement->execute();
        require 'index.php';
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
    ?>