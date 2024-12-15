<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class PasienSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'nama' => 'John Doe',
                'alamat' => '123 Main St',
                'no_telp' => '081234567890',
                'jenis_kelamin' => 'Laki-Laki',
                'golongan_darah' => 'A',
                'alergi' => 'None',
                'tanggal_lahir' => '1990-01-01',
            ],
            [
                'nama' => 'Jane Smith',
                'alamat' => '456 Elm St',
                'no_telp' => '089876543210',
                'jenis_kelamin' => 'Perempuan',
                'golongan_darah' => 'B',
                'alergi' => 'Peanuts',
                'tanggal_lahir' => '1992-05-15',
            ],
            [
                'nama' => 'Alice Johnson',
                'alamat' => '789 Pine St',
                'no_telp' => '087654321098',
                'jenis_kelamin' => 'Perempuan',
                'golongan_darah' => 'O',
                'alergi' => 'None',
                'tanggal_lahir' => '1985-07-23',
            ],
            [
                'nama' => 'Bob Brown',
                'alamat' => '321 Oak St',
                'no_telp' => '085612345678',
                'jenis_kelamin' => 'Laki-Laki',
                'golongan_darah' => 'AB',
                'alergi' => 'Shellfish',
                'tanggal_lahir' => '1978-11-30',
            ],
        ];

        // Insert each row of data into the pasien table
        foreach ($data as $item) {
            $this->db->table('pasien')->insert($item);
        }
    }
}
