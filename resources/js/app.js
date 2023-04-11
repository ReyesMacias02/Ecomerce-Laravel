import './bootstrap';
import {VueElement, createApp} from "vue"
import  App  from '../src/App.vue';
import Perfil from '../src/Perfil.vue'
import Cart from '../src/Cart.vue'
import Header from '../src/components/Header.vue'
import Navbar from '../src/components/Navbar.vue'
import SvgIcon from "vue3-icon";
import Search from '../src/components/Search.vue'
import Carrusel from '../src/components/Carrusel.vue'
import Card from '../src/components/Card.vue'
import Categoria from '../src/Categoria.vue'
import Products from '../src/Products.vue'
import Footer from '../src/components/Footer.vue'

const app = createApp();
app.component("svg-icon", SvgIcon);
createApp(App).mount("#app")
createApp(Perfil).mount("#perfil")
createApp(Cart).mount("#cart")
createApp(Header).mount("#header")
createApp(Navbar).mount("#navbar")
createApp(Search).mount("#search")
app.component('footer',Footer)
app.component('carrusel', Carrusel)
createApp(Card).mount("#card")
createApp(Categoria).mount("#categoria")
createApp(Products).mount("#products")