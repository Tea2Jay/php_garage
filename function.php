<?php

function dd($var)
{
    echo '<pre>';
    die(var_dump($var));
    echo '</pre>';
}

function connectToDb()
{
    try {
        return new PDO('mysql:host=127.0.0.1;dbname=mytodo', 'root', '');
    } catch (PDOException $e) {
        die($e->getMessage());
    }
}

function fetchAll($pdo)
{
    $statment = $pdo->prepare('select * from todos');
    $statment->execute();
    return $statment->fetchAll(PDO::FETCH_CLASS, 'Task');
}
