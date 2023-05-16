<?php

use App\Http\Controllers\WisataAdatSulselController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [WisataAdatSulselController::class, 'index']);
Route::get('/tambah', [WisataAdatSulselController::class, 'tambah']);
Route::post('/tambah', [WisataAdatSulselController::class, 'store']);
Route::get('/hapus/{id}', [WisataAdatSulselController::class, 'hapus']);
Route::get('/edit/{id}', [WisataAdatSulselController::class, 'edit']);
Route::post('/edit/{id}', [WisataAdatSulselController::class, 'update']);
Route::get('/lihat/{id}', [WisataAdatSulselController::class, 'lihat']);
