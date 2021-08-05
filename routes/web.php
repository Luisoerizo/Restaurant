<?php

use App\Http\Controllers\ReservationController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;



Route::get('/',[PostController::class, 'index'])->name('posts.index');

Route::get('posts/{post}',[PostController::class,'show'])->name('posts.show');

Route::get('category/{category}', [PostController::class,'category'])->name('posts.category');

Route::get('tag/{tag}',[PostController::class,'tag'])->name('posts.tag');

Route::resource('reservation', ReservationController::class)->names('reservations');

Route::POST('reservation/buscador',[ReservationController::class,'obtenerReservacion'])->name('reservation.buscador');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
