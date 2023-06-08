<?php

namespace App\Http\Controllers;

use App\Models\ProfesorPropuesta;
use App\Models\Propuesta;
use App\Models\Profesor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProfesorPropuestaController extends Controller
{
    public function destroy($comentario)
    {

        DB::table('profesor_propuesta')->where('comentario', $comentario)->delete();
    
        // Puedes agregar un mensaje de éxito en la sesión
        session()->flash('success', 'Registro eliminado exitosamente');
    
        return redirect()->back();
    }
    
}
