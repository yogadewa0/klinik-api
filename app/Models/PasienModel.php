<?php

namespace App\Models;

use CodeIgniter\Model;

class PasienModel extends Model
{
    protected $table = 'pasien'; // The table name
    protected $primaryKey = 'id_pasien'; // The primary key
    protected $allowedFields = [
        'id_pasien',
        'nama',
        'alamat',
        'no_telp',
        'jenis_kelamin',
        'golongan_darah',
        'alergi',
        'tanggal_lahir',
    ];

    // Data Validation
    protected $validationRules = [
        'nama' => 'required|min_length[3]|max_length[100]',
        'alamat' => 'required|max_length[255]',
        'no_telp' => 'required|max_length[15]',
        'jenis_kelamin' => 'required|in_list[Laki-Laki,Perempuan]', // L for Laki-laki, P for Perempuan
        'golongan_darah' => 'required|max_length[3]',
        'tanggal_lahir' => 'required|valid_date',
    ];

    protected $validationMessages = [
        'nama' => [
            'required' => 'Nama harus diisi.',
            'min_length' => 'Nama minimal terdiri dari 3 karakter.',
            'max_length' => 'Nama maksimal terdiri dari 100 karakter.',
        ],
        'alamat' => [
            'required' => 'Alamat harus diisi.',
            'max_length' => 'Alamat maksimal terdiri dari 255 karakter.',
        ],
        'no_telp' => [
            'required' => 'Nomor telepon harus diisi.',
            'max_length' => 'Alamat maksimal terdiri dari 15 karakter.',
        ],
        'jeni_kelamin' => [
            'required' => 'Nomor telepon harus diisi.',
            'in_list[Laki-Laki,Perempuan]' => 'Hanya Laki-laki/Perempuan',
        ],
        'golongan_darah' => [
            'required' => 'Nomor telepon harus diisi.',
            'max_length' => 'Alamat maksimal terdiri dari 3 karakter.',
        ],
        'tanggal_lahir' => [
            'required' => 'Nomor telepon harus diisi.',
            'valid_date' => 'Tanggal lahir harus tanggal yang valid.'
        ],
    ];

    protected $useTimestamps = false;
}
