<?php

namespace App\Http\Controllers;

use App\Models\Profesor;
use Illuminate\Http\Request;
use App\Models\Propuesta;
use App\Models\ProfesorPropuesta;
use App\Models\Estudiante;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ProfesorController extends Controller
{

    public function index()
    {

        $estudiantes = Estudiante::where('rut', '21152225-9')->first();
        $propuestas = Propuesta::orderBy('fecha', 'desc')->get();
        return view('profesor/forum',compact('propuestas','estudiantes'))->with('propuestas', $propuestas);
    }

    public function show($id)
    {
        $listProfesores = Profesor::all();
        $propuestas = Propuesta::find($id);
        $profesorPropuestas = ProfesorPropuesta::where('propuesta_id', $id)->get();
        $profesores = ProfesorPropuesta::where($profesorPropuestas->pluck('profesor_rut'));
        return view('profesor/proposal',compact('propuestas','profesorPropuestas','profesores','listProfesores'));
    }

    public function create(Request $request)
    {
        

        $profesorPropuesta = new ProfesorPropuesta();

        $profesorPropuesta->profesor_rut = $request->profesor_rut;
        $profesorPropuesta->propuesta_id = $request->propuesta_id;
        $profesorPropuesta->comentario = $request->comentario;
        $profesorPropuesta->fecha = Carbon::now();
        $profesorPropuesta->hora = Carbon::now();

        $profesorPropuesta->save();

        return redirect()->back();

    }
    public function showProfesores(){
        $profesores = Profesor::all();
        return view('admin/profesores',compact('profesores'));
    }
    public function showProfesor($rut){
        $profesor = Profesor::where('rut',$rut)->first();
        return view('admin/profesor',compact('profesor'));
    }
    public function update(Request $request, $rut){

        DB::table('profesores')->where('rut',$rut)->update([
            'nombre' => $request->nombre,
            'apellido' => $request->apellido,
        ]);
        return redirect()->route('admin.profesores');
    }

    public function createProfesor(Request $request){
        $profesor = new Profesor();
        $profesor->rut = $request->rut;
        $profesor->nombre = $request->nombre;
        $profesor->apellido = $request->apellido;
        $profesor->save();
        return redirect()->route('admin.profesores');
    }
}
