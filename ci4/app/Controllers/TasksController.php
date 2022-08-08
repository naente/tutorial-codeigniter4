<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Entities\Task as TaskEntity;
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
        $task = new TaskEntity;

        return view('Tasks/create', [
            'task' => $task
        ]);
    }

    public function store()
    {
        $model = new TasksModel;

        $task = new TaskEntity($this->request->getPost());

        if ($model->insert($task)) {
            return redirect()->to('/tasks/' . $model->insertID)
                ->with('info', 'Created successfully');
        } else {
            return redirect()->back()
                ->with('errors', $model->errors())
                ->with('warning', 'Invalid data')
                ->withInput();
        }
    }

    public function edit($id)
    {
        $model = new TasksModel;
        $task = $model->find($id);

        return view('Tasks/edit', ['task' => $task]);
    }

    public function update($id)
    {
        $model = new TasksModel;
        $result = $model->update($id, [
            'description' => $this->request->getPost('description')
        ]);

        if ($result === true) {
            return redirect()->to('/tasks/' . $id)
                ->with('info', 'Updated successfully');
        } else {
            return redirect()->back()
                ->with('errors', $model->errors())
                ->with('warning', 'Invalid data')
                ->withInput();
        }
    }
}
