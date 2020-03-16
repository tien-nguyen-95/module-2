<?php
    namespace Model;

    class ProductDB
    {
        public $connection;

        public function __construct($connection)
        {
            $this->connection = $connection;
        }

        public function create($product)
        {   
            $sql = "INSERT INTO `products`(`productName`, `width`, `height`, `material`, `image`, `price`, `origin`) 
            VALUES (?,?,?,?,?,?,?)";
            $statement = $this->connection->prepare($sql);
            $statement->bindParam(1, $product->productName);
            $statement->bindParam(2, $product->width);
            $statement->bindParam(3, $product->height);
            $statement->bindParam(4, $product->material);
            $statement->bindParam(5, $product->image);
            $statement->bindParam(6, $product->price);
            $statement->bindParam(7, $product->origin);
            return $statement->execute();
        }

        public function getAll()
        {
            $sql = "SELECT * FROM products";
            $statement = $this->connection->prepare($sql);
            $statement->execute();
            $result = $statement->fetchAll();
            $products = [];
            foreach ($result as $row) {
                $product = new Product($row['productName'], $row['width'], $row['height'],$row['material'], $row['image'], $row['price'] ,$row['origin']);
                $product->productCode = $row['productCode'];
                $products[] = $product;
            }
            return $products;
        }

        public function get($id){
            $sql = "SELECT * FROM products WHERE products.productCode = ?";
            $statement = $this->connection->prepare($sql);
            $statement->bindParam(1, $id);
            $statement->execute();
            $row = $statement->fetch();
            $product = new Product($row['productName'], $row['width'], $row['height'],$row['material'], $row['image'], $row['price'] ,$row['origin']);
            $product->productCode = $row['productCode'];
            return $product;
        }
        
        public function update($id, $product){
            if($product->image !=''){
                $sql = "UPDATE products SET productName = ?, width = ?, height = ?, material = ?, image = ?, price = ?, origin = ?WHERE productCode = ?";
                $statement = $this->connection->prepare($sql);
                $statement->bindParam(1, $product->productName);
                $statement->bindParam(2, $product->width);
                $statement->bindParam(3, $product->height);
                $statement->bindParam(4, $product->material);
                $statement->bindParam(5, $product->image);
                $statement->bindParam(6, $product->price);
                $statement->bindParam(7, $product->origin);
                $statement->bindParam(8, $id);
                return $statement->execute();
            }         
            else{
                $sql = "UPDATE products SET productName = ?, width = ?, height = ?, material = ?, price = ?, origin = ?WHERE productCode = ?";
                $statement = $this->connection->prepare($sql);
                $statement->bindParam(1, $product->productName);
                $statement->bindParam(2, $product->width);
                $statement->bindParam(3, $product->height);
                $statement->bindParam(4, $product->material);
                $statement->bindParam(5, $product->price);
                $statement->bindParam(6, $product->origin);
                $statement->bindParam(7, $id);
                return $statement->execute();
            }
        }

        public function delete($id){
        $sql = "DELETE FROM products WHERE products.productCode = ?";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(1, $id);
        return $statement->execute();
        }
    }