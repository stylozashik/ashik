<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class , 'index']);
Route::get('/download-cv', [HomeController::class , 'download'])->name('download.cv');
