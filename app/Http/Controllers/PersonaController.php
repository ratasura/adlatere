<?php

namespace App\Http\Controllers;

use App\Http\Requests\PersonaFormRequest;
use App\Persona;
use Illuminate\Http\Request;

class PersonaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $personas = Persona::get();
        return $personas;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function create()
    // {
        // se elimina el create por que a vista la llamamos a traves de modal en el formaulario
    // }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $persona= Persona::findOrFail($id);
        $persona->delete();
    }
}
