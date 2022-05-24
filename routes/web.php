<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BiodataController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SuratCutiController;
use App\Http\Controllers\SuratAktifController;

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
Auth::routes();

// Homepage Route
Route::get('/', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

// Error Route
Route::get('/restricted', function () {
    return view('restricted');
})->name('error');

// Profile Route
Route::get('/biodata', [BiodataController::class, 'index']);
Route::get('/biodata/edit', [BiodataController::class, 'edit']);
Route::post('/biodata/update', [BiodataController::class, 'update']);

// Mahasiswa Route
Route::middleware(['auth', 'role:mahasiswa'])->group(function () {
    // Dashboard Route
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // Akademik Route
    Route::get('/frs', function () {
        return view('contents.frs');
    });

    Route::get('/transkrip', function () {
        return view('contents.transkrip');
    });

    Route::get('/kurikulum', function () {
        return view('contents.kurikulum');
    });

    Route::get('/kuesioner', function () {
        return view('contents.kuesioner');
    });

    Route::get('/kuesioner-2', function () {
        return view('contents.kuesioner-2');
    });

    // Finansial Route
    Route::get('/ukt', function () {
        return view('contents.ukt');
    });

    Route::get('/ukt-2', function () {
        return view('contents.ukt-2');
    });

    // Layanan Route
    Route::get('/suratundurdiri', function () {
        return view('contents.suratundurdiri');
    });

    Route::get('/suratundurdiri2', function () {
        return view('contents.suratundurdiri-2');
    });

    Route::get('/suratAktif', [SuratAktifController::class, 'index']);
    Route::get('/suratAktif/add', [SuratAktifController::class, 'add']);
    Route::post('/suratAktif/store', [SuratAktifController::class, 'store']);

    Route::get('/suratCuti', [SuratCutiController::class, 'index']);
    Route::get('/suratCuti/add', [SuratCutiController::class, 'add']);
    Route::post('/suratCuti/store', [SuratCutiController::class, 'store']);
});

// Dosen Route
Route::middleware(['auth', 'role:dosen'])->group(function () {
    // Dashboard Route
    Route::get('/dashboard/dosen', [DashboardController::class, 'indexDosen'])->name('dashboard.dosen');
});

// Staff Route
Route::middleware(['auth', 'role:staff'])->group(function () {
    // Dashboard Route
    Route::get('/dashboard/staff', [DashboardController::class, 'indexStaff'])->name('dashboard.staff');
});