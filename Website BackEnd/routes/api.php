<?php

use App\Http\Controllers\AntrianController;
use App\Models\Transaksi;
use Illuminate\Http\Request;
use App\Http\Resources\api\User;
use App\Http\Controllers\UserApi;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\api\AuthController;
use App\Http\Controllers\api\BarangController;
use App\Http\Controllers\api\UsersController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\API\UserController as APIUserController;
use App\Http\Controllers\api\UserController as ControllersApiUserController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\LoginController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::post('/login', [AuthController::class, 'login']);
// Route::apiResource('users', ControllersApiUserController::class);

// Route::group(['prefix' => 'API', 'namespace' => 'App\Http\Controllers\API'], function(){
//     Route::apiResource('user', APIUserController::class);

// });

// Route::get('/users', [UserApi::class, 'index']);
// // Route::get('/users', [UserApi::class, 'tampil']);
// Route::get('/users/{id}', [UserApi::class, 'show']);

// Route::post('/user', [UserApi::class, 'store']);
// Route::put('/user/{id}', [UserApi::class, 'update']);
// Route::get('/barang', [BarangController::class, 'show']);
// Route::post('/user', [UserApi::class, 'store']); 
// Route::get('users/search/{nama}', [UserApi::class, 'search']);
// Route::get('/dashboard/transaksi', [TransaksiController::class, 'index']);
// Route::get('/dashboard/user', [UserController::class, 'index']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/login', [LoginController::class, 'login']);

Route::post('/register', [LoginController::class, 'register']);

Route::post('/booking', [BookController::class, 'booking']);
Route::get('/antrian', [AntrianController::class, 'index']);