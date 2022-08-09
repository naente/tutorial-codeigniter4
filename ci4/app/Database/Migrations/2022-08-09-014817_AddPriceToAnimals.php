<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddPriceToAnimals extends Migration
{
    public function up()
    {
        $this->forge->addColumn('animals', [
            'price' => [
                'type'     => 'MEDIUMINT',
                'unsigned' => true,
                'after'    => 'name',
            ],
        ]);
    }

    public function down()
    {
        $this->forge->dropColumn('animals', 'price');
    }
}
