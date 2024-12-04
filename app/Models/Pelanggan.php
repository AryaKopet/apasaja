<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    use HasFactory;

    // Nama tabel di database
    protected $table = 'pelanggan';

    // Kolom yang dapat diisi
    protected $fillable = [
        'nama',
        'email',
        'no_telepon',
        'lokasi',
    ];
}
