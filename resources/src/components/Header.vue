<template>
    <div class="header">
       <div id="navbar" class="nav">
            <navbar></navbar>
        </div>
        <div class="img">
            <a title="Logo" href="#"> <img src="/images/logo-ecomerce.png" class="img-responsive" ></a>
            
       
        </div>
       
     <div id="search" style="margin-left: -250px; margin-right: -200px; margin-top: 15px;">
        <search></search>
     </div>
 <div class="perfil-logo">
    <a href="#perfil"> <i class="pi pi-user" ref="#" style="font-size: 2.5rem; color:white;float: right;margin-right: 15px;"></i>
  </a>
    </div>
 <div class="cart">
    <a href="#carrito">
          <i class="pi pi-shopping-cart" style="font-size: 2.5rem; color:white;float: left;margin-left: 15px;"></i>
    </a>
    </div>
    </div>
    
</template>

<script setup>
const title = "laravel title using Vuae"
</script>
<style scoped>

.header{
   background: rgb(72, 66, 66);
   display: grid;
        grid-template-columns: repeat(5, minmax(0, 0.5fr));
   
}
.nav{

    margin-right: 90px;
    
}
.img{
    
    margin-left: -140px;
    margin-right: 140px;
}
.img-responsive{
   height: 80px;
   width: 80px;
   float: left;
   
}
.perfil-logo{

    margin-top: 20px;
float: right;

margin-right: -240px;
margin-left: 250px;
   
}
.cart{
    
    margin-top: 20px;
    float: left;
    margin-left: 260px;
}
@media (max-width: 600px) {
 .header{
    background-color: aquamarine;
    display: grid;
    
 }
 .img-responsive{
    height: 50px;
    width: 50px;
    margin-left: 150px;
    float: left;
 }
 
}

</style>
