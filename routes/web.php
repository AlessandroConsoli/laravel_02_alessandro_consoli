<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
// FILE di ROUTING

// ROTTA NOMINALE
// METODO NAME PER ASSEGNARE IL NOME AD UNA ROTTA
Route::get('/', [PublicController::class, 'homepage'])->name('homepage');

Route::get('/about_us', [PublicController::class, 'usersList'])->name('chi.siamo');

Route::get('/shop', [PublicController::class, 'shopPage'])->name('shop');

Route::get('/services', [PublicController::class, 'showServices'])->name('services');

