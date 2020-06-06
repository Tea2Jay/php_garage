<?php

//require 'function.php';
require 'Task.php';

$query = require 'bootstrap.php';



$tasks = $query->selectAll('todos', 'Task');

//dd($tasks);
require 'index.view.php';
