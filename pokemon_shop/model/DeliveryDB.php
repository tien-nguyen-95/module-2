<?php
    namespace Model;

    class DeliveryDB
    {
        public $connection;

        public function __construct($connection)
        {
            $this->connection = $connection;
        }

        public function create($delivery)
        {
            $sql = "INSERT INTO `delivery`(`orderNumber`, `id_shiper`, `requiredDate`, `status`) 
            VALUES (?,?,?,?)";
            $statement = $this->connection->prepare($sql);
            $statement->bindParam(1, $delivery->orderNumber);
            $statement->bindParam(2, $delivery->id_shiper);
            $statement->bindParam(3, $delivery->requiredDate);
            $statement->bindParam(4, $delivery->status);
            return $statement->execute();
        }

        public function getAll()
        {
            $sql = "SELECT * FROM delivery";
            $statement = $this->connection->prepare($sql);
            $statement->execute();
            $result = $statement->fetchAll();
            $deliverys = [];
            foreach ($result as $row) {
                $delivery = new Delivery($row['id_shiper'],$row['orderNumber'] , $row['requiredDate'],$row['status']);
                $delivery->id_delivery = $row['id_delivery'];
                $deliverys[] = $delivery;
            }
            return $deliverys;
        }

        public function get($id){
            $sql = "SELECT * FROM delivery WHERE delivery.id_delivery = ?";
            $statement = $this->connection->prepare($sql);
            $statement->bindParam(1, $id);
            $statement->execute();
            $row = $statement->fetch();
            $delivery = new Delivery($row['id_shiper'],$row['orderNumber'] , $row['requiredDate'],$row['status']);
            $delivery->id_delivery = $row['id_delivery'];
            return $delivery;
        }
        
        public function update($id, $delivery){
            $sql = "UPDATE delivery SET orderNumber = ?, id_shiper = ?, requiredDate = ?, status = ? WHERE id_delivery = ?";
            $statement = $this->connection->prepare($sql);
            $statement->bindParam(1, $delivery->orderNumber);
            $statement->bindParam(2, $delivery->id_shiper);
            $statement->bindParam(3, $delivery->requiredDate);
            $statement->bindParam(4, $delivery->status);
            $statement->bindParam(5, $id);
            return $statement->execute();
        }

        public function delete($id){
            $sql = "DELETE FROM delivery WHERE delivery.id_delivery = ?";
            $statement = $this->connection->prepare($sql);
            $statement->bindParam(1, $id);
            return $statement->execute();
        }
    }