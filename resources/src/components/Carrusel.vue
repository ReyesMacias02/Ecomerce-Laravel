<template>
  <div >
    <div  v-for="categoria in category" :key="categoria.id" class="cabeza">
         <h1>{{categoria.nombre }}</h1>
    <a href=""><span>Ver màs</span></a>
    </div>
    <div class="carousel">
    <div class="carousel-inner" :style="{ transform: 'translateX(' + translateX + 'px)' }">
      <div v-for="imagen in imagenes" :key="imagen.id" class="carousel-item">
        <img  :src="`/imagenes/${imagen.nombre}`" :alt="imagen.nombre" class="carousel-image">
        <h3 class="carousel-caption">{{ imagen.nombre_product }}</h3>
      </div>
    </div>
    <button class="carousel-control left" @click="scrollLeft">&lt;</button>
    <button class="carousel-control right" @click="scrollRight">&gt;</button>
    <div class="carousel-dots">
      <button v-for="(image, index) in imagenes" :key="index" class="carousel-dot" @click="jumpTo(index)">{{ index + 1 }}</button>
   </div>
  </div>
    
  </div>
</template>

<script>
export default {
  name: "Carousel",

  props: {
    product: String,
    images: Array,
    categoria: String,
    width: {
      type: Number,
      default: 600,
    },
  },
  data() {
    return {
      translateX: 0,
      currentIndex: 0,
      imagenes: [],
      category:[]
    };
  },
  methods: {
    scrollLeft() {
      if (this.currentIndex === 0) {
        this.currentIndex = this.imagenes.length - 1;
      } else {
        this.currentIndex--;
      }
      this.translateX = -this.currentIndex * this.width;
    },
    scrollRight() {
      if (this.currentIndex === this.imagenes.length - 1) {
        this.currentIndex = 0;
      } else {
        this.currentIndex++;
      }
      this.translateX = -this.currentIndex * this.width;
    },
    jumpTo(index) {
      this.currentIndex = index;
      this.translateX = -this.currentIndex * this.width;
    },
    obtenerImagenes() {
      axios.get(`/Producto/${this.categoria}}}`)
      .then(response => {
        this.imagenes = response.data;
        console.log(this.imagenes.length)
      })
      .catch(error => {
        console.log(error);
      });
      axios.get(`/Categoria/${this.categoria}}}`)
        .then(response => {
            console.log(response)
          this.category = response.data;
        })
        .catch(error => {
          console.log(error);
        });
    }
  },
   
  mounted() {
    this.obtenerImagenes();
  
  }
};
</script>

<style>
.cabeza{

  margin-top: 20px;
   display: grid;
        grid-template-columns: repeat(2, minmax(0, 0.5fr));
}
.cabeza h1{
margin-right: 480px;

  margin-left: 90px;
 
 
}
.cabeza a{
  
  margin-left: -490px;
  font-size: 22px;
  margin-top: 30px;
  display: flex;
  float: left;
  text-decoration: none;
  color: #eb9408;
  font-weight: bold;
}
.carousel {
  position: relative;
  width: 100%;
  height: 400px;
  overflow: hidden;
}

.carousel-inner {
  position: relative;
  width: fit-content;
  height: 100%;
  display: flex;
  transition: transform 0.5s ease;
}

.carousel-item {
  position: relative;
  width: 100%;
  height: 100%;
  display: flex;
  justify-content: center;
  align-items: center;
}

.carousel-image {
  max-width: 100%;
  max-height: 100%;
  object-fit: contain;
}

.carousel-caption {
  position: absolute;
  bottom: 0;
  left: 0;
  width: 100%;
  padding: 10px;
  font-size: 1.2rem;
  font-weight: bold;
  text-align: center;
  background-color: rgba(255, 255, 255, 0.8);
}

.carousel-control {
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  padding: 10px;
  font-size: 2rem;
  color: white;
  background-color: rgba(0, 0, 0, 0.5);
  border: none;
  cursor: pointer;
  z-index: 1;
}

.carousel-control.left {
  left: 0;
}

.carousel-control.right {
  right: 0;
}

.carousel-dots {
  position: absolute;
  bottom: 10px;
  left: 50%;
  transform: translateX
  (-50%);
display: flex;
justify-content: center;
align-items: center;
}

.carousel-dot {
width: 10px;
height: 10px;
border-radius: 50%;
background-color: white;
border: none;
cursor: pointer;
margin: 0 5px;
transition: background-color 0.3s ease;
}

.carousel-dot:hover,
.carousel-dot.active {
background-color: rgba(255, 255, 255, 0.5);
}
</style>