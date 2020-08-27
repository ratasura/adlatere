<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    protected $fillable = ['tipoDocumento', 'valorDocumento', 
    'nombres','email','direccion','telefonoDomicilio',
    'telefonoCelular','tipoPersona',
    'nombreComercial','representanteLegal',
    'estadoPersona'];
}
