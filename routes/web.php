<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [PublicController::class, 'Homepage'])->name('Homepage');

Route::get('/Chi-Siamo', [PublicController::class,'aboutus'])->name('aboutus');

Route::get('/Chi-Siamo/detail/{name}', [PublicController::class, 'ChiSiamodetail'] )->name('ChiSiamodetail');

Route::get('/Contatti',  [PublicController::class, 'Contacts'])->name('Contacts');

Route::get('/movies', [MovieController::class, 'movielist'] )->name('movielist');