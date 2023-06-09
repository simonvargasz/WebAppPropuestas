<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PropuestaController;
use App\Http\Controllers\ProfesorController;
use App\Http\Controllers\EstudianteController;
use App\Http\Controllers\ProfesorPropuestaController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


//Home
Route::get('/', [PropuestaController::class, 'index'])->name('home.index');

//Gestion 

//Administrador
Route::get('/admin',function() {return view('admin/index');})->name('admin.index');

Route::get('/admin/estudiantes', [EstudianteController::class, 'show'])->name('admin.estudiantes');
Route::get('/admin/estudiante/{rut}', [EstudianteController::class, 'showEstudiante'])->name('admin.verEstudiante');
Route::put('/admin/estudiante/{rut}/actualizar', [EstudianteController::class, 'update'])->name('admin.updateEstudiante');
Route::post('/admin/estudiante/crear', [EstudianteController::class, 'createEstudiante'])->name('admin.crearEstudiante');

Route::get('/admin/estado_de_propuestas', [PropuestaController::class, 'showEstados'])->name('admin.forum');
Route::put('/admin/propuesta/{id}/actualizar', [PropuestaController::class, 'update'])->name('admin.updatePropuesta');

Route::get('/admin/profesores', [ProfesorController::class, 'showProfesores'])->name('admin.profesores');
Route::get('/admin/profesor/{rut}', [ProfesorController::class, 'showProfesor'])->name('admin.verProfesor');
Route::put('/admin/profesor/{rut}/actualizar', [ProfesorController::class, 'update'])->name('admin.updateProfesor');
Route::post('/admin/profesor/crear', [ProfesorController::class, 'createProfesor'])->name('admin.crearProfesor');


//Profesores
Route::get('/propuestas', [ProfesorController::class, 'index'])->name('profesor.forum');
Route::get('/revision_de_propuesta/{id}/fecha={fecha}', [ProfesorController::class, 'show'])->name('revision.show');
//Comentarios
//crear
Route::post('/revision_de_propuesta/send', [ProfesorController::class, 'create'])->name('revision.create');
//eliminar
Route::delete('/revision_de_propuesta/destroy/{comentario}', [ProfesorPropuestaController::class, 'destroy'])->name('profesorPropuesta.destroy')->middleware('web');;


//Estudiantes
Route::get('/propuesta/{id}/fecha={fecha}', [PropuestaController::class, 'show'])->name('propuestas.show');
Route::get('/foro', [PropuestaController::class, 'forum'])->name('propuestas.forum');
Route::get('/crear', [EstudianteController::class, 'showForum'])->name('propuestas.create');
Route::post('/crear', [PropuestaController::class, 'store'])->name('propuestas.store');
