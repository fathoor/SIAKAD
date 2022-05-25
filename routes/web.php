<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BiodataController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KurikulumController;
use App\Http\Controllers\SuratCutiController;
use App\Http\Controllers\SuratAktifController;
use App\Http\Controllers\SuratUndurDiriController;
use App\Http\Controllers\KuesionerController;
use App\Http\Controllers\DaftarKuesionerController;

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

    //Kurikulum Route
    Route::get('/kurikulum', [KurikulumController::class, 'indexMahasiswa']);

    //Kuesioner Route
    Route::get('/kuesioner', [KuesionerController::class, 'index']);
    Route::post('/kuesioner/gantiPeriode', [KuesionerController::class, 'ganti']);
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
    Route::get('/suratAktif', [SuratAktifController::class, 'index']);
    Route::get('/suratAktif/add', [SuratAktifController::class, 'add']);
    Route::post('/suratAktif/store', [SuratAktifController::class, 'store']);

    Route::get('/suratCuti', [SuratCutiController::class, 'index']);
    Route::get('/suratCuti/add', [SuratCutiController::class, 'add']);
    Route::post('/suratCuti/store', [SuratCutiController::class, 'store']);

    Route::get('/suratUndurDiri', [SuratUndurDiriController::class, 'index']);
    Route::get('/suratUndurDiri/add', [SuratUndurDiriController::class, 'add']);
    Route::post('/suratUndurDiri/store', [SuratUndurDiriController::class, 'store']);
});

// Dosen Route
Route::middleware(['auth', 'role:dosen'])->group(function () {
    // Dashboard Route
    Route::get('/dashboard/dosen', [DashboardController::class, 'indexDosen'])->name('dashboard.dosen');
    Route::get('/dosen/kurikulum', [KurikulumController::class, 'indexDosen']);
    Route::get('/dosen/daftarMahasiswa', function () {
        return view('contents.dosen.daftarMahasiswa');
    });
});

// Staff Route
Route::middleware(['auth', 'role:staff'])->group(function () {
    // Dashboard Route
    Route::get('/dashboard/staff', [DashboardController::class, 'indexStaff'])->name('dashboard.staff');
    Route::get('/staff/kurikulum', [KurikulumController::class, 'indexStaff']);
});
