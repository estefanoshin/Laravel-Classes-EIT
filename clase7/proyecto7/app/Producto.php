<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    //
    protected $table = 'productos';
    protected $primaryKey = 'cod_producto';
    protected $fillable = [ 'cod_categoria', 'nombre', 'precio', 'stock' ];

    public $timestamps = false;
}
