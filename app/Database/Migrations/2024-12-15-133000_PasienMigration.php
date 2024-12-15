<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class PasienMigration extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_pasien' => [
                'type' => 'VARCHAR',
                'constraint' => 10,
                'null' => false,
            ],
            'nama' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
                'null' => false,
            ],
            'alamat' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => false,
            ],
            'no_telp' => [
                'type' => 'VARCHAR',
                'constraint' => 15,
                'null' => false,
            ],
            'jenis_kelamin' => [
                'type' => 'ENUM',
                'constraint' => ['Laki-Laki', 'Perempuan'], // L for Laki-laki, P for Perempuan
                'null' => false,
            ],
            'golongan_darah' => [
                'type' => 'VARCHAR',
                'constraint' => 3,
                'null' => false,
            ],
            'alergi' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'tanggal_lahir' => [
                'type' => 'DATE',
                'null' => false,
            ],
        ]);

        // Set primary key
        $this->forge->addPrimaryKey('id_pasien');
        $this->forge->createTable('pasien');

        // Create Trigger
        $this->db->query("
            CREATE TRIGGER before_insert_pasien
            BEFORE INSERT ON pasien
            FOR EACH ROW
            BEGIN
                DECLARE new_id INT DEFAULT 1;
                DECLARE max_id INT;

                -- Find the maximum id_pasien number currently in use
                SELECT COALESCE(MAX(CAST(SUBSTRING(id_pasien, 2) AS UNSIGNED)), 0) INTO max_id FROM pasien;

                -- Generate new id_pasien with prefix
                SET NEW.id_pasien = CONCAT('P', max_id + 1);
            END
        ");
    }

    public function down()
    {
        $this->db->query("DROP TRIGGER IF EXISTS before_insert_pasien");
        $this->forge->dropTable('pasien');
    }
}
