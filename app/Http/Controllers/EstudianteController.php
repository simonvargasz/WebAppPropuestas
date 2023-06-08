<?php

namespace App\Http\Controllers;

use App\Models\Estudiante;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Propuesta;

class EstudianteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {

        $estudiantes = Estudiante::all();
        return view('admin/estudiantes', compact('estudiantes'));
    }

    public function showForum()
    {
        $estudiantes = Estudiante::all();
        return view('student/create', compact('estudiantes'));
    }

    public function showEstudiante($rut)
    {
        $estudiante = Estudiante::find($rut);
        return view('admin/estudiante', compact('estudiante'));
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Estudiante $estudiante)
    {
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$rut)
    {
        $estudiante = Estudiante::find($rut);


        DB::table('estudiantes')
            ->where('rut', $estudiante->rut)
            ->update(['nombre' => $request->nombre, 'apellido' => $request->apellido, 'email' => $request->email]);  
        


        
        return redirect()->route('admin.estudiantes');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Estudiante $estudiante)
    {
        //
    }
}
