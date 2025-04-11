<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LayoutController;

Route::get('/admin', [LayoutController::class, 'admin']);
Route::get('/user', [LayoutController::class, 'user']);
Route::get('/', function () {
    return view('welcome');
});
