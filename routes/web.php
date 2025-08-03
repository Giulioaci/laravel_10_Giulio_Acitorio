<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;


Route::get('/', [PublicController::class, 'Homepage'])->name('Homepage');

Route::get('/Chi-Siamo', [PublicController::class,'aboutus'])->name('aboutus');

Route::get('/Chi-Siamo/detail/{name}', [PublicController::class, 'ChiSiamodetail'] )->name('ChiSiamodetail');

Route::get('/Contatti',  [PublicController::class, 'Contacts'])->name('Contacts');

Route::get('/movies', [MovieController::class, 'movielist'] )->name('movielist');

Route::post('/contact-us', [PublicController::class, 'contactUs'] )->name('contactUs');

Route::get('/movie/create', [MovieController::class, 'create'] )->name('movie.create')->middleware('auth');

Route::post('/movie/submit', [MovieController::class, 'store'] )->name('movie.submit');

Route::post('/movie/Create', [MovieController::class, 'store'] )->name('movie.submit');

Route::get('/movie/show/{movie}', [MovieController::class, 'show'] )->name('movie.show');

Route::get('/movie/edit/{movie}', [MovieController::class, 'edit'] )->name('movie.edit')->middleware('auth');

Route::put('/movie/update/{movie}', [MovieController::class, 'update'] )->name('movie.update')->middleware('auth');

Route::delete('/movie/delete/{movie}', [MovieController::class, 'destroy'] )->name('movie.delete')->middleware('auth');

Route::get('/user/profile', [PublicController::class, 'profile'] )->name('user.profile');

Route::get('/Genre/create', [GenreController::class, 'create'] )->name('Genre.create')->middleware('auth');

Route::post('/Genre/create/submit', [GenreController::class, 'store'] )->name('Genre.submit');

Route::get('/Genre/index', [GenreController::class, 'index'] )->name('Genre.index')->middleware('auth');

Route::get('/Genre/show/{Genre}', [GenreController::class, 'show'])->name('Genre.show');









