<?php



$app['database']->insert('todos', $_POST['descrption'], $_POST['completed']);

var_dump($app['database']->selectAll('todos','Task'));
