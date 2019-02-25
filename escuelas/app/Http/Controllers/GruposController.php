<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class GruposController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    
    
    public function index()
    {
    	$grupos = DB::table('grupos')->get();
    	return view('grupos.index', array("grupos" => $grupos));
        //return view('grupo');
    }

    public function ViewGuardarGrupo($id){
        if ($id === '0') {
            return view('grupos.guardar-grupo', array('grupo' => $id));
        }else{
                $grupo = DB::table('grupos')->where('id_grupo', $id)->first();
                return view('grupos.guardar-grupo', array('grupo' => $grupo));
             }   
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nombreGrupo' => 'required|alpha'
        ]);
        
        $grupos = DB::table('grupos')->insert(array(
        	'nombre_grupo' => $request->input('nombreGrupo')
        ));

        return redirect()->action('GruposController@index')->with('status','Grupo creado con exito');
        // The blog post is valid...
    }

    public function destroy($id)
    {
        $grupoTD = DB::table('grupos')->where('id_grupo', $id)->delete();
        return redirect()->action('GruposController@index')->with('status','Grupo borrado con exito');
    }

    public function update($id, Request $request)
    {
        $grupoTD = DB::table('grupos')->where('id_grupo', $id)->update(array(
            'nombre_grupo' => $request->input('nombreGrupo')
        ));

        return redirect()->action('GruposController@index')->with('status','Grupo actualizado con exito');
    }



}
