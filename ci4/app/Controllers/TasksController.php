<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\TasksModel;

class TasksController extends BaseController
{
    public function index()
    {
        $model = new TasksModel;
        $data = $model->findAll();

        return view('Tasks/index', ['tasks' => $data]);
    }
}
