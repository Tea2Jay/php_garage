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

    public function insert($table, $paramters)
    {
        $sql = sprintf(
            'insert into %s (%s) values (%s)',
            $table,
            implode(',', array_keys($paramters)),
            ':' . implode(',:', array_keys($paramters))
        );
        try {
            $statment = $this->pdo->prepare($sql);

            $statment->execute($paramters);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
}
