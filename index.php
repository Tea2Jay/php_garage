<?php

$person = [
    'age' => 20,
    'hair' => 'black'
];

$person['name'] = 'Tariq';
var_dump($person);
//die();

require 'index.view.php';
