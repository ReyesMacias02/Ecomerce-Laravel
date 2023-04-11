<?php

namespace App\Http\Controllers;
use App\Http\Requests\PostCategoriaRequest;
use App\Models\Categoria;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;


class Cateforia extends Controller
{
    //Metodo de visualizar el listado de libros
    public function index(){
        $posts=Categoria::get();
        return view('categoria',['posts'=>$posts]);
    }
    public function show( $categoria){
        $products = Categoria::where('id', $categoria)->get();
   
        return response()->json($products);
    }

    //Metodo para guardar un nuevo libro 
    public function store(PostCategoriaRequest $request)
    {
        
        Categoria::create($request->validated());
        return response()->json(['mensaje' => 'Categoria creada sastifactoriamente']);

    }
     //Metodo para observar los libros
     public function create(Categoria $categoria)
     {
        $datos = $categoria::all();
        return response()->json($datos);
        
     }
     //Metodo para eliminar un dato de la BD
     public function destroy($id)
     {
    
         $campo = Categoria::findOrFail($id);
       
         $products = Product::where('category_id',  $id)->get();
          $responseSize = $products->count();
         for ($i=0; $i <$responseSize ; $i++) { 
            Storage::delete('public/imagenes'."/".$products[$i]->nombre);
            $image_path = public_path() . '/imagenes/' . $products[$i]->nombre; // obtener la ruta completa de la imagen

        if (file_exists($image_path)) { // verificar si el archivo existe
            unlink($image_path); // eliminar el archivo
           
        }
         }
        $campo->delete();
     
       return response()->json([ 'mensaje' => 'El campo ha sido eliminado correctamente.']);
    //return response()->json($responseSize) ;
    }
}
