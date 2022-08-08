<?php

namespace App\Models;

use App\Entities\Task;
use CodeIgniter\Model;

class TasksModel extends Model
{
    protected $table = 'tasks';
    protected $allowedFields = ['description'];
    protected $returnType = Task::class;

    protected $validationRules = [
        'description' => 'required'
    ];
}
