<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

class AlumnosController extends Controller
{

	/*
	| matricula     | int(11)
	| nombre_alumno | varchar(255)
	| id_grado      | int(10) unsigned
	| id_grupo      | int(10) unsigned
	*/
	public function __construct()
	{
	    $this->middleware('auth');
	}
	
	
	public function index()
	{
		$alumnos = DB::table('alumnos')->join('grados', 'alumnos.id_grado', '=', 'grados.id_grado')->join('grupos', 'alumnos.id_grupo', '=', 'grupos.id_grupo')->select('alumnos.matricula', 'alumnos.nombre_alumno', 'grados.nombre_grado', 'grupos.nombre_grupo')->get();

		return view('alumnos.index', array("alumnos" => $alumnos));
	}

	/*public function ViewGuardarAlumno($id){
	    if ($id === '0') {
	        return view('alumnos.guardar-grupo', array('grupo' => $id));
	    }else{
	            $grupo = DB::table('alumnos')->where('id_grupo', $id)->first();
	            return view('alumnos.guardar-grupo', array('grupo' => $grupo));
	         }   
	}

	public function store(Request $request)
	{
	    $validatedData = $request->validate([
	        'nombreGrupo' => 'required|alpha'
	    ]);
	    
	    $alumnos = DB::table('alumnos')->insert(array(
	    	'nombre_grupo' => $request->input('nombreGrupo')
	    ));

	    return redirect()->action('alumnosController@index')->with('status','Grupo creado con exito');
	    // The blog post is valid...
	}

	public function destroy($id)
	{
	    $grupoTD = DB::table('alumnos')->where('id_grupo', $id)->delete();
	    return redirect()->action('alumnosController@index')->with('status','Grupo borrado con exito');
	}

	public function update($id, Request $request)
	{
	    $grupoTD = DB::table('alumnos')->where('id_grupo', $id)->update(array(
	        'nombre_grupo' => $request->input('nombreGrupo')
	    ));

	    return redirect()->action('alumnosController@index')->with('status','Grupo actualizado con exito');
	}*/
}
