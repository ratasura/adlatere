@extends('layouts.app')


@section('content')


<div class="container">
    <div id="app" class="row">
        {{-- <div class="col-xs-12">
            <h1 class="page-header">Listado de personas</h1>
        </div> --}}
        <div class="col-sm-12">
            <a href="#" class="btn btn-primary pull-right" data-toggle="modal" data-target="#create">
                Nueva Persona
            </a>

            <table class="table table-hover table-striped">
                <thead>
                    <tr>
                        <th>Nombres</th>
                        <th>Correo</th>
                        <th>Tipo Documento</th>
                        <th>Valor</th>
                        <th>Tipo Persona</th>
                        <th colspan="2">
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="persona in personas">
                        <td> @{{persona.nombres}} </td>
                        <td> @{{persona.email}} </td>
                        <td>@{{persona.tipoDocumento}}</td>
                        <td>@{{persona.valorDocumento}}</td>
                        <td>@{{persona.tipoPersona}}</td>
                        <td width="10px">
                            <a href="#" class="btn btn-primary btn-sm">Editar</a>
                        </td>
                        <td width="10px">
                            <a href="#" class="btn btn-danger btn-sm" v-on:click.prevent="deletePersonas(persona)">Eiminar</a>
                        </td>
                    </tr>
                </tbody>
            </table>
            {{-- modal para crear persona --}}
            @include('personas.modalcrearpersona')
        </div>
        <div class="col-sm-4">
            <pre>
                {{-- @{{ $data }} --}}
            </pre>
        </div>

    </div>
</div>




@endsection