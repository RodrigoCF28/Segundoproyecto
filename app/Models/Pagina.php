<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;


class Pagina extends Model
{

//proceso de transformación de datos sin importar el formato de entrada, se puede usar para convertir datos a un formato específico antes de guardarlos en la base de datos o antes de devolverlos al cliente. Esto es útil para garantizar que los datos se almacenen y se devuelvan en un formato consistente, independientemente de cómo se reciban inicialmente.
    protected $table='paginas';

    protected function cast():array{
        return [
            'created_at'=>'datetime',
            'is_active'=>'boolean',
        ];
    }
    //protected $fillable=['name','email','password','avatar','telefono','calle'];

    public function ObtenerListado(){
        $listadousuarios=Pagina::all();
        return $listadousuarios;
    }

    //El método BuscarId($id) es una función que busca un registro específico en la base de datos utilizando el modelo Pagina. Utiliza el método find() para buscar un registro por su ID y devuelve el resultado. Si no se encuentra ningún registro con el ID proporcionado, devolverá null.
    public function BuscarId($id){
        $registro=Pagina::find($id);
        return $registro;
    }

    protected function name():Attribute{
        return Attribute::make(
            set: function($value){ //mutador para transformar el valor antes de guardarlo en la base de datos
                return strtolower($value);
            },
            get: function($value){ //accesor para transformar el valor antes de devolverlo al cliente o a la vista
                return ucfirst($value);
            }
        );
    }

}
