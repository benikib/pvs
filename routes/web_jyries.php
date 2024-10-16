<?php

use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\JuriesController;
use App\Models\Bulletin;
use Illuminate\Support\Facades\Route;

Route::resource("jyries", JuriesController::class);
Route::resource("etudiant", EtudiantController::class);
Route::resource("bulletin", Bulletin::class);
//Route::post('/resultat', [EtudiantController::class, 'store'])->name("etudiant.store");