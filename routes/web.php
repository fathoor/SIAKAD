<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FRSController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SuratController;
use App\Http\Controllers\BiodataController;
use App\Http\Controllers\CivitasController;
use App\Http\Controllers\TagihanController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KuesionerController;
use App\Http\Controllers\KurikulumController;
use App\Http\Controllers\SuratCutiController;
use App\Http\Controllers\TranskripController;
use App\Http\Controllers\SuratAktifController;
use App\Http\Controllers\DaftarKelasController;
use App\Http\Controllers\HasilKuesionerController;
use App\Http\Controllers\SuratUndurDiriController;
use App\Http\Controllers\DaftarMahasiswaController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\NilaiMahasiswaController;

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

Route::middleware('auth')->group(function () {
    // Error Route
    Route::get('/restricted', function () {
        return view('restricted');
    })->name('error');

    // Profile Route
    Route::get('/biodata', [BiodataController::class, 'index']);
    Route::get('/biodata/edit', [BiodataController::class, 'edit']);
    Route::post('/biodata/update', [BiodataController::class, 'update']);

    // Peserta Route
    Route::get('/peserta/{kodeMK}/{kelas}', [DaftarKelasController::class, 'kelas']);
});

// Mahasiswa Route
Route::middleware(['auth', 'role:mahasiswa'])->group(function () {
    // Dashboard Route
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // Akademik Route
    Route::get('/frs',  [FRSController::class, 'index']);
    Route::post('/frs',  [FRSController::class, 'index']);
    Route::post('/frs/store',  [FRSController::class, 'store']);

    // Transkrip Route
    Route::get('/transkrip', [TranskripController::class, 'index']);
    Route::post('/transkrip/view', [TranskripController::class, 'view']);

    // Kurikulum Route
    Route::get('/kurikulum', [KurikulumController::class, 'indexMahasiswa']);

    // Kuesioner Route
    Route::get('/kuesioner', [KuesionerController::class, 'index']);
    Route::post('/kuesioner/gantiPeriode', [KuesionerController::class, 'ganti']);
    Route::post('/kuesioner/isi', [KuesionerController::class, 'isi']);
    Route::post('/kuesioner/submit', [KuesionerController::class, 'submit']);

    // Finansial Route
    Route::get('/ukt', [TagihanController::class, 'index']);
    Route::post('/ukt/detail', [TagihanController::class, 'detail']);

    // Layanan Route
    Route::get('/surat/{type}', [SuratController::class, 'index']);
    Route::post('/surat/{type}/store', [SuratController::class, 'store']);
    Route::get('/surat/{type}/cetak/{id}', [SuratController::class, 'cetak']);
});

// Dosen Route
Route::middleware(['auth', 'role:dosen'])->group(function () {
    // Dashboard Route
    Route::get('/dashboard/dosen', [DashboardController::class, 'indexDosen'])->name('dashboard.dosen');

    // Akademik
    Route::get('/dosen/kurikulum', [KurikulumController::class, 'indexDosen']);
    Route::get('/dosen/mataKuliah', [DaftarKelasController::class, 'index']);

    // Kuesioner
    Route::get('/dosen/kuesioner', [HasilKuesionerController::class, 'index']);
    Route::post('/dosen/kuesioner/gantiPeriode', [HasilKuesionerController::class, 'ganti']);
    Route::post('/dosen/kuesioner/hasil', [HasilKuesionerController::class, 'hasil']);

    // Mahasiswa
    Route::get('/dosen/daftarMahasiswa', [DaftarMahasiswaController::class, 'index']);
    Route::get('/dosen/daftarMahasiswa/search', [DaftarMahasiswaController::class, 'search']);
    Route::get('/dosen/FRS', [FRSController::class, 'indexDosen']);
    Route::post('/dosen/FRS', [FRSController::class, 'indexDosen']);
    Route::post('/dosen/FRS/accept{NRP}', [FRSController::class, 'accept']);

    //Nilai Mahasiswa
    Route::get('/dosen/nilai', [NilaiMahasiswaController::class, 'index']);
    Route::post('/dosen/nilai', [NilaiMahasiswaController::class, 'index']);
    Route::post('/dosen/nilai/{NRP}', [NilaiMahasiswaController::class, 'update']);
});

// Staff Route
Route::middleware(['auth', 'role:staff'])->group(function () {
    // Dashboard Route
    Route::get('/dashboard/staff', [DashboardController::class, 'indexStaff'])->name('dashboard.staff');
    Route::get('/staff/kurikulum', [KurikulumController::class, 'indexStaff']);
    Route::post('/staff/kurikulum/add', [KurikulumController::class, 'create']);
    Route::post('/staff/kurikulum/update{id}', [KurikulumController::class, 'update']);
    Route::get('/staff/kurikulum/delete/{id}', [KurikulumController::class, 'delete']);

    //Akademik
    Route::get('/staff/kelas', [KelasController::class, 'index']);
    Route::post('/staff/kelas/store', [KelasController::class, 'store']);
    Route::post('/staff/kelas/update/{kodeMK}/{kelas}', [KelasController::class, 'update']);
    Route::get('/staff/kelas/delete/{kodeMK}/{kelas}', [KelasController::class, 'delete']);

    // Civitas
    Route::get('/staff/civitas', [CivitasController::class, 'index']);
    Route::post('/staff/civitas/store', [CivitasController::class, 'store']);
    Route::post('/staff/civitas/update/{NRP}', [CivitasController::class, 'update']);
    Route::get('/staff/civitas/delete/{NRP}', [CivitasController::class, 'delete']);

    // Finansial
    Route::get('/staff/ukt', [TagihanController::class, 'indexStaff']);
    Route::post('/staff/ukt/detail', [TagihanController::class, 'detailStaff']);
    Route::post('/staff/ukt/verificate/{NRP}/{periode}', [TagihanController::class, 'verificate']);

    // Layanan
    Route::get('/staff/surat', [SuratController::class, 'indexStaff']);
    Route::post('/staff/surat', [SuratController::class, 'indexStaff']);
    Route::post('/staff/surat/verifikasi', [SuratController::class, 'verificate']);
});
