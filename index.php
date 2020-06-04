<?php

$person = [
    'age' => 20,
    'hair' => 'black'
];

$person['name'] = 'Tariq';
unset($person['age']);
var_dump($person);
//die();

require 'index.view.php';
