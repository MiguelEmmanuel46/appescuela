<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class GradosController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    
    
    public function index()
    {
    	$grados = DB::table('grados')->get();
    	return view('grados', array("grados" => $grados));
        //return view('grados');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nombreGrado' => 'required|numeric|max:6'
        ]);
        
        $grado = DB::table('grados')->insert(array(
        	'nombre_grado' => $request->input('nombreGrado')
        ));

        return redirect()->action('GradosController@index');
        // The blog post is valid...
    }

    


}
