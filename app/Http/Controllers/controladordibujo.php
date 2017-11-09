<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\dibujo;
use App\Http\Requests\dibujoRequest;

class controladordibujo extends Controller
{
	public function show ($id){
    	$dibujo = dibujo::find($id);
    	return view('show', compact('dibujo'));
    }    
    public function create (){
    	return view('crear');
    }
    public function store(dibujoRequest $request){
        
        $dibujo = new dibujo;
        $dibujo->nombre = $request->nombre;
        $dibujo->alto = $request->alto;
        $dibujo->ancho = $request->ancho;
        $dibujo->save();
        return redirect()->route('dibujo.index');
    }
    
	public function edit ($id){
    	$dibujo = dibujo::find($id);
    	return view('editar', compact('dibujo'));
    }
     public function update(dibujoRequest $request, $id){
        $dibujo= dibujo::find($id);
        $dibujo->nombre = $request->nombre;
        $dibujo->alto = $request->alto;
        $dibujo->ancho = $request->ancho;
        $dibujo->save();
    	$tabla = dibujo::orderby('id', 'DESC')->paginate();
        return view('tables', compact('tabla'));
    }
    public function index (){
    	$tabla = dibujo::orderby('id', 'DESC')->paginate();
    	return view('tables', compact('tabla'));
    }
    public function destroy ($id){
    	$dibujo = dibujo::find($id);
    	$dibujo->delete();
    	return back()->with('info', 'La imagen fue aliminada de la base de datos');
    }

}