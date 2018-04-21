<?php

namespace App;

use DB;

class productos 
{

    public static function getListadoProductos(){
        $productos = DB::table('productos')->get();
        //var_dump($productos);
        return $productos;
    }
    
}
