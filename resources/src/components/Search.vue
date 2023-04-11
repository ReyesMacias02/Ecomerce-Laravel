
<template>
 <!-- search bar right align -->
 <div class="search">
    <form action="#">
        <input type="text"
            placeholder=" Search Products"
            name="search">
        <button type="submit" class="submit">
            <i class="pi pi-search" style="font-size: 1.5rem"></i>
        </button>
    </form>
</div>
    
  </template>

<style>
/* styling search bar */
    .search input[type=text]{
        width:700px;
        height:50px;
        border-radius:20px 0px 0px 20px;
        border: none;
        font-size: 20px;
    }
         
    .search{
        float:right;
       
    }
         
    .search button{
        background-color: #eb9408;
        color: #f2f2f2;
        float: right;
        padding: 5px 10px;
        margin-right: 16px;
        border: none;
        border-radius:0px 20px 20px 0px;
        
    }
    .submit:after{
        background-color: #a6967d;
    }
    .search button:hover{
        background-color: #a6967d;
        color: #f2f2f2;
    }
    .search button i{
       
        margin: 10px;
    }
    @media (max-width: 600px) {
        .search input[type=text]{
        width:150px;
        height:50px;
        border-radius:20px 0px 0px 20px;
        border: none;
        font-size: 20px;
    }
    .search{
        float:right;
        margin-right: 50px;
       
    }
}
</style>