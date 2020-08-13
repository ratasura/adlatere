<div>
    @if($updateMode)
        @include('livewire.update')
    @else
        @include('livewire.create')
    @endif
    <table class="table-auto w-full">
        <thead>
            <tr class="bg-gray-200">
                <th class="px-4 py-2">#</th>
                <th class="px-4 py-2">Nombre</th>
                <th class="px-4 py-2">Tipo</th>
                <th class="px-4 py-2">Dirección</th>
                <th class="px-4 py-2">acciones</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($data as $item)
                <tr class="text-center">
                    <td class="border px-4 py-2">{{ $item->id }}</td>
                    <td class="border px-4 py-2">{{ $item->nombre }}</td>
                    <td class="border px-4 py-2">{{ $item->tipo }}</td>
                    <td class="border px-4 py-2">{{ $item->direccion }}</td>
                    <td class="border px-4 py-2">
                        <button wire:click="edit({{ $item->id }})" class="px-2 py-1 bg-blue-200 text-blue-500 hover:bg-blue-500 hover:text-white rounded">Editar</button>
                        <button wire:click="destroy({{ $item->id }})" class="px-2 py-1 bg-red-200 text-red-500 hover:bg-red-500 hover:text-white rounded">Borrar</button>
                    </td>
                </tr>
            @empty
                <tr class="text-center">
                    <td colspan="4" class="py-3 italic">No hay información</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
