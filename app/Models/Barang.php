<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;
    protected $table = 'barang';
    protected $PrimaryKey = 'BarangID';

    protected $fillable = [
        'Tanggal', 'NamaBarang', 'Jumlah', 'Harga', 'Kadaluarsa'
    ];

    public function pembelian()
    {
        return $this->belongsToMany(beli::class);
    }
}
