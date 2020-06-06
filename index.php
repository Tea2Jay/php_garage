<?php
require 'function.php';

class Task
{
    public $description;
    public $completed;

    public function __construct($description)
    {
        $this->description = $description;
        $this->completed = false;
    }

    public function complete()
    {
        $this->completed = true;
    }

    public function isComplete()
    {
        return $this->completed;
    }

}

$tasks = [
    new Task('go to the store'),
    new Task('do HW'),
    new Task('clean room')
];

$tasks[0]->complete();


require 'index.view.php';
