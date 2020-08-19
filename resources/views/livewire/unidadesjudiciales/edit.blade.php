<h2>Editar UJ</h2>
{{-- form sirve para crear y editar --}}
@include('livewire.unidadesjudiciales.form')
<button wire:click="update" class="btn btn-primary">
    Actualizar
</button>
<button wire:click="default" class="btn btn-link">
    Cancelar
</button>