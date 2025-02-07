<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PelatihanController;
use App\Http\Controllers\PendidikanController;
use App\Http\Controllers\ProjekController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin', [AdminController::class, 'index'])->name('admin.admin');
Route::get('/', action: [DashboardController::class, 'index'])->name('welcome');

//pendidikan
Route::get('/admin/pendidikan', [PendidikanController::class, 'index'])->name('admin.pendidikan.index');
Route::get('/admin/pendidikan/create', [PendidikanController::class, 'create'])->name('admin.pendidikan.create');
Route::post('/admin/pendidikan', [PendidikanController::class, 'store'])->name('admin.pendidikan.store');
Route::get('/admin/pendidikan/edit/{id}', [PendidikanController::class, 'edit'])->name('admin.pendidikan.edit');
Route::put('/admin/pendidikan/{id}', [PendidikanController::class, 'update'])->name('admin.pendidikan.update');
Route::delete('/admin/pendidikan/{id}', [PendidikanController::class, 'destroy'])->name('admin.pendidikan.destroy');

//pelatihan
Route::get('/admin/pelatihan', [PelatihanController::class, 'index'])->name('admin.pelatihan.index');
Route::get('/admin/pelatihan/create', [PelatihanController::class, 'create'])->name('admin.pelatihan.create');
Route::post('/admin/pelatihan', [PelatihanController::class, 'store'])->name('admin.pelatihan.store');
Route::get('/admin/pelatihan/edit/{id}', [PelatihanController::class, 'edit'])->name('admin.pelatihan.edit');
Route::put('/admin/pelatihan/{id}', [PelatihanController::class, 'update'])->name('admin.pelatihan.update');
Route::delete('/admin/pelatihan/{id}', [PelatihanController::class, 'destroy'])->name('admin.pelatihan.destroy');

//projek
Route::get('/admin/projek', [ProjekController::class, 'index'])->name('admin.projek.index');
Route::get('/admin/projek/create', [ProjekController::class, 'create'])->name('admin.projek.create');
Route::post('/admin/projek', [ProjekController::class, 'store'])->name('admin.projek.store');
Route::get('/admin/projek/edit/{id}', [ProjekController::class, 'edit'])->name('admin.projek.edit');
Route::put('/admin/projek/{id}', [ProjekController::class, 'update'])->name('admin.projek.update');
Route::delete('/admin/projek/{id}', [ProjekController::class, 'destroy'])->name('admin.projek.destroy');