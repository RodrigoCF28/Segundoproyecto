<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\postController;

Route::get('/hello',HomeController::class);
Route::get('post/mensaje', [postController::class,'Mensaje']);
Route::get('/', function () {
    return view('welcome');
});
