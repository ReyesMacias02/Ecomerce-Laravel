<template>
    <div>
      <h1>Subir imagen</h1>
      <form @submit.prevent="subirImagen" enctype="multipart/form-data">
        <div>
          <label for="producto">Producto</label>
          <input type="text" id="producto" v-model="nombre_product" required>
        </div>
        <div>
          <label for="descripcion">Descripción</label>
          <select v-model="category_id">
    <option value="">Selecciona una categoría</option>
    <option v-for="categoria in categorias" :value="categoria.id" required>{{ categoria.nombre }}</option>
</select>
        
        </div>
        <div>
          <label for="imagen">Imagen</label>
          <input type="file" id="imagen" @change="onFileSelected" required>
        </div>
        <button type="submit">Subir imagen</button>
      </form>
    </div>
    <div>
    <h1>Imágenes subidas</h1>
    <table>
      <thead>
        <tr>
          <th>Producto</th>
          <th>Descripción</th>
          <th>Imagen</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="imagen in imagenes" :key="imagen.id">
          <td>{{ imagen.producto }}</td>
          <td>{{ imagen.ruta }}</td>
          <td><img :src="`/imagenes/${imagen.nombre}`" alt=""></td>
        </tr>
      </tbody>
    </table>
  </div>
  </template>

<script>
export default {
  data() {
    return {
        nombre_product: '',
        category_id:null,
      imagen: null,
      imagenes: [],
      categorias: [],
    };
  },
  methods: {
    onFileSelected(event) {
      this.imagen = event.target.files[0];
    },
    subirImagen() {
      let formData = new FormData();
      formData.append('imagen', this.imagen);
      formData.append('nombre_product', this.nombre_product);
      formData.append('category_id', this.category_id);
     
      axios.post('/Producto', formData, {
        headers: {
          'Content-Type': 'multipart/form-data'
        }
      })
      .then(response => {
       
        console.log(response.data);
      })
      .catch(error => {
        console.log(error);
      });
    },
    obtenerImagenes() {
      axios.get('/Producto/create')
      .then(response => {
        this.imagenes = response.data;
      })
      .catch(error => {
        console.log(error);
      });
    }
  },
  
  mounted() {
    this.obtenerImagenes();
    axios.get('/Categoria/create')
        .then(response => {
            console.log(response)
            this.categorias = response.data;
        })
        .catch(error => {
          console.log(error);
        });
  }
  
  
};
</script>

<style>

</style>