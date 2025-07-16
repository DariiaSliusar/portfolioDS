<?php

use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\MediaController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//    return view('welcome');
//});


Route::get('/', [PageController::class, 'index'])->name('pages.index');
Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');

Route::get('/admin/abouts', [AboutController::class, 'edit'])->name('abouts.edit');
Route::patch('admin/abouts', [AboutController::class, 'update'])->name('abouts.update');

Route::get('/admin/medias', [MediaController::class, 'index'])->name('medias.index');
Route::post('/admin/medias', [MediaController::class, 'store'])->name('medias.store');
Route::delete('/admin/medias/{media}', [MediaController::class, 'destroy'])->name('medias.destroy');



Route::get('/{any}', function () {
    return view('notFoundPage');
})->where('any', '.*');
