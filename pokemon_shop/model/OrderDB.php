<?php

namespace Model;

class OrderDB
{
    public $connection;

    public function __construct($connection)
    {
        $this->connection = $connection;
    }

    public function create($order)
    {
        $sql = "INSERT INTO `orders`( `id_customer`, `productCode`, `orderDate`, `quantity`) VALUES (? , ? , ? ,? )";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(1, $order->id_customer);
        $statement->bindParam(2, $order->productCode);
        $statement->bindParam(3, $order->orderDate);
        $statement->bindParam(4, $order->quantity);
        return $statement->execute();
    }

    public function getAll()
    {
        $sql = "SELECT orders.orderNumber, orders.id_customer,customers.name, orders.productCode,products.productName,orders.orderDate,orders.quantity FROM orders INNER JOIN products ON orders.productCode=products.productCode INNER JOIN customers ON customers.id_customer = orders.id_customer";
        $statement = $this->connection->prepare($sql);
        $statement->execute();
        $result = $statement->fetchAll();
        $orders = [];
        foreach ($result as $row) {
            $order = new Order($row['id_customer'], $row['productCode'],$row['orderDate'],$row['quantity'], $row['name'],$row['productName']);
            $order->orderNumber = $row['orderNumber'];
            $orders[] = $order;
        }
        return $orders;
    }

    public function get($id){
         $sql = "SELECT orders.orderNumber, orders.id_customer,customers.name, orders.productCode,products.productName,orders.orderDate,orders.quantity FROM orders INNER JOIN products ON orders.productCode=products.productCode AND orders.orderNumber = ? INNER JOIN customers ON customers.id_customer = orders.id_customer";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(1, $id);
        $statement->execute();
        $row = $statement->fetch();
        $order = new Order($row['id_customer'], $row['productCode'],$row['orderDate'],$row['quantity'], $row['name'],$row['productName']);
        $order->orderNumber = $row['orderNumber'];
        return $order;
    }
    
    public function update($id, $order){
        $sql = "UPDATE orders SET id_customer = ?, productCode = ?, orderDate = ?, quantity = ? WHERE orderNumber = ?";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(1, $order->id_customer);
        $statement->bindParam(2, $order->productCode);
        $statement->bindParam(3, $order->orderDate);
        $statement->bindParam(4, $order->quantity);
        $statement->bindParam(5, $id);
        return $statement->execute();
    }

    public function delete($id){
        // $sql = "DELETE FROM orders WHERE orders.orderNumber = ?";
        $sql = "DELETE FROM `orders` WHERE `orders`.`orderNumber` = ?";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(1, $id);
        return $statement->execute();
    }
}