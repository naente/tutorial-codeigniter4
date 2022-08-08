<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Entities\Task as TaskEntity;
use App\Models\TasksModel;
use CodeIgniter\Exceptions\PageNotFoundException;

class TasksController extends BaseController
{
    private $model;

    public function __construct()
    {
        $this->model = new TasksModel;
    }

    public function index()
    {
        $tasks = $this->model->findAll();

        return view('Tasks/index', ['tasks' => $tasks]);
    }

    public function show($id)
    {
        $task = $this->getTaskOr404($id);

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
        $task = new TaskEntity($this->request->getPost());

        if ($this->model->insert($task)) {
            return redirect()->to('/tasks/' . $this->model->insertID)
                ->with('info', 'Created successfully');
        } else {
            return redirect()->back()
                ->with('errors', $this->model->errors())
                ->with('warning', 'Invalid data')
                ->withInput();
        }
    }

    public function edit($id)
    {
        $task = $this->getTaskOr404($id);

        return view('Tasks/edit', ['task' => $task]);
    }

    public function update($id)
    {
        $task = $this->getTaskOr404($id);

        $task->fill($this->request->getPost());

        if (!$task->hasChanged()) {
            return redirect()->back()
                ->with('warning', 'Nothing to update')
                ->withInput();
        }

        if ($this->model->save($task)) {
            return redirect()->to('/tasks/' . $id)
                ->with('info', 'Updated successfully');
        } else {
            return redirect()->back()
                ->with('errors', $this->model->errors())
                ->with('warning', 'Invalid data')
                ->withInput();
        }
    }

    public function delete($id)
    {
        $task = $this->getTaskOr404($id);

        if ($this->request->getMethod() === 'post') {
            $this->model->delete($id);
            return redirect()->to('/tasks')
                ->with('info', 'Task deleted');
        }

        return view('Tasks/delete', ['task' => $task]);
    }

    private function getTaskOr404($id)
    {
        $task = $this->model->find($id);

        if ($task === null) {
            throw new PageNotFoundException("Task with id $id not found");
        }

        return $task;
    }
}
