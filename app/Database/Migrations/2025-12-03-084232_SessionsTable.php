<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class SessionsTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'       => 'VARCHAR',
                'constraint' => 128,
            ],
            'ip_address' => [
                'type'       => 'VARCHAR',
                'constraint' => 45,
            ],
            'timestamp' => [
                'type'       => 'INT',
                'constraint' => 10,
                'unsigned'   => true,
                'default'    => 0,
            ],
            'data' => [
                'type' => 'BLOB',
                'null' => false,
            ],
        ]);

        $this->forge->addKey('id', true); // primary key
        $this->forge->addKey('timestamp'); // index

        $this->forge->createTable('sessions');
    }

    public function down()
    {
        $this->forge->dropTable('sessions');
    }
}
