<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Ecomerce</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="shortcut icon" href="/images/logo-ecomerce.png">
      
    </head>
    <body class="antialiased" style="margin: 0px">
       <div id="app">
<app></app>
<Carrusel>
     
</Carrusel>
       </div>

       @vite('resources/js/app.js')
    </body>
</html>
