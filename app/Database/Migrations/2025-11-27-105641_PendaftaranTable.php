<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class PendaftarTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],

            'nama_lengkap' => [
                'type'       => 'VARCHAR',
                'constraint' => '150',
            ],

            'jenis_kelamin' => [
                'type'       => 'ENUM',
                'constraint' => ['Laki-laki', 'Perempuan'],
            ],

            'tempat_lahir' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],

            'tanggal_lahir' => [
                'type' => 'DATE',
            ],

            'jenjang' => [
                'type'       => 'ENUM',
                'constraint' => ['RA', 'MTs', 'MA'],
            ],

            'asal_sekolah' => [
                'type'       => 'VARCHAR',
                'constraint' => '150',
            ],

            'nama_ortu' => [
                'type'       => 'VARCHAR',
                'constraint' => '150',
            ],

            'no_hp' => [
                'type'       => 'VARCHAR',
                'constraint' => '20',
            ],

            // FILES
            'photo_kk' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],

            'photo_akte' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],

            'photo_ijazah' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
                'null' => true,
            ],

            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],

            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('pendaftar');
    }

    public function down()
    {
        $this->forge->dropTable('pendaftar');
    }
}
