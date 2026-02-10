<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;



Route::get('/hello',HomeController::class);
Route::get('post/mensaje', [PostController::class,'Mensaje']);
Route::get('post/about/{param?}/{name?}',[PostController::class,'About']);
Route::get('post/contacto',[PostController::class, 'Contacto']);
Route::get('/principal',[PrincipalController::class, 'index']);
Route::get('/Llamado',[PostController::class,'llamado_componente']);



Route::get('/principalpagina',[PostController::class,'principal']);

Route::get('/', function () {
    return view('welcome');
});


Route::get('/hello/{d}', function ($d=null) {
    return "Hello, world {$d}";
    })->where('d','[0-9]+');


    Route::get('/hello/{x}', function ($x=null) {
        return "Hello, world {$x}";
    })->where('x','[a-z]+');

    Route::get('/principal', function(){
        return 'Bienvenido a la página principal';
    });

    Route::get('about/{param?}', function ($p=null) {
        if(($p==null)||(empty($p))){
            return "No se ha recibido ningún parámetro";
        }
        return "El parámetro recibido es: {$p}";
    });