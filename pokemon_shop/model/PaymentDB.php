<?php

namespace Model;

class PaymentDB
{
    public $connection;

    public function __construct($connection)
    {
        $this->connection = $connection;
    }

    public function getAll()
    {
        $sql = "SELECT orders.orderNumber , customers.name, orders.orderDate , products.price*orders.quantity AS 'payment' FROM `orders` 
        INNER JOIN products ON orders.productCode = products.productCode 
        INNER JOIN customers ON customers.id_customer = orders.id_customer";
        $statement = $this->connection->prepare($sql);
        $statement->execute();
        $result = $statement->fetchAll();
        $payments = [];
        foreach ($result as $row) {
            $payment = new Payment($row['orderNumber'], $row['name'],$row['orderDate'],$row['payment']);
            $payments[] = $payment;
        }
        return $payments;
    }
}