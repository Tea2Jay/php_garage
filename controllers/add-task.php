<?php



$app['database']->insert(
    'todos',
    [
        'description' => $_POST['description'],
        'completed' => $_POST['completed']
    ]
);

 header('Location: /');