<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;
use Illuminate\Http\Request;
use App\productos;
use App\Categoria;
use DB;

class productosController extends Controller
{
    //
    public function listado(){
        $productos=productos::getListadoProductos();
        return view('productos.listado',compact('productos'));
    }

    public function create(){
        $listado=Categoria::getListadoCategorias();
        return view('form.alta', ['categorias'=>$listado]);
    }

    public function store(Request $request){
        $nombre = $request->nombre;
        $cod_categoria = $request->cod_categoria;
        $precio = $request->precio;
        $stock = $request->stock;

        DB::table('productos')->insert( [ 'nombre'=>$nombre, 'cod_categoria'=>$cod_categoria, 'precio'=>$precio, 'stock'=>$stock ] );
        return redirect('/productos');
    }

    public function destroy($id){
        DB::table('productos')->where( 'cod_producto', '=', $id )->delete();
        return redirect('/productos');
    }

    
}
