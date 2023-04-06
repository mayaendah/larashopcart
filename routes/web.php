<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\productController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[productController::class,'index']);
Route::get('/cart/tambah/{id}',[productController::class,'do_tambah_cart']);
Route::get('/cart',[productController::class,'cart']);
Route::get('/cart/hapus/{id}',[productController::class,'do_hapus_cart']);
Route::get('/tambah/transaksi',[productController::class,'do_tambah_transaksi']);
