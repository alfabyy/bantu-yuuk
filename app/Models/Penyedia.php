<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penyedia extends Model
{
    use HasFactory;

    protected $table = 'penyedias';

    protected $fillable = [
        'nama',
        'alamat',
        'jenis_kelamin',
        'usia',
        'kontak',
        'deskripsi',
    ];

    public $timestamps = true; 
}
