<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class UsersMigration extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_user'       => [
                'type'           => 'INT',
                'constraint'     => 10,
                'auto_increment' => true,
                'unsigned'       => true,
            ],
            'role'          => [
                'type'           => 'VARCHAR',
                'constraint'     => 20,
                'null'           => false, // Jika role wajib diisi
            ],
            'username'      => [
                'type'           => 'VARCHAR',
                'constraint'     => 100,
                'null'           => false, // Jika username wajib diisi
            ],
            'password'      => [
                'type'           => 'VARCHAR',
                'constraint'     => 255,
                'null'           => false, // Jika password wajib diisi
            ],
            'nama'          => [
                'type'           => 'VARCHAR',
                'constraint'     => 100,
                'null'           => false,
            ],
            'alamat'        => [
                'type'           => 'VARCHAR',
                'constraint'     => 255,
                'null'           => true,
            ],
            'no_telp'      => [
                'type'           => 'VARCHAR',
                'constraint'     => 15,
                'null'           => true,
            ],
        ]);

        $this->forge->addKey('id_user', true); // Menetapkan id_user sebagai primary key
        $this->forge->createTable('users'); // Membuat tabel user
    }

    public function down()
    {
        // Hapus tabel users
        $this->forge->dropTable('users');
    }
}
