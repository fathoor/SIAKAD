<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;

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

Route::get('/', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');

Route::get('/frs', function () {
    return view('contents.frs');
});

Route::get('/transkrip', function () {
    return view('contents.transkrip');
});

Route::get('/kurikulum', function () {
    return view('contents.kurikulum');
});

Route::get('/suratundurdiri', function () {
    return view('contents.suratundurdiri');
});

Route::get('/suratMahasiswa2', function () {
    return view('contents.suratMahasiswa-2');
});

Route::get('/suratMahasiswa', function () {
    return view('contents.suratMahasiswa');
});

Route::get('/biodata', function () {
    return view('contents.biodata');
});
