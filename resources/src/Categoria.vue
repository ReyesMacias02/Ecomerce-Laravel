<template>
  <form enctype="multipart/form-data" method="POST" @submit.prevent="enviarFormulario">

    <label for="">
    Categoria:
    <br>
    <input type="text"  v-model="nombre" >
    <br>
          
</label>
<br>
<label for="">
    Descripcion:
    <br>
    <input type="text"  v-model="descripcion">
    <br>
   
</label>

<br>
<button type="submit"> enviar</button>
  </form>

  <br>
  <div>
    <table>
      <thead>
        <tr>
          <th>Nombre</th>
          <th>Descripción</th>
          <th>Acciones</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="dato in datos" :key="dato.id">
          <td>{{ dato.nombre }}</td>
          <td>{{ dato.descripcion }}</td>
          <td>
            
            <button @click="eliminarDato(dato.id)">Eliminar</button>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</template>

<script>
import axios from 'axios';

export default {
  data() {
    return {
      nombre: '',
      descripcion: '',
      datos: []
    };
  },
  mounted() {
      axios.get('/Categoria/create')
        .then(response => {
            console.log(response)
          this.datos = response.data;
        })
        .catch(error => {
          console.log(error);
        });
    },
  methods: {
    enviarFormulario() {
      axios.defaults.headers.common['X-CSRF-TOKEN'] = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
    
      axios.post('/Categoria', {
        nombre: this.nombre,
        descripcion: this.descripcion
      })
      .then(response => {
        console.log(response);
       alert(response.data.mensaje);
       location. reload()
      })
      .catch(error => {
        console.log(error);
      });
    },
    eliminarDato(id) {
        axios.delete('/Categoria/'+ id)
          .then(response => {
            console.log(response.data)
                this.datos = this.datos.filter(dato => dato.id !== id);
          })
          .catch(error => {
            console.log(error);
          });
      }
  }

  
  };
</script>

<style>

</style>