<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/berita/{slug}', [HomeController::class, 'detailPost'])->name('post.detail');
Route::get('/psb', [HomeController::class, 'psbPage'])->name('psb.index');