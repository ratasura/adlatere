<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    protected $filliable = [
        'tipoDocumento','numeroDocumento','nombres','email',
        'direccion','telefonoDomicilio','telefonoCelular','tipoPersona',
        'nombreComercial','representanteLegal','estadoPersona'
    ];
}
