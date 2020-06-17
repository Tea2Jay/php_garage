<?php

class TasksController
{
    public function index()
    {
        $tasks = App::get('database')->selectAll('todos', 'Task');
        return view('tasks', compact('tasks'));
    }

    public function store()
    {
        App::get('database')->insert(
            'todos',
            [
                'description' => $_POST['description'],
                'completed' => $_POST['completed']
            ]
        );
        return redirect('tasks');
    }
}
