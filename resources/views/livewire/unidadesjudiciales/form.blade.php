
     @if (session()->has('message'))
     <div class="alert alert-success">
         {{ session('message') }}
     </div>
    @endif
    <div class="form-row">
      <div class="form-group col-md-6">
        <label >Provincia</label>
        <input type="text" class="form-control" wire:model="provincia">
        @error('provincia') <span> {{$message}} </span> @enderror
      </div>
      <div class="form-group col-md-6">
        <label >Ciudad</label>
        <input type="text" class="form-control" wire:model="ciudad">
        @error('ciudad') <span> {{$message}} </span> @enderror
      </div>
    </div>
    <div class="form-group">
      <label >Dirección</label>
      <input type="text" class="form-control"  wire:model="direccion">
      @error('direccion') <span> {{$message}} </span> @enderror
    </div>
    <div class="form-group">
        <label >Unidad Judicial</label>
        <input type="text" class="form-control"  wire:model="unidadjudicial">
        @error('unidadjudicial') <span> {{$message}} </span> @enderror
      </div>
      <div class="form-group">
        <label >Materia</label>
        <input type="text" class="form-control"  wire:model="materia">
        @error('materia') <span> {{$message}} </span> @enderror
      </div>
      <div class="form-group">
        <label >Teléfono</label>
        <input type="text" class="form-control"  wire:model="telefono">
        @error('telefono') <span> {{$message}} </span> @enderror
      </div>
  