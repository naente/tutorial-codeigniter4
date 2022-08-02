<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class TasksController extends BaseController
{
    public function index()
    {
        return view('Tasks/index');
    }
}
