<?php

namespace App;

use DB;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    //
    public static function getListadoCategorias(){
        $categorias = DB::table('categorias')->get();
        return $categorias;
    }
}
