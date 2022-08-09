<?php

namespace App\Models;

use App\Entities\AnimalEntity;
use CodeIgniter\Model;

class AnimalsModel extends Model
{
    protected $table            = 'animals';
    protected $primaryKey       = 'id';
    protected $returnType       = AnimalEntity::class;
    protected $allowedFields    = ['name'];

    // Dates
    protected $useTimestamps = true;

    // Validation
    protected $validationRules      = [
        'name' => 'required'
    ];
}
