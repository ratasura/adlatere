<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\UnidadJudicial;

class UnidadJudicialComponent extends Component
{
    use WithPagination;
    protected $updatesQueryString = ['search'];
    public $search;
    public $unidad_id, $provincia, $ciudad, $direccion, $unidadjudicial, $materia, $telefono; // variables  a las que  hace referencia wire:model="variable"  en el form de lcompnente 
    public $view = 'create'; // variable que se crea en el include 
    
    public function mount()
    {
        $this->search = request()->query('search', $this->search);
    }
    
    public function render()
    {
        return view('livewire.unidad-judicial-component', [
            'unidades' => UnidadJudicial::where('ciudad', 'like','%'.$this->search.'%')->paginate(10)
        ]);
    }

    public function store(){
        $this->validate(['provincia' => 'required', 'ciudad' => 'required'
            , 'direccion' => 'required', 'unidadjudicial' => 'required', 'materia' => 'required',
            'telefono' => 'required'
        ]);
        
        
        
        $unidad  = UnidadJudicial::create([
            'provincia' => $this->provincia,
            'ciudad' => $this->ciudad,
            'direccion' => $this->direccion,
            'unidadjudicial' => $this->unidadjudicial,
            'materia' => $this->materia,
            'telefono' => $this->telefono
        ]);
        $this->edit($unidad->id);
        $this->default();
       // session()->flash('message', 'Unidad Judicial guardada correctamente');
       return back()->with('success','Unidad Judicial creada satisfactoriamente !!');
        
    }
    public function edit($id){

       $unidad =  UnidadJudicial::find($id);
       $this->unidad_id = $unidad->id; // id que viene al momento de presonar edit en el form unidad_id esta declarada al inicio y se utilizara en el metodo update
       $this->provincia= $unidad->provincia;
       $this->ciudad= $unidad->ciudad;
       $this->direccion= $unidad->direccion;
       $this->unidadjudicial= $unidad->unidadjudicial;
       $this->materia= $unidad->materia;
       $this->telefono= $unidad->telefono;
        $this->view = 'edit';

    }

    public function update(){

        $this->validate(['provincia' => 'required', 'ciudad' => 'required'
        , 'direccion' => 'required', 'unidadjudicial' => 'required', 'materia' => 'required',
        'telefono' => 'required'
    ]);
        $unidad = UnidadJudicial::find($this->unidad_id);
        $unidad->update([
            'provincia' => $this->provincia,
            'ciudad' => $this->ciudad,
            'direccion' => $this->direccion,
            'unidadjudicial' => $this->unidadjudicial,
            'materia' => $this->materia,
            'telefono' => $this->telefono
        ]);

        $this->default();
        return back()->with('success','Unidad Judicial editada satisfactoriamente !!');


    }

    public function destroy($id){

        UnidadJudicial::destroy($id);
        return back()->with('success','Unidad Judicial eliminada satisfactoriamente !!');

    }

    public function default(){  // compartamiento inicial de los elementos del form o sea en blanco 

        $this->provincia= "";
        $this->ciudad="";
        $this->direccion= "";
        $this->unidadjudicial= "";
        $this->materia= "";
        $this->telefono= "";
        $this->view= 'create';
    }
}
