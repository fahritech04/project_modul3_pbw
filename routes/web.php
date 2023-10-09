<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CollectionController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| 
| 
| 6706223009 - Muhammad Raihan Fahrifi
|
*/

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/koleksi', [CollectionController::class, 'index'])->name('koleksi');
Route::get('/koleksiTambah', [CollectionController::class, 'create'])->name('koleksi.registrasi');
Route::post('/koleksiStore', [CollectionController::class, 'store'])->name('koleksi.daftarKoleksi');
Route::delete('/koleksi/{collection}', [CollectionController::class, 'destroy'])->name('koleksi.destroy');
Route::get('/koleksiView/{collection}', [CollectionController::class, 'show'])->name('koleksi.infoKoleksi');

Route::get('/user', [ProfileController::class, 'index'])->name('user.daftarPengguna');
Route::get('/userView/{user}', [ProfileController::class, 'show'])->name('user.infoPengguna');
Route::delete('/userDelete', [ProfileController::class, 'destroy'])->name('user.destroy');

// Route::put('/koleksi/{collection}/edit', [CollectionController::class, 'edit'])->name('koleksi.update');
// Route::post('/koleksi/{collection}', [CollectionController::class, 'update'])->name('koleksi.update');

// Route::put('/koleksi/{collection}', [CollectionController::class, 'update'])->name('koleksi.update');
// Route::get('/collections', [CollectionController::class, 'store'])->name('collections.store');
// Route::get('/collections/create', [CollectionController::class, 'create'])->name('collections.create');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
