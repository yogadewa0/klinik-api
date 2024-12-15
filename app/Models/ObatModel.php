<?php

namespace App\Models;

use CodeIgniter\Model;

class ObatModel extends Model
{
    protected $table = 'obat';
    protected $primaryKey = 'kodeobat';
    protected $allowedFields = ['kodeobat', 'namaobat', 'tanggalkadaluarsa', 'satuan', 'ukuran', 'harga'];

    // Enable timestamps if you have created_at and updated_at fields
    protected $useTimestamps = false;

    // Validation rules
    protected $validationRules = [
        'kodeobat' => 'required|is_unique[obat.kodeobat,kodeobat,{id}]',
        'namaobat' => 'required|min_length[3]',
        'tanggalkadaluarsa' => 'required|valid_date',
        'satuan' => 'required',
        'ukuran' => 'required',
        'harga' => 'required',
    ];

    protected $validationMessages = [
        'kodeobat' => [
            'required' => 'Kode Obat masih kosong.',
            'is_unique' => 'Kode obat harus berbeda(unique).',
        ],
        'namaobat' => [
            'required' => 'Nama obat masih kosong.',
            'min_length' => 'Nama obat minimal 3 karakter.',
        ],
        'tanggalkadaluarsa' => [
            'required' => 'Tanggal kadaluarsa masih kosong.',
            'valid_date' => 'Tanggal kadaluarsa harus tanggal yang valid.',
        ],
        'satuan' => [
            'required' => 'Satuan masih kosong.',
        ],
        'ukuran' => [
            'required' => 'Ukuran masih kosong.',
        ],
        'harga' => [
            'required' => 'Harga masih kosong.',
        ],
    ];
}
