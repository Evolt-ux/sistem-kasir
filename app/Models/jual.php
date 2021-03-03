<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jual extends Model
{
    use HasFactory;
    protected $table = 'penjualan';

    protected $fillable = [
        'Tanggal','NamaBarang', 'Jumlah', 'Harga','Diskon'
    ];
}
