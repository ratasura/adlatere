<div class="row">

    <div class="col-sm-3">
        {{-- aqui incluimos una variable que definimos en el componente principal --}}
        @include("livewire.unidadesjudiciales.$view")    
    </div>

    <div class="col-sm-9 ">
        @include('livewire.unidadesjudiciales.table')
    </div>
</div>
