<?php

use Whoops\Run;
use App\Models\Transaksi;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\DashController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\TransaksiController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', function(){
//     return view('login.index', [
//         'title'=>'Dashboard'
//     ]);
// })->middleware('auth');

Route::get('/', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);
Route::get('/dashboard', [DashController::class, 'index']);
// Route::get('/dashboard', [DashController::class, 'main']);
Route::resource('/dashboard/users', UserController::class);
Route::resource('/dashboard/sparepart', BarangController::class);
Route::resource('/dashboard/booking', BookingController::class);
Route::resource('/dashboard/book', BookController::class);
Route::resource('dashboard/laporan', LaporanController::class);