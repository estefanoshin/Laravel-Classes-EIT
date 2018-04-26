<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;
use Illuminate\Http\Request;
use App\Producto;
use App\Categoria;
use DB;

class ProductController extends Controller
{
  public function listado(){
      $productos = Producto::getListadoProductos();
      $categorias = Categoria::getListadoCategorias();
      return view('productos.listado',compact('productos', 'categorias'));
  }

  public function create(){
      $listado = Categoria::getListadoCategorias();
      $productos = new Producto();
      return view('form.alta', ['categorias'=>$listado, 'productos'=>$productos]);
  }

  public function store(Request $request){

      $request->validate([
          'nombre'=>'required|max:250',
          'cod_categoria'=>'required|integer',
          'precio'=>'integer',
          'stock'=>'integer',
      ]);

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

  public function edit($id)
  {
      //
      $listado=Categoria::getListadoCategorias();
      $productos = DB::table('productos')->where( 'cod_producto', '=', $id)->first();
      return view('form.alta', ['categorias'=>$listado, 'productos'=>$productos]);
  }

  public function update(Request $request, $id)
  {
      //
  }
}
