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
            'required' => 'Username is required.',
            'is_unique' => 'This username is already taken.'
        ],
        'password' => [
            'required' => 'Password is required.',
            'min_length' => 'Password must be at least 6 characters long.'
        ],
        'nama' => [
            'required' => 'Name is required.'
        ],
        'alamat' => [
            'required' => 'Address is required.'
        ],
        'no_telp' => [
            'required' => 'Phone number is required.'
        ]
    ];
}
