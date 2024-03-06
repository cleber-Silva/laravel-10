<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\SupportController;
use App\Http\Controllers\Site\SiteController;
use Illuminate\Support\Facades\Route;

//Route::get('/contact', [SiteController::class, 'contact'] );

Route::get('/supports', [SupportController::class, 'index'] )->name('supports.index');
Route::get('/supports/create', [SupportController::class, 'create'] )->name('supports.create');
Route::post('/supports', [SupportController::class, 'store'] )->name('supports.store');


Route::get('/', function () {
    return view('welcome');
});

Route::get('/cantact', function () {
    return view('contact');
})->middleware(['auth', 'verified'])->name('contact');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
