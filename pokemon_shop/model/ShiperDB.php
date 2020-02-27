<?php
    namespace Model;

    class ShiperDB
    {
        public $connection;

        public function __construct($connection)
        {
            $this->connection = $connection;
        }

        public function create($shiper)
        {
            $sql = "INSERT INTO `shipers`( `name`, `birthday`, `phone`, `email`, `timework`) 
            VALUES (?,?,?,?,?)";
            $statement = $this->connection->prepare($sql);
            $statement->bindParam(1, $shiper->name);
            $statement->bindParam(2, $shiper->birthday);
            $statement->bindParam(3, $shiper->phone);
            $statement->bindParam(4, $shiper->email);
            $statement->bindParam(5, $shiper->timework);
            return $statement->execute();
        }

        public function getAll()
        {
            $sql = "SELECT * FROM shipers";
            $statement = $this->connection->prepare($sql);
            $statement->execute();
            $result = $statement->fetchAll();
            $shipers = [];
            foreach ($result as $row) {
                $shiper = new Shiper($row['name'], $row['birthday'], $row['phone'],$row['email'], $row['timework']);
                $shiper->id_shiper = $row['id_shiper'];
                $shipers[] = $shiper;
            }
            return $shipers;
        }

        public function get($id){
            $sql = "SELECT * FROM shipers WHERE shipers.id_shiper = ?";
            $statement = $this->connection->prepare($sql);
            $statement->bindParam(1, $id);
            $statement->execute();
            $row = $statement->fetch();
            $shiper = new Shiper($row['name'], $row['birthday'], $row['phone'],$row['email'], $row['timework']);
            $shiper->id_shiper = $row['id_shiper'];
            return $shiper;
        }
        
        public function update($id, $shiper){
            $sql = "UPDATE shipers SET name = ?, birthday = ?, phone = ?, email = ?, timework = ? WHERE id_shiper = ?";
            $statement = $this->connection->prepare($sql);
            $statement->bindParam(1, $shiper->name);
            $statement->bindParam(2, $shiper->birthday);
            $statement->bindParam(3, $shiper->phone);
            $statement->bindParam(4, $shiper->email);
            $statement->bindParam(5, $shiper->timework);
            $statement->bindParam(7, $id);
            return $statement->execute();
        }

        public function delete($id){
        $sql = "DELETE FROM shipers WHERE shipers.id_shiper = ?";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(1, $id);
        return $statement->execute();
        }
    }