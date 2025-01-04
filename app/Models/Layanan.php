<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Layanan extends Model
{
    use HasFactory;

    protected $table = 'layanans';

    protected $fillable = [
        'jenis_layanan',
        'nama_layanan',
        'harga',
        'deskripsi',
    ];

    public $timestamps = true; 
}
