<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    public function index(){
        $posts=Product::get();
        return view('Products',['posts'=>$posts]);
    }
     //Metodo para observar los libros
     public function show(Request $request, $categoria){
        $products = Product::where('category_id', $categoria)->get();
       
            return response()->json($products);
    }

    public function store(Request $request)
{
    $request->validate([
        'imagen' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
    ]);

    //script para subir imagen
    $imagen = $request->file("imagen");
    $nombreArchivo = time() . '_' . $request->file('imagen')->getClientOriginalName();
    //$nombreimagen = Str::slug($request->nombre).".".$imagen->guessExtension();
    $ruta = public_path( 'imagenes'."/".$nombreArchivo  );
    //$rutaArchivo = Storage::putFileAs('public/imagenes', $request->file('imagen'), $nombreArchivo);
    //$imagen->move($ruta,$nombreimagen);
    copy($imagen->getRealPath(),$ruta);
    // Crear un registro en la base de datos con la información de la imagen
    $imagen = new Product();
    $imagen->nombre =  $nombreArchivo ;
    $imagen->ruta = $ruta;
    $imagen->nombre_product= $request->input('nombre_product');
    $imagen->category_id= $request->input('category_id');
    $imagen->save();
  
return response()->json([
    'mensaje' => 'El producto fue creado sastifactoriamente.'
]);
}
public function create(Product $categoria)
{
   $datos = $categoria::all();
   return response()->json($datos);
   
}
}
