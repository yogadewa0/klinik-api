<?php

namespace App\Models;

use CodeIgniter\Model;

class UsersModel extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id_user';
    protected $allowedFields = ['role', 'username', 'password', 'nama', 'alamat', 'no_telp'];

    // Tambahkan ini untuk menangani penghapusan dan pembaruan
    protected $useTimestamps = false;

    // Validasi
    protected $validationRules = [
        'username' => 'required|is_unique[users.username,id_user,{id}]',
        'password' => 'required|min_length[6]',
        'nama'     => 'required',
        'alamat'   => 'required',
        'no_telp'  => 'required'
    ];

    protected $validationMessages = [
        'username' => [
            'required' => 'Username masih kosong.',
            'is_unique' => 'Username sudah digunakan.'
        ],
        'password' => [
            'required' => 'Password masih kosong.',
            'min_length' => 'Password minimal 6 karakter.'
        ],
        'nama' => [
            'required' => 'Nama masih kosong.'
        ],
        'alamat' => [
            'required' => 'Alamat masih kosong.'
        ],
        'no_telp' => [
            'required' => 'Nomor telepon masih kosong.'
        ]
    ];
}
