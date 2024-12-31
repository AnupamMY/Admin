<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class User extends Migration
{
    public function up()
    {
        //
        $this->forge->addField([
            'camp_id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'name' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'username' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'status' => [
                "type" => "INT",
                'constraint' => 1,
            ]
        ]);
        $this->forge->addKey('camp_id', true);
        $this->forge->createTable('camp');
    }

    public function down()
    {
        $this->forge->dropTable('camp');
    }
}
