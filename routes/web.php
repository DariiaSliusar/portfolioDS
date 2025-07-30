<?php

use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\MediaController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//    return view('welcome');
//});


Route::get('/', [PageController::class, 'index'])->name('pages.index');
Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
//abouts routes
Route::get('/admin/abouts', [AboutController::class, 'edit'])->name('abouts.edit');
Route::patch('admin/abouts', [AboutController::class, 'update'])->name('abouts.update');
//medias routes
Route::get('/admin/medias', [MediaController::class, 'index'])->name('medias.index');
Route::post('/admin/medias', [MediaController::class, 'store'])->name('medias.store');
Route::delete('/admin/medias/{media}', [MediaController::class, 'destroy'])->name('medias.destroy');
//services routes
Route::get('/admin/services', [ServiceController::class, 'index'])->name('admin.services.index');
Route::post('/admin/services', [ServiceController::class, 'store'])->name('admin.services.store');
Route::get('/admin/services/{service}/edit', [ServiceController::class, 'edit'])->name('admin.services.edit');
Route::patch('/admin/services/{service}', [ServiceController::class, 'update'])->name('admin.services.update');
Route::delete('/admin/services/{service}', [ServiceController::class, 'destroy'])->name('admin.services.destroy');




Route::get('/{any}', function () {
    return view('notFoundPage');
})->where('any', '.*');
