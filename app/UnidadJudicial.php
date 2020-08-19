<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UnidadJudicial extends Model
{
    
    protected $table = "unidadesjudiciales";

    protected $fillable = [
        'provincia','ciudad','direccion','unidadjudicial','materia','telefono'
    ];
}
