

require('./bootstrap');

window.Vue = require('vue');



Vue.component('example-component', require('./components/ExampleComponent.vue').default);



const app = new Vue({
    el: '#app',
    created: function(){
        this.getPersonas();
    },
    data: {
        personas: []
    },
    methods: {
        getPersonas: function(){
            var urlPerssonas = 'personas';
            axios.get(urlPerssonas).then(response=>{
                this.personas = response.data
            });
        },

        deletePersonas: function(persona){
            //alert("eliminar " + persona.nombres);
            var url = 'personas/'+persona.id;
            axios.delete(url).then(response =>{
                this.getPersonas();
            });
        }

    },
});
