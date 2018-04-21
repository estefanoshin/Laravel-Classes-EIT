<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controladorHola extends Controller
{
    //
		public function index(){
			return view('welcome');
		}

	public function hola($parametro=''){
		return 'hola desde el controlador '.$parametro;
	}
}
