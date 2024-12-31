<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Camp extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'camp_id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'camp_name' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'camp_description' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'client' => [
                "type" => "VARCHAR",
                'constraint' => "100",
            ],
            'role' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ]
        ]);
        $this->forge->addKey('camp_id', true);
        $this->forge->createTable('camp');
    }

    public function down()
    {
        //
    }
}
