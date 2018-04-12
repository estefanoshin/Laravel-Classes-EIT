<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class homeController extends Controller
{
    //
    private function find_individual_product($nombre){
    	return DB::table('productos')->select('*')->where( [[ 'nombre', 'REGEXP' , $nombre ]] )->get();
    }

    private function find_all_products(){
    	return DB::table('productos')->select('*')->get();
    }

    public function index(){
    	return view('welcome', ['name'=>'Laravel Controller']);
    }


    public function listado($nombre = null){

    	$nombre = $this->busqueda();

    	$productos = ( $nombre ) ? $this->find_individual_product($nombre) : $this->find_all_products();

    	return view('listado', ['productos'=>$productos]);
    }

    public function busqueda(){
    	if ( isset($_GET['busqueda']) ) {
    		return $_GET['busqueda'];
    	}
    }

}
