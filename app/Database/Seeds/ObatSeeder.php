<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ObatSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'kodeobat' => 'OBT0001',
                'namaobat' => 'Paracetamol',
                'tanggalkadaluarsa' => '2025-12-31',
                'satuan' => 'Strip',
                'ukuran' => '10 Tablet (500mg)',
                'harga' => 15000,
            ],
            [
                'kodeobat' => 'OBT0002',
                'namaobat' => 'Amoxicillin',
                'tanggalkadaluarsa' => '2024-11-30',
                'satuan' => 'Strip',
                'ukuran' => '10 Capsule (250mg)',
                'harga' => 20000.00,
            ],
            [
                'kodeobat' => 'OBT0003',
                'namaobat' => 'Ibuprofen',
                'tanggalkadaluarsa' => '2026-01-15',
                'satuan' => 'Toples',
                'ukuran' => '40 Tablet (400mg)',
                'harga' => 18000,
            ],
            [
                'kodeobat' => 'OBT0004',
                'namaobat' => 'Cetirizine',
                'tanggalkadaluarsa' => '2025-06-30',
                'satuan' => 'Toples',
                'ukuran' => '40 Tablet (10mg)',
                'harga' => 12000,
            ],
        ];

        // Insert each row of data into the obat table
        foreach ($data as $item) {
            $this->db->table('obat')->insert($item);
        }
    }
}
