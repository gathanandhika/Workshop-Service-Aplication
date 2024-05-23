<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use App\Models\Barang;
use App\Models\Book;
use App\Models\Booking;
use App\Models\Pembelian;
use App\Models\Transaksi;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'nama' => 'Gathan',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('password'),
            'no_hp' => '089888333888',
            'alamat' => 'Jl. Sleman'
        ]);
        User::create([
            'nama' => 'Syagura',
            'email' => 'admin1@gmail.com',
            'password' => Hash::make('coba'),
            'no_hp' => '089888333888',
            'alamat' => 'Jl. Jombor'
        ]);
        User::create([
            'nama' => 'sutan',
            'email' => 'admin3@gmail.com',
            'password' => Hash::make('pass'),
            'no_hp' => '089888333888',
            'alamat' => 'Jl. Jombor'
        ]);


        Barang::create([
            'nama_barang' => 'Shel HX5 GLN',
            'harga' => 255500
        ]);
        Barang::create([
            'nama_barang' => 'Shel HX6 GLN',
            'harga' => 268500
        ]);
        Barang::create([
            'nama_barang' => 'Shel HX7 GLN',
            'harga' => 350000
        ]);
        Barang::create([
            'nama_barang' => 'Shel HX8 GLN',
            'harga' => 488800
        ]);
        Barang::create([
            'nama_barang' => 'Shel TMO GLN',
            'harga' => 292000
        ]);
        Barang::create([
            'nama_barang' => 'Prima xp gln injeksi',
            'harga' => 187700
        ]);
        Barang::create([
            'nama_barang' => 'Xp carbu gln',
            'harga' => 255500
        ]);
        Barang::create([
            'nama_barang' => 'Castrol gln',
            'harga' => 335900
        ]);
        Barang::create([
            'nama_barang' => 'Bolam stop Philips',
            'harga' => 13500
        ]);
        Barang::create([
            'nama_barang' => 'Bolam tembak H11',
            'harga' => 35600
        ]);
        Barang::create([
            'nama_barang' => 'Bolam tembak H16',
            'harga' => 36000
        ]);
        Barang::create([
            'nama_barang' => 'Bolam tembak H8',
            'harga' => 40000
        ]);
        Barang::create([
            'nama_barang' => 'Bolam tembak H3',
            'harga' => 20000
        ]);
        Barang::create([
            'nama_barang' => 'Bolam tembak H1',
            'harga' => 15000
        ]);


        Book::create([
            'nama' => 'Ubed',
            'jenis_kendaraan' => 'Brio',
            'nomor_kendaraan' => 'D 1234 Z',
            'tanggal' => '2022-01-01'

        ]);
        Book::create([
            'nama' => 'Tarsono',
            'jenis_kendaraan' => 'Brio',
            'nomor_kendaraan' => 'D 1234 Z',
            'tanggal' => '2022-01-01'

        ]);
        Book::create([
            'nama' => 'Jubaedah',
            'jenis_kendaraan' => 'Brio',
            'nomor_kendaraan' => 'D 1234 Z',
            'tanggal' => '2022-01-01'

        ]);



    }
}


