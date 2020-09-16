<?php

namespace App\Http\Controllers;

use App\Http\Requests\PersonaFormRequest;
use App\Persona;
use Illuminate\Http\Request;

class PersonaController extends Controller
{
    
    public function index()
    {
        $personas = Persona::get();
        return $personas;
    }

   
    public function store(PersonaFormRequest $request)
    {
        // $this->validate($request, [
        //     'tipoDocumento' =>'required|max:10',
        //     'valorDocumento'=>'required|max:13',
        //     'nombres'=>'required|max:50',
        //     'email'=>'required|unique',
        //     'direccion'=>'max:100',
        //     'telefonoDomicilio'=>'max:100',
        //     'telefonoCelular'=>'required|max:13',
        //     'tipoPersona'=>'required|max:15',
        //     'nombreComercial'=>'required|max:50',
        //     'representanteLegal'=>'required|max:50',
        //     'estadoPersona'=>'required',
        // ]);
        Persona::create( $request->all());
        return;
    }

  

   
    public function update(PersonaFormRequest $request, $id)
    {
        Persona::find($id)->update($request->all());
        return;
    }

  
    public function destroy($id)
    {
        $persona= Persona::findOrFail($id);
        $persona->delete();
    }
}
