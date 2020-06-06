<?php
require 'function.php';
require 'Task.php';



$pdo = connectToDb();

$tasks = fetchAll($pdo);

//dd($tasks);
require 'index.view.php';
