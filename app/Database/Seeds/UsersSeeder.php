<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UsersSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'role'     => 'admin',
                'username' => 'admin',
                'password' => 'password123',
                'nama'     => 'Admin User',
                'alamat'   => 'Alamat Admin',
                'no_telp'  => '081234567890',
            ],
            [
                'role'     => 'user',
                'username' => 'user1',
                'password' => 'userpassword',
                'nama'     => 'Regular User',
                'alamat'   => 'Alamat User',
                'no_telp'  => '081234567891',
            ],
            [
                'role'     => 'mantri',
                'username' => 'mantri',
                'password' => '12345678',
                'nama'     => 'Mino',
                'alamat'   => 'Paingan',
                'no_telp'  => '081256981001'
            ],
        ];

        // Insert data ke tabel users
        $this->db->table('users')->insertBatch($data);
    }
}
