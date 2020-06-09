<?php

class QueryBuilder
{
    protected $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function selectAll($table, $intoClass)
    {
        $statment = $this->pdo->prepare("select * from {$table}");
        $statment->execute();
        return $statment->fetchAll(PDO::FETCH_CLASS, $intoClass);
    }

    public function insert($table, $descrption, $completed)
    {
        $statment = $this->pdo->prepare(
            "insert into {$table} (id, description, completed) values (NULL, '{$descrption}','{$completed}')"
        );
        $statment->execute();
    }
}
