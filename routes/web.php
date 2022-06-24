<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/golongan', [App\Http\Controllers\GolonganController::class, 'index']);
Route::get('/golongan/create', [App\Http\Controllers\GolonganController::class, 'create']);
Route::post('/golongan', [App\Http\Controllers\GolonganController::class, 'store']);
//Route::get('/golongan/{id}/edit/', [App\Http\Controllers\GolonganController::class, 'edit']);
