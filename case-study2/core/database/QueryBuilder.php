<?php
class QueryBuilder 
{   
    protected $pdo;
    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }
    public function selectAll($table, $model = null)
    {
        $statement = $this->pdo->prepare("select * from {$table}");
        $statement->execute();
        if($model)
        {
            return $statement->fetchAll(PDO::FETCH_CLASS, "{$model}");
        }
        return $statement->fetchAll(PDO::FETCH_CLASS);
    }
}