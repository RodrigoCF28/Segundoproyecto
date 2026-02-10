<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function Mensaje(){
        return "Hola desde el controlador de Post";
    }

    public function About($param=null,$nombre=null){
        $datos = ['parametro'=>$param, 'nombre'=>$nombre];
        return view('about',$datos);
    }

    public function Contacto(){
        return view('contacto',['mensaje'=>'Hola desde el controlador de Post']);
    }

    public function llamado_componente(){
        return view('llamadocomponente');
    }

    public function principal(){
        return view('principal');
    }
}
