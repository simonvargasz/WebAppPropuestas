<?php

namespace App\Http\Controllers;

use App\Models\Propuesta;
use App\Models\ProfesorPropuesta;
use App\Models\Estudiante;
use App\Models\Profesor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;

class PropuestaController extends Controller
{

    // - Vista de foro
    public function forum()
    {
        $estudiante = Estudiante::where('rut', '21152225-9')->first();
        $propuestas = Propuesta::orderBy('fecha', 'desc')->get();
        return view('student/forum',compact('propuestas','estudiante'))->with('propuestas', $propuestas);
    }

    // - Vista de creacion
    public function store(Request $request)
    {
        $estudiante_rut = $request->input('estudiante_rut');
        $documento = $request->file('documento');
        $rutaArchivo = $documento->store('public/propuestas');

        $urlDescarga = Storage::url($rutaArchivo);

        DB::table('propuestas')->insert([
            'estudiante_rut' => $estudiante_rut,
            'documento' => $urlDescarga,
            'fecha' => Carbon::now(),
        ]);

        session()->flash('success', 'Propuesta creada correctamente');
        return redirect()->back();
    }

    // - Vista de propuesta
    public function show($id)
    {   
        $propuestas = Propuesta::find($id);
        $profesorPropuestas = ProfesorPropuesta::where('propuesta_id', $id)->get();
        $profesores = ProfesorPropuesta::where($profesorPropuestas->pluck('profesor_rut'));
        return view('student/proposal',compact('propuestas','profesorPropuestas','profesores'));
    }
    // -  Vista General
    public function index()
    {
        $estudiante = Estudiante::where('rut', '21152225-9')->first();
        $propuestas = Propuesta::orderBy('fecha', 'desc')->get();
        return view('home/index',compact('propuestas','estudiante'))->with('propuestas', $propuestas);
    }
    public function admin()
    {
        return view('admin/index');
    }
    
    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Propuesta $propuesta)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        
        $propuesta = Propuesta::find($id);
        DB::table('propuestas')->where('id', $id)->update([
            'estado' => $request->input('estado'),
        ]);
        return redirect()->back();

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Propuesta $propuesta)
    {
        //
    }
}
