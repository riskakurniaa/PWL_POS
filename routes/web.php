<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\MLevelController;
use App\Http\Controllers\MUserController;
use App\Http\Controllers\POSController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/level', [LevelController::class, 'index']);

Route::get('/user', [UserController::class, 'index']);
Route::get('/user/tambah', [UserController::class, 'tambah']);
Route::post('/user/tambah_simpan', [UserController::class, 'tambah_simpan']);
Route::get('/user/ubah/{id}', [UserController::class, 'ubah']);
Route::put('/user/ubah_simpan/{id}', [UserController::class, 'ubah_simpan']);
Route::get('/user/hapus/{id}', [UserController::class, 'hapus']);

Route::get('/kategori', [KategoriController::class, 'index']);
Route::get('/kategori/create', [KategoriController::class, 'create'])->name('kategori.create');
Route::post('/kategori', [KategoriController::class, 'store']);
// Route::get('/kategori/edit/{id}', [KategoriController::class, 'edit']);
// Route::put('/kategori/{id}', [KategoriController::class, 'update']);
// Route::get('/kategori/delete/{id}', [KategoriController::class, 'delete']);

Route::get('/kategori/edit/{id}', [KategoriController::class, 'edit'])->name('kategori.edit');
Route::put('/kategori/{id}', [KategoriController::class, 'update']);
Route::get('/kategori/delete/{id}', [KategoriController::class, 'delete'])->name('kategori.delete');

Route::get('/user', [MUserController::class, 'index'])->name('manage.user');
Route::get('/user/create', [MUserController::class, 'create'])->name('user.create');
Route::post('/user', [MUserController::class, 'store'])->name('user.store');
Route::get('/user/edit/{id}', [MUserController::class, 'edit'])->name('user.edit');
Route::put('/user/{id}', [MUserController::class, 'update']);
Route::get('/user/delete/{id}', [MUserController::class, 'delete'])->name('user.delete');

Route::get('/level', [MLevelController::class, 'index'])->name('manage.level');
Route::get('/level/create', [MLevelController::class, 'create'])->name('level.create');
Route::post('/level', [MLevelController::class, 'store'])->name('level.store');
Route::get('/level/edit/{id}', [MLevelController::class, 'edit'])->name('level.edit');
Route::put('/level/{id}', [MLevelController::class, 'update']);
Route::get('/level/delete/{id}', [MLevelController::class, 'delete'])->name('level.delete');

Route::resource('m_user', POSController::class);
