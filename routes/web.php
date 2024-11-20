<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SuplierController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PinjamBarangController;
use App\Http\Controllers\StokController;
use App\Http\Controllers\BarangKeluarController;
use App\Http\Controllers\BarangMasukController;
 
Route::get('/', function () {
   return view('home');
});

// Rute untuk menampilkan semua data suplier
Route::get('/suplier', [SuplierController::class, 'index'])->name('suplier.index');
// Rute untuk menampilkan form membuat suplier baru
Route::get('/suplier/create', [SuplierController::class, 'create'])->name('suplier.create');
// Rute untuk menambahkan data suplier baru
Route::post('/suplier', [SuplierController::class, 'store'])->name('suplier.store');
// Route untuk menampilkan form edit
Route::get('/suplier/{suplier}', [SuplierController::class, 'edit'])->name('suplier.edit');
// Route untuk mengupdate data supplier
Route::put('/suplier/{suplier}', [SuplierController::class, 'update'])->name('suplier.update');
// Route untuk menghapus data supplier
Route::delete('/suplier/{suplier}', [SuplierController::class, 'destroy'])->name('suplier.destroy');


// Rute untuk menampilkan semua data suplier
Route::get('/user', [UserController::class, 'index'])->name('user.index');
// Rute untuk menampilkan form membuat suplier baru
Route::get('/user/create', [UserController::class, 'create'])->name('user.create');
// Rute untuk menambahkan data suplier baru
Route::post('/user', [UserController::class, 'store'])->name('user.store');
// Route untuk menampilkan form edit
Route::get('/user/{user}', [UserController::class, 'edit'])->name('user.edit');
// Route untuk mengupdate data supplier
Route::put('/user/{user}', [UserController::class, 'update'])->name('user.update');
// Route untuk menghapus data supplier
Route::delete('/user/{user}', [UserController::class, 'destroy'])->name('user.destroy');


// Rute untuk menampilkan semua data suplier
Route::get('/PinjamBarang', [PinjamBarangController::class, 'index'])->name('PinjamBarang.index');
// Rute untuk menampilkan form membuat suplier baru
Route::get('/PinjamBarang/create', [PinjamBarangController::class, 'create'])->name('PinjamBarang.create');
// Rute untuk menambahkan data suplier baru
Route::post('/PinjamBarang', [PinjamBarangController::class, 'store'])->name('PinjamBarang.store');
// Route untuk menampilkan form edit
Route::get('/PinjamBarang/{PinjamBarang}', [PinjamBarangController::class, 'edit'])->name('PinjamBarang.edit');
// Route untuk mengupdate data supplier
Route::put('/PinjamBarang/{PinjamBarang}', [PinjamBarangController::class, 'update'])->name('PinjamBarang.update');
// Route untuk menghapus data supplier
Route::delete('/PinjamBarang/{PinjamBarang}', [PinjamBarangController::class, 'destroy'])->name('PinjamBarang.destroy');


// Rute untuk menampilkan semua data suplier
Route::get('/Stok', [StokController::class, 'index'])->name('stok.index');
// Rute untuk menampilkan form membuat suplier baru
Route::get('/Stok/create', [StokController::class, 'create'])->name('stok.create');
// Rute untuk menambahkan data suplier baru
Route::post('/Stok', [StokController::class, 'store'])->name('stok.store');
// Route untuk menampilkan form edit
Route::get('/Stok/{Stok}', [StokController::class, 'edit'])->name('stok.edit');
// Route untuk mengupdate data supplier
Route::put('/Stok/{Stok}', [StokController::class, 'update'])->name('stok.update');
// Route untuk menghapus data supplier
Route::delete('/Stok/{Stok}', [StokController::class, 'destroy'])->name('stok.destroy');


// Rute untuk menampilkan semua data suplier
Route::get('/BarangKeluar', [BarangKeluarController::class, 'index'])->name('BarangKeluar.index');
// Rute untuk menampilkan form membuat suplier baru
Route::get('/BarangKeluar/create', [BarangKeluarController::class, 'create'])->name('BarangKeluar.create');
// Rute untuk menambahkan data suplier baru
Route::post('/BarangKeluar', [BarangKeluarController::class, 'store'])->name('BarangKeluar.store');
// Route untuk menampilkan form edit
Route::get('/BarangKeluar/{BarangKeluar}', [BarangKeluarController::class, 'edit'])->name('BarangKeluar.edit');
// Route untuk mengupdate data supplier
Route::put('/BarangKeluar/{BarangKeluar}', [BarangKeluarController::class, 'update'])->name('BarangKeluar.update');
// Route untuk menghapus data supplier
Route::delete('/BarangKeluar/{BarangKeluar}', [BarangKeluarController::class, 'destroy'])->name('BarangKeluar.destroy');


// Rute untuk menampilkan semua data suplier
Route::get('/BarangMasuk', [BarangMasukController::class, 'index'])->name('BarangMasuk.index');
// Rute untuk menampilkan form membuat suplier baru
Route::get('/BarangMasuk/create', [BarangMasukController::class, 'create'])->name('BarangMasuk.create');
// Rute untuk menambahkan data suplier baru
Route::post('/BarangMasuk', [BarangMasukController::class, 'store'])->name('BarangMasuk.store');
// Route untuk menampilkan form edit
Route::get('/BarangMasuk/{BarangMasuk}', [BarangMasukController::class, 'edit'])->name('BarangMasuk.edit');
// Route untuk mengupdate data supplier
Route::put('/BarangMasuk/{BarangMasuk}', [BarangMasukController::class, 'update'])->name('BarangMasuk.update');
// Route untuk menghapus data supplier
Route::delete('/BarangMasuk/{BarangMasuk}', [BarangMasukController::class, 'destroy'])->name('BarangMasuk.destroy');

