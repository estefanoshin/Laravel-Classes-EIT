<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Categoria extends Model
{
  //
  public static function getListadoCategorias(){
      $categorias = DB::table('categorias')->get();
      return $categorias;
  }
}
