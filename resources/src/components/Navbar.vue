<template>

  <div class="dropdown">
    <div style="">
      <div style=" ">
        <span class="pi pi-bars" style="font-size: 2.5rem; color:white; 
        margin-top: 15px;"></span>
      </div>
      <div style="">
         <span style="font-size:24px; color: white;">Categorias</span>
  
      </div>
     </div>
    
  <div class="dropdown-content">
    <ul style="list-style: none; float: left; margin: none;">
      <li>Celulares</li>
      <li>Laptop</li>
      <li>Hogar</li>
    </ul>
  </div>
</div>
</template>

<script>
import 'primeicons/primeicons.css';

</script>

<style>
.dropdown {
  position: float;
  
 background-color: rgb(72, 77, 77);
  
  margin-left: 80px;
  margin-right: 80px;
  border-radius:5px;

}
.dropdown:hover{
  background-color:  rgb(39, 42, 42);
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  padding: 12px 16px;
  z-index: 1;
}
.dropdown-content ul li{
  font-size: 25px;
  margin-left: -30px;
}
.dropdown:hover .dropdown-content {
  display: block;
  text-align: start;
}
@media (max-width: 600px) {
  .dropdown {
  position: float;
  
 background-color: rgb(72, 77, 77);
  
  margin-left: 0px;
  margin-right: 0px;
  border-radius:5px;

}
}
</style>