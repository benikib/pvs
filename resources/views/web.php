<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RepportingController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/dashboard', [HomeController::class, 'index'])->name("dashboard");
    Route::get('/administrateur', [RepportingController::class, 'admin'])->name("admin");
    Route::post('/administrateur/store', [RepportingController::class, 'admin_store'])->name("admin_store");
    Route::get('/administrateur/delete/{id}', [RepportingController::class, 'destroy_admin'])->name("admin.delete");

});

require __DIR__.'/auth.php';
