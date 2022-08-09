<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddTimestampsToAnimals extends Migration
{
    public function up()
    {
        //
        $this->forge->addColumn('animals', [
            'created_at' => [
                'type'    => 'DATETIME',
                'null'    => true,
                'default' => null,
            ],
            'updated_at' => [
                'type'    => 'DATETIME',
                'null'    => true,
                'default' => null,
            ],
        ]);
    }

    public function down()
    {
        //
        $this->forge->dropColumn('animals', ['created_at', 'updated_at']);
    }
}
