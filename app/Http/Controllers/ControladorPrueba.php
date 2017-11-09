<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\gestion;
use Illuminate\Support\Facades\Auth;
class ControladorPrueba extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {            
        
            
        $tmp = 1;

        $gestion = DB::table('gestion')
                ->select(DB::raw('*'))
                ->get(); 
                 

        $gestion = DB::table('gestion')->first();

       if( $tmp == 1 ){
            return view ("proyecto",
                ["name" => "Carlos",
                 'apellido' => "Sanchez",
                 'gestion' => $gestion]);//se reenderizacion de la vista que se desea 
        }       
    }  

    /* Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    public function formStore(Request $request){

        $nombre = $request->input( 'varNombre' ); 
        $apellido = $request->input( 'varApellido' );         
        $cedula = $request->input( 'varCedula' ); 
        $telefono = $request->input( 'varTelefono' ); 
        $correo = $request->input( 'varCorreo' ); 

        echo "BIEN!";

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
