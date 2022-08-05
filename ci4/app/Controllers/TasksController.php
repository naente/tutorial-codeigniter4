<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\TasksModel;

class TasksController extends BaseController
{
    public function index()
    {
        $model = new TasksModel;
        $tasks = $model->findAll();

        return view('Tasks/index', ['tasks' => $tasks]);
    }

    public function show($id)
    {
        $model = new TasksModel;
        $task = $model->find($id);

        return view('Tasks/show', ['task' => $task]);
    }

    public function create()
    {
        return view('Tasks/create');
    }
}
