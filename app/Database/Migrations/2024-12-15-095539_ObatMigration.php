<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class ObatMigration extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'kodeobat' => [
                'type' => 'VARCHAR',
                'constraint' => 10,
                'null' => false,
            ],
            'namaobat' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
                'null' => false,
            ],
            'tanggalkadaluarsa' => [
                'type' => 'DATE',
                'null' => false,
            ],
            'satuan' => [
                'type' => 'VARCHAR',
                'constraint' => 20,
                'null' => false,
            ],
            'ukuran' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
                'null' => false,
            ],
            'harga' => [
                'type' => 'INT',
                'constraint' => '100',
                'null' => false,
            ],
        ]);

        // Set kodeobat as primary key
        $this->forge->addPrimaryKey('kodeobat');
        $this->forge->createTable('obat');
    }

    public function down()
    {
        $this->forge->dropTable('obat');
    }
}
