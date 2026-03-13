<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Models\Pagina;



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

Route::get('/empresa', [HomeController::class, 'empresa'])->name('empresa');

Route::get('nuevoregistro', function(){
    $pagina=new Pagina;
    $pagina->name="rodrigo";
    $pagina->email="rodrigo1@example.com";
    $pagina->email_verified_at=date('y-m-d h:i:s');
    $pagina->password='12345678';
    $pagina->avatar="avatar.jpg";
    $pagina->telefono="1234567890";
    $pagina->calle="Calle Falsa 123";
    $pagina->save();
    return $pagina;
});

Route::get('buscarpaginaid',function(){
    $post=Pagina::find(1);
    return $post;
});

Route::get('buscarxname',function(){
    $post=Pagina::where('name','rodrigo')->first();
    return $post;
});

Route::get('obtenertodos',function(){
    $post=Pagina::all();
    return $post;
});

Route::get('updatename',function(){
    $post=Pagina::where('name','rodrigo')->first();
    $post->email='rodrigo2@example.com';
    $post->save();
    return $post;
});

Route::get('filter',function(){
    $post=Pagina::where('calle','like','%123%')->orderby("id","desc")->get();
    return $post;
});

Route::get('trescampos', function(){
    $post=Pagina::select('name','email','telefono')->get();
    return $post;
});