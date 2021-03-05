<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class beli extends Model
{
    use HasFactory;
    protected $table = 'pembelian';
    protected $PrimaryKey = 'PembelianID';

    protected $fillable = [
        'Tanggal', 'NamaBarang', 'Jumlah', 'Harga'
    ];

    public function barang()
    {
        return $this->belongsToMany(Barang::class);
    }
}
