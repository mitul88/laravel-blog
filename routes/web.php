<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostsController;



Route::get('/', [PagesController::class, 'index']);

Route::resource('/blog', PostsController::class, ['index']);

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

