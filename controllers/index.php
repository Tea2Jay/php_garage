<?php



$tasks = $app['database']->selectAll('todos', 'Task');

//dd($tasks);
require 'views/index.view.php';
