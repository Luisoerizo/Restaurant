<?php

use App\Http\Controllers\Admin\ReservationController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\TagController;
use Illuminate\Support\Facades\Route;

Route::get('', [HomeController::class,'index'])->name('admin.home'); //Index o dashboard

Route::resource('categories', CategoryController::class)->names('admin.categories');

Route::resource('tags', TagController::class)->names('admin.tags');

Route::resource('posts', PostController::class)->names('admin.posts');

Route::resource('reservations', ReservationController::class)->names('admin.reservations');

Route::post('chart',[HomeController::class,'chart'])->name('admin.chart');
