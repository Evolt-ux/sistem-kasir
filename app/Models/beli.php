<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class beli extends Model
{
    use HasFactory;
    protected $table = 'pembelian';

    protected $fillable = [
        'Tanggal','NamaBarang', 'Jumlah', 'Harga'
    ];
}
