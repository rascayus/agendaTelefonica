<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agenda extends Model
{
    protected $fillable =['nombres','apellidos','celular','telefono','sexo','email','posicion','departamento','salario','fechadenacimiento'];

    public function scopeBuscarpor($query,$tipo,$buscar){
        if(($tipo && $buscar)){
            return $query->where($tipo,'like',"%$buscar%");

        }
    }
    
}
