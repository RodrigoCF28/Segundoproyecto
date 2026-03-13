<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pagina;
class HomeController extends Controller
{
    public function __invoke()
    {
        return view('hello');
    }

    public function empresa(){
        $datos["nombre"]="Jose Rodrigo";
        $datos["fecha"]="2026-02-20";
        $datos["actividad"]= "Desarrollo de software";
        $datos["descripcion"]= "Empresa dedicada a la creación de soluciones tecnológicas innovadoras";
        $datos["texto_ejemplo"]="Aquí puedes agregar cualquier texto que desees mostrar en la vista de la empresa. Este es un ejemplo de texto para ilustrar cómo se puede utilizar esta sección.";

        $usuarios= new Pagina();
        $datos["listadousuarios"]=$usuarios->ObtenerListado();
        return view('principal',$datos);
    }
}
