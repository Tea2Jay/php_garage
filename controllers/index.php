<?php



$tasks = App::get('database')->selectAll('todos', 'Task');

//dd($tasks);
require 'views/index.view.php';
