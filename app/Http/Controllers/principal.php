<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\gestion;

class principal extends Controller
{
    public function index (){
    	
    	$gestion = App\gestion::where('id', 1)
               ->orderBy('name', 'desc')
               ->take(1)
               ->get();

    	$tmp = 1;
      $usuario = Auth::user()->name;
        if( $tmp == 1 ){
	    	return view ("proyecto",
	    		 ['name' => 'Samantha']);//se reenderizacion de la vista que se desea 
        }       
    }

}
