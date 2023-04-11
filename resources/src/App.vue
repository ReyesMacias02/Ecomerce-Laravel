<template>
<div id="header">
    <header></header>

</div>
<div>
     <Carrusel categoria="1">
     
    </Carrusel >
    <Carrusel categoria="2">
     
    </Carrusel>

       
   
</div>
   
<div>
     <Footer></Footer>
</div> 






</template>

<script >
import Carrusel from '../src/components/Carrusel.vue'
import Footer from './components/Footer.vue';
const title = "laravel title using Vuae"
export default {
  components: {
    Carrusel ,
    Footer
  }
};
</script>
<style scoped>
div{
    text-align: center;
}
</style>

