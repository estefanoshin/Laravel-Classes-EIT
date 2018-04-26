<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Producto extends Model
{
  public static function getListadoProductos(){
      $productos = DB::table('productos')->get();
      //var_dump($productos);
      return $productos;
  }
}
