<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class User extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'login_id'=>[
              'type'=>'INT',
              'constraint'=>11,
              'unsigned'=>true,
            ],
            'email' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'password' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            
        ]);
        $this->forge->addKey('login_id', true);
        $this->forge->createTable('login');
    }

    public function down()
    {
        $this->forge->dropTable('login');
    }
}


