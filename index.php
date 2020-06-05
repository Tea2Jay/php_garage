<?php
require 'function.php';

$task = [
    'title' => 'homework',
    'due' => 'tommorw',
    'assigned_to' => 'Tariq',
    'completed' => true

];

//dd($task);

if (checkAge(22)) {
    echo "Come on in";
} else {
    echo " you are not old enough";
}
die();

require 'index.view.php';
