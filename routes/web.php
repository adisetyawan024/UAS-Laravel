<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\GolonganController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PemakaianController;
use App\Http\Controllers\TahunController;
use App\Http\Controllers\LoginController;
use App\Http\Middleware\guestLogin;
use GuzzleHttp\Middleware;

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
//     return view('welcome ');
// });

Route::get('/coming-soon', function () {
    return view('coomingsoon');
})->name('comingsoon');

Route::get('/home', [HomeController::class, 'index'])->name('newHome');

Route::get('/admin/home', function () {
    return view('dashboard/dashboard');
})->name('home')->middleware('cekLevel');

Route::get('/', function () {
    return view('index');
})->name('index');

// Menu Tagihan
Route::get('/admin/tagihan', function () {
    return view('tagihan/tagihan');
})->name('tagihan')->middleware('cekLevel');

Route::controller(PemakaianController::class)->group(function () {
    Route::get('/admin/bayar-tagihan', 'bayarTagihanView')->name('bayar-tagihan');
    Route::post('/admin/bayar-tagihan/pelanggan', 'bayarTagihanDet')->name('bayar-tagihan-detail');
    Route::post('/admin/bayar-tagihan/sukses', 'actionBayarTagihanAll')->name('bayar-tagihan-sukses');
});

// menu untuk kasir
Route::get('/admin/bayar-tagihan', [PemakaianController::class, 'bayarTagihanView'])->name('bayar-tagihan');
Route::post('/admin/bayar-tagihan/pelanggan', [PemakaianController::class, 'bayarTagihanDet'])->name('bayar-tagihan-detail');
Route::post('/admin/bayar-tagihan/sukses', [PemakaianController::class, 'actionBayarTagihanAll'])->name('bayar-tagihan-sukses');

//menu untuk pencatat air
Route::get('/admin/catat-tagihan', [PemakaianController::class, 'catatPemakaian'])->name('catat-tagihan');
Route::post('/admin/catat-tagihan/pelanggan', [PemakaianController::class, 'detailCatatTagihan'])->name('catat-tagihan-detail');
Route::post('/admin/catat-tagihan/sukses', [PemakaianController::class, 'suksesCatatTagihan'])->name('catat-tagihan-sukses');

// Menu Data
Route::get('/admin/data', function () {
    return view('data/menu');
})->name('data')->middleware('cekLevel');

// Menu Data - Pelanggan
Route::get('/admin/data-pelanggan', [PelangganController::class, 'index'])->name('data-pelanggan');
Route::get('/admin/data-pelanggan/detail/{id}', [PelangganController::class, 'editPage'])->name('data-pelanggan-detail');
Route::post('/admin/data-pelanggan/editSimpan/{id}', [PelangganController::class, 'saveEdit'])->name('data-pelanggan-detail-simpan');
Route::post('/admin/data-pelanggan/tambah', [PelangganController::class, 'tambah'])->name('data-pelanggan-detail-tambah');
Route::get('/admin/data-pelanggan/hapus/{id}', [PelangganController::class, 'hapus'])->name('data-pelanggan-detail-hapus');

Route::get('/admin/data-pelanggan/pembayaran/{id}', [PelangganController::class, 'detailPembayaranIndex'])->name('data-pelanggan-pembayaran-detail');

Route::get('/admin/data-pelanggan/pembayaran/{id}/invoice', [PemakaianController::class, 'invoice'])->name('data-pelanggan-pembayaran-invoice');

Route::get('/admin/data-pelanggan/pembayaran/{id}/edit', [PemakaianController::class, 'showEdit'])->name('data-pelanggan-pembayaran-edit');
Route::post('/admin/data-pelanggan/pembayaran/{id}/edit/simpan', [PemakaianController::class, 'saveEdit'])->name('data-pelanggan-pembayaran-save');
Route::get('/admin/data-pelanggan/pembayaran/{id}/hapus', [PemakaianController::class, 'hapus'])->name('data-pelanggan-pembayaran-hapus');

// Menu Data - Golongan 
Route::get('/admin/data-golongan-tarif', [GolonganController::class, 'index'])->name('data-golongan-tarif');
Route::post('/admin/data-golongan-tarif/tambah', [GolonganController::class, 'tambah'])->name('data-golongan-tarif-tambah');
Route::get('/admin/data-golongan-tarif/hapus/{id}', [GolonganController::class, 'hapus'])->name('data-golongan-tarif-hapus');
Route::get('/admin/data-golongan-tarif/edit/{id}', [GolonganController::class, 'editPage'])->name('data-golongan-tarif-edit');
Route::post('/admin/data-golongan-tarif/edit-simpan/{id}', [GolonganController::class, 'saveEdit'])->name('data-golongan-tarif-edit');

// Menu Data - Pemakaian
Route::get('/admin/data-pemakaian', [PemakaianController::class, 'index'])->name('data-pemakaian');

// Menu Data - Laporan
Route::get('/admin/laporan', function () {
    return view('data/laporan');
})->name('data-laporan');
Route::get('/admin/laporan-detail', function () {
    return view('data/laporanDetail');
})->name('data-laporan-detail');

// WhatsApp
Route::get('/admin/whatsapp', function () {
    return view('whatsapp/whatsapp');
})->name('whatsapp');

Route::get('/admin/whatsapp/data', function () {
    return view('whatsapp/data');
})->name('whatsapp-data');

Route::get('/admin/whatsapp/scan', function () {
    return view('whatsapp/scan');
})->name('whatsapp-scan');

// Setting
Route::get('/admin/setting', function () {
    return view('setting/menu');
})->name('setting')->middleware('cekLevel');

Route::get('/admin/setting-admin', [AdminController::class, 'index'])->name('admin');
Route::get('/admin/setting-admin/detail/{id}', [AdminController::class, 'editPage'])->name('admin-detail');
Route::post('/admin/setting-admin/detail-save/{id}', [AdminController::class, 'saveEdit'])->name('admin-detail');
Route::post('/admin/setting-admin/tambah', [AdminController::class, 'tambah'])->name('admin-detail-tambah');
Route::get('/admin/setting-admin/hapus/{id}', [AdminController::class, 'hapus'])->name('admin-detail-hapus');

Route::get('/admin/setting-tahun', [TahunController::class, 'index'])->name('tahun');
Route::post('/admin/setting-tahun/tambah', [TahunController::class, 'tambah'])->name('tahun-tambah');
Route::get('/admin/setting-tahun/detail/{id}', [TahunController::class, 'editShow'])->name('tahun-detail');
Route::post('/admin/setting-tahun/detail/{id}/simpan', [TahunController::class, 'save'])->name('tahun-detail-simpan');
Route::get('/admin/setting-tahun/detail/{id}/hapus', [TahunController::class, 'hapus'])->name('tahun-detail-hapus');


// akun
Route::get('/akun', function () {
    return view('setting/akun');
})->name('akun')->middleware(['cekLevel', 'Admin']);

//Route Login
Route::controller(LoginController::class)->group(function () {
    Route::get('logout', 'logout');
    Route::get('login', 'index')->name('login')->middleware('guestLogin');
    Route::post('login/proses', 'prosesLogin');
});
