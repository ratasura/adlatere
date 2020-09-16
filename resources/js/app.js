

require('./bootstrap');

window.Vue = require('vue');



Vue.component('example-component', require('./components/ExampleComponent.vue').default);



const app = new Vue({
    el: '#app',
    created: function(){
        this.getPersonas();
    },
    data: {
        personas: [],
        errors: [],
        fillPersona: {'id': '', 'tipoDocumento':'','valorDocumento':'','nombres':'',
        'email':'', 'direccion':'', 'telefonoDomicilio':'', 'telefonoCelular':'',
        'tipoPersona':'', 'nombreComercial':'','representanteLegal':'','estadoPersona':''
    },
        newtipoDocumento: '',
        newvalorDocumento: '',
        newnombres : '',
        newemail: '',
        newdireccion: '',
        newtelefonoDomicilio: '',
        newtelefonoCelular: '',
        newtipoPersona: '', 
        newnombreComercial: '',
        newrepresentanteLegal: '',
        newestadoPersona: 0 // por defecto 0 es activa 1 es desactiva 

    },
    methods: {
        getPersonas: function(){
            var urlPerssonas = 'personas';
            axios.get(urlPerssonas).then(response=>{
                this.personas = response.data               
                
            });
        },

        editPersona : function (persona){
            this.fillPersona.id = persona.id;
            this.fillPersona.tipoDocumento = persona.tipoDocumento;
            this.fillPersona.valorDocumento = persona.valorDocumento;
            this.fillPersona.nombres = persona.nombres;
            this.fillPersona.email = persona.email;
            this.fillPersona.direccion =  persona.direccion;
            this.fillPersona.telefonoDomicilio = persona.telefonoDomicilio;
            this.fillPersona.telefonoCelular = persona.telefonoCelular;
            this.fillPersona.tipoPersona = persona.tipoPersona;
            this.fillPersona.nombreComercial = persona.nombreComercial;
            this.fillPersona.representanteLegal =  persona.representanteLegal;
            this.fillPersona.estadoPersona = 0;

            $('#edit').modal('show');

        },

        updatePersona(id){
            var url = 'personas/' + id;
            
            axios.put(url, this.fillPersona).then(response => {
                this.getPersonas();
                this.fillPersona = {'id': '', 'tipoDocumento':'','valorDocumento':'','nombres':'',
                'email':'', 'direccion':'', 'telefonoDomicilio':'', 'telefonoCelular':'',
                'tipoPersona':'', 'nombreComercial':'','representanteLegal':'','estadoPersona':''};
                this.errors= [];
                $('#edit').modal('hide');
                toastr.success('Actualizado  correctamente');
                }).catch(error => {
                //this.errors = error.response.data;
                toastr.error('Ha ocurrido un error, active los erorres (admin)');
            });
        },

        deletePersonas: function(persona){
            //alert("eliminar " + persona.nombres);
            var url = 'personas/'+persona.id;
            axios.delete(url).then(response =>{
                this.getPersonas();
                toastr.warning('Eliminado correctamente');
            });
        },

        createPersona: function(){
            var url = 'personas';              
            
            if (this.newtipoPersona==='Natural') {
                this.newnombreComercial = 'no';
                this.newrepresentanteLegal = 'no';
            }
            axios.post(url, {
                tipoDocumento: this.newtipoDocumento,
                valorDocumento: this.newvalorDocumento,
                nombres: this.newnombres,
                email: this.newemail,
                direccion: this.newdireccion,
                telefonoDomicilio: this.newtelefonoDomicilio,
                telefonoCelular: this.newtelefonoCelular,
                tipoPersona: this.newtipoPersona,
                nombreComercial: this.newnombreComercial,
                representanteLegal: this.newrepresentanteLegal,
                estadoPersona: this.newestadoPersona

            }).then(response => {
                this.getPersonas();
                this.newtipoDocumento = '',
                this.newvalorDocumento = '',
                this.newnombres  = '',
                this.newemail = '',
               this.newdireccion = '',
                this.newtelefonoDomicilio = '',
                this.newtelefonoCelular = '',
                this.newtipoPersona = '',
                this.newnombreComercial = '',
                this.newrepresentanteLegal = '',
                this.newestadoPersona = 0,
                this.errors= [];
                $('#create').modal('hide');
                toastr.success('Perosna creada correctamente');

            }).catch(error => {
                //this.errors = error.response.data
                toastr.error('Ocurrió un error, revise los campos');
            });
        }


    },
});
