@include('livewire.unidadesjudiciales.search')
<h2>Listado de Unidades Judiciales</h2>

<table class="table table-light">
    <thead class="thead-light">
        <tr>
            {{-- <th>Provincia</th> --}}
            <th>Ciudad</th>
            {{-- <th>Direccion</th> --}}
            <th>Unidad Judicial</th>
            <th>Materia</th>
            <th  colspan="2">&nbsp;</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($unidades as $unidad)
        <tr>
            {{-- <td> {{$unidad->provincia}} </td> --}}
            <td> {{$unidad->ciudad}} </td>
            {{-- <td> {{$unidad->direccion}} </td> --}}
            <td> {{$unidad->unidadjudicial}} </td>
            <td> {{$unidad->materia}} </td>
            <td>
                <button wire:click="edit({{ $unidad->id }})" class="btn btn-primary">
                    Editar
                </button>
            </td>
            <td>
                <button wire:click="destroy({{ $unidad->id }})" class="btn btn-danger">
                    Eliminar
                </button>
            </td>
        </tr>    
        @endforeach
        
    </tbody>
</table>

{{ $unidades->links() }}