<?php

namespace App\Http\Livewire;
use App\Juzgado as Juzgados;
use Livewire\Component;

class Juzgado extends Component
{
    public $data, $nombre, $tipo, $direccion, $selected_id;
    public $updateMode = false;

    public function render()
    {
        $this->data = Juzgados::all();
        return view('livewire.juzgado');
    }
    private function resetInput()
    {
        $this->nombre = null;
        $this->tipo = null;
        $this->direccion = null;
    }

    public function store()
    {
        $this->validate([
            'nombre' => 'required|max:40',
            'tipo' => 'required|max:40',
            'direccion' => 'required|max:40'
        ]);
        Juzgados::create([
            'nombre' => $this->nombre,
            'tipo' => $this->tipo,
            'direccion' => $this->direccion
        ]);
        $this->resetInput();
    }

    public function edit($id){
        $record = Juzgados::findOrFail($id);
        $this->selected_id = $id;
        $this->nombre = $record->nombre;
        $this->tipo = $record->tipo;
        $this->direccion = $record->direccion;
        $this->updateMode = true;
    }

    public function update(){

        $this->validate([
            'nombre' => 'required|max:40',
            'tipo' => 'required|max:40',
            'direccion' => 'required|max:40'
        ]);
        if ($this->selected_id) {
            $record = Juzgados::find($this->selected_id);
            $record->update([
                'nombre' => $this->nombre,
            'tipo' => $this->tipo,
            'direccion' => $this->direccion
            ]);
            $this->resetInput();
            $this->updateMode = false;
        }
    }

    public function destroy($id)
    {
        if ($id) {
            $record = Juzgados::where('id', $id);
            $record->delete();
        }
    }
}
