<?php
    namespace Model;

    class CustomerDB
    {
        public $connection;

        public function __construct($connection)
        {
            $this->connection = $connection;
        }

        public function create($customer)
        {
            $sql = "INSERT INTO `customers`(`name`, `phone`, `email`, `address`) 
            VALUES (?,?,?,?)";
            $statement = $this->connection->prepare($sql);
            $statement->bindParam(1, $customer->name);
            $statement->bindParam(2, $customer->phone);
            $statement->bindParam(3, $customer->email);
            $statement->bindParam(4, $customer->address);
            return $statement->execute();
        }

        public function getAll()
        {
            $sql = "SELECT * FROM customers";
            $statement = $this->connection->prepare($sql);
            $statement->execute();
            $result = $statement->fetchAll();
            $customers = [];
            foreach ($result as $row) {
                $customer = new Customer($row['name'], $row['phone'], $row['email'],$row['address']);
                $customer->id_customer = $row['id_customer'];
                $customers[] = $customer;
            }
            return $customers;
        }

        public function get($id){
            $sql = "SELECT * FROM customers WHERE customers.id_customer = ?";
            $statement = $this->connection->prepare($sql);
            $statement->bindParam(1, $id);
            $statement->execute();
            $row = $statement->fetch();
            $customer = new Customer($row['name'], $row['phone'], $row['email'],$row['address']);
            $customer->id_customer = $row['id_customer'];
            return $customer;
        }
        
        public function update($id, $customer){
            $sql = "UPDATE customers SET name = ?, phone = ?, email = ?, address = ? WHERE id_customer = ?";
            $statement = $this->connection->prepare($sql);
            $statement->bindParam(1, $customer->name);
            $statement->bindParam(2, $customer->phone);
            $statement->bindParam(3, $customer->email);
            $statement->bindParam(4, $customer->address);
            $statement->bindParam(5, $id);
            return $statement->execute();
        }

        public function delete($id){
        $sql = "DELETE FROM customers WHERE customers.id_customer = ?";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(1, $id);
        return $statement->execute();
        }
    }