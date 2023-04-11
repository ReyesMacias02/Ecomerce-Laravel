<?php

use App\Http\Controllers\Cateforia;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/articulos',function(){
    return("articulos");
});
Route::resource('Categoria',Cateforia::class,[
    'names'=>'categoria',
    'parameters'=>['Categoria'=>'categroia']
]);
Route::resource('Producto',ProductController::class,[
    'names'=>'producto',
    'parameters'=>['Producto'=>'producto']
]);