<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataController;

Route::get('/', function () {
    return view('welcome');
});
Route::POST('/store', [DataController::class, 'store'])->name('store');
Route::get('/users', [DataController::class, 'index'])->name('users.index');
