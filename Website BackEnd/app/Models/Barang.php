<?php

namespace App\Models;

use App\Models\Booking;
use App\Models\Pembelian;
use App\Models\Transaksi;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Barang extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama_barang',
        'harga'
    ];
    

    public function booking()
    {
        return $this->belongsTo(Booking::class, 'id_booking', 'id');
    }

    public function barang()
    {
        return $this->belongsTo(Transaksi::class, 'id_transaksi', 'id');
    }

}
