<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KelasController;

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

Route::get('/latihan1', [App\Http\Controllers\LatihanJson::class, 'getdata1']);
Route::get('/latihan2', [App\Http\Controllers\LatihanJson::class, 'getdata2']);
Route::get('/latihan3', [App\Http\Controllers\LatihanJson::class, 'getdata3']);
Route::get('/latihan4', [App\Http\Controllers\LatihanJson::class, 'getdata4']);
Route::get('/latihan5', [App\Http\Controllers\LatihanJson::class, 'getdata5']);