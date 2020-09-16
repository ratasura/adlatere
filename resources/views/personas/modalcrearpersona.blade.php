<form method="POST" v-on:submit.prevent="createPersona">
  <div class="modal fade"  id="create">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Nueva Persona</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">          
              <div class="form-row">
                <div class="form-group col-md-2">
                  <label for="tipoDocumento">Tipo </label>
                   <select name="tipoDocumento" class="form-control" v-model="newtipoDocumento">
                    <option selected>Cédula</option>
                    <option>RUC</option>
                  </select>
                  <span v-for="error in errors" class="text-danger">@{{error}}</span>
                </div>  
                <div class="form-group col-md-3">
                  <label for="valorDocumento">Número </label>
                  <input type="text" class="form-control" name="valorDocumento"  v-model="newvalorDocumento">
                  <span v-for="error in errors" class="text-danger">@{{error}}</span>
                </div>  
                <div class="form-group col-md-7">
                  <label for="nombres">Nombre</label>
                  <input type="text" class="form-control" name="nombres"  v-model="newnombres">
                  <span v-for="error in errors" class="text-danger">@{{error}}</span>
                </div>       
              </div>     
              <div class="form-row">
                <div class="form-group col-md-5">
                  <label for="email">Correo </label>
                  <input type="text" class="form-control" name="email"  v-model="newemail">
                  <span v-for="error in errors" class="text-danger">@{{error}}</span>
                </div>
                <div class="form-group col-md-7">
                  <label for="direccion">Dirección </label>
                  <input type="text" class="form-control" name="direccion"  v-model="newdireccion">
                  <span v-for="error in errors" class="text-danger">@{{error}}</span>
                </div>
                
              </div>  
              <div class="form-row">
                <div class="form-group col-md-4">
                  <label for="telefonoDomicilio">Telf Casa</label>
                  <input type="text" class="form-control" name="telefonoDomicilio"  v-model="newtelefonoDomicilio">
                  <span v-for="error in errors" class="text-danger">@{{error}}</span>
                </div>
                <div class="form-group col-md-4">
                  <label for="telefonoCelular">Celular </label>
                  <input type="text" class="form-control" name="telefonoCelular"  v-model="newtelefonoCelular">
                  <span v-for="error in errors" class="text-danger">@{{error}}</span>
                </div>
                <div class="form-group col-md-4">
                  <label for="tipoPersona">Tipo Persona </label>
                   <select name="tipoPersona" class="form-control" v-model="newtipoPersona">
                    <option selected>Natural</option>
                    <option>Juridica</option>
                  </select>
                  <span v-for="error in errors" class="text-danger">@{{error}}</span>
                </div>
                </div>   
                <div v-if="newtipoPersona ==='Juridica'">
                  <div id="nombreComercial" class="form-group">
                    <label for="nombreComercial">Nombre Comercial</label>
                    <input type="text" class="form-control" id="nombreComercial" v-model="newnombreComercial">
                    <span v-for="error in errors" class="text-danger">@{{error}}</span>
                  </div>
                  <div id="repreentanteLegal" class="form-group">
                    <label for="representanteLegal">Representante Legal</label>
                    <input type="text" class="form-control" id="representanteLegal" v-model="newrepresentanteLegal">
                    <span v-for="error in errors" class="text-danger">@{{error}}</span>
                  </div>   
                </div>   
                      
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
            {{-- <button type="submit" class="btn btn-primary">Guardar</button> --}}
            <input type="submit" class="btn btn-primary" value="Guardar">
          </div>
        </div>
      </div>
    </div>
  </form>