<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $fillable = [
        // 'id_user',
        'jenis_kendaraan',
        'nomor_kendaraan',
        'tanggal',
        // 'harga_total'
    ];

    public function user() {
        return $this->belongsTo(User::class, 'id_user', 'id');
    }

    public function transaksi()
    {
        return $this->belongsTo(Transaksi::class, 'is_transaksi', 'id');
    }

}
