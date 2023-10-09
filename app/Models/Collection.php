<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Collection extends Model
{
    use HasFactory;

    // 6706223009 - Muhammad Raihan Fahrifi

    protected $fillable = [
        'namaKoleksi',
        'jenisKoleksi',
        'jumlahKoleksi'
    ];
}
