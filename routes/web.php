<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BukuController;

//tambah data
Route::get('/buku',[BukuController::class, 'index'])->name('buku');
Route::get('/create',[BukuController::class, 'create'])->name('form-create');
Route::post('/store',[BukuController::class, 'store'])->name('store');

//detail
Route::get('/show/{id}/detail-buku',[BukuController::class, 'show'])->name('detail-buku');

//edit
Route::get('/edit/{id}/edit-buku',[BukuController::class, 'edit'])->name('edit-buku');
Route::put('/update/{id}/update-buku',[BukuController::class, 'update'])->name('update-buku');

//hapus
Route::delete('/delete/{id}/delete-buku',[BukuController::class, 'destroy'])->name('delete-buku');




Route::get('/', function () {
    return view('pages.beranda');
});

Route::get('/beranda', function () {
    return view('pages.beranda');
});

Route::get('/profil', function () {
    return view('pages.profil');
});

Route::get('/tentang-kami', function () {
    return view('pages.tentang-kami');
});

Route::get('/produk', function () {
    return view('pages.produk');
});


