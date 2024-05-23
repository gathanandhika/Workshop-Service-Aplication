<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use App\Models\Book;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashController extends Controller
{
    public function index()
    {
        //ambil data pendapatan perbulan tahun ini
        //seterusnya sampai desember
        $current_year = date('Y');
        $pendapatan_januari = DB::table('books')
            ->whereYear('tanggal', $current_year)
            ->whereMonth('tanggal', 1)
            ->sum('total_harga');
        $pendapatan_februari = DB::table('books')
            ->whereYear('tanggal', $current_year)
            ->whereMonth('tanggal', 2)
            ->sum('total_harga');
        $pendapatan_maret = DB::table('books')
            ->whereYear('tanggal', $current_year)
            ->whereMonth('tanggal', 3)
            ->sum('total_harga');
        $pendapatan_april = DB::table('books')
            ->whereYear('tanggal', $current_year)
            ->whereMonth('tanggal', 4)
            ->sum('total_harga');
        $pendapatan_mei = DB::table('books')
            ->whereYear('tanggal', $current_year)
            ->whereMonth('tanggal', 5)
            ->sum('total_harga');
        $pendapatan_juni = DB::table('books')
            ->whereYear('tanggal', $current_year)
            ->whereMonth('tanggal', 6)
            ->sum('total_harga');
        $pendapatan_juli = DB::table('books')
            ->whereYear('tanggal', $current_year)
            ->whereMonth('tanggal', 7)
            ->sum('total_harga');
        $pendapatan_agustus = DB::table('books')
            ->whereYear('tanggal', $current_year)
            ->whereMonth('tanggal', 8)
            ->sum('total_harga');
        $pendapatan_september = DB::table('books')
            ->whereYear('tanggal', $current_year)
            ->whereMonth('tanggal', 9)
            ->sum('total_harga');
        $pendapatan_oktober = DB::table('books')
            ->whereYear('tanggal', $current_year)
            ->whereMonth('tanggal', 10)
            ->sum('total_harga');
        $pendapatan_november = DB::table('books')
            ->whereYear('tanggal', $current_year)
            ->whereMonth('tanggal', 11)
            ->sum('total_harga');
        $pendapatan_desember = DB::table('books')
            ->whereYear('tanggal', $current_year)
            ->whereMonth('tanggal', 12)
            ->sum('total_harga');
              // Mengambil pendapatan di bulan ini
        $pendapatan = Book::whereMonth('tanggal', Carbon::now()->month)->sum('total_harga');
         // Mengambil jumlah booking pada hari ini
        $jumlah_booking = Book::whereDate('tanggal', Carbon::today())->count();

        // return view('dashboard.index', compact('pendapatan', 'jumlah_booking'));
        return view('dashboard.index', compact('pendapatan', 'jumlah_booking', 'pendapatan_januari', 'pendapatan_februari','pendapatan_maret',
                                                'pendapatan_april', 'pendapatan_mei', 'pendapatan_juni', 'pendapatan_juli', 'pendapatan_agustus',
                                            'pendapatan_september', 'pendapatan_oktober', 'pendapatan_november', 'pendapatan_desember'));
        // return view('dashboard.index');
    }
}
