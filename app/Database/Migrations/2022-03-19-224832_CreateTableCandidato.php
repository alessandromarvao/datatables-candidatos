<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTableCandidato extends Migration
{
    public function up()
    {
        $this->forge->addField('id');
        $this->forge->addField([
            'nome' => [
                'type' => 'VARCHAR',
                'constraint' => 100
            ],
            'email' => [
                'type' => 'VARCHAR',
                'constraint' => 100
            ],
            'avaliacao' => [
                'type' => 'INT'
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => TRUE
            ]
        ])->createTable('candidatos');
    }

    public function down()
    {
        $this->forge->dropTable('candidatos');
    }
}
