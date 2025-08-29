<?php

use App\Http\Controllers\AlumnoController;
use Illuminate\Support\Facades\Route;
//La ruta '/' me va a regresar la vista welcome
Route::get('/', function () {
    return view('welcome');
});

Route::get('/consulta', [AlumnoController::class, 'consulta']);
Route::get('/calcularCalificacion', [AlumnoController::class, 'calcular']);
//Rutas de CRUD Alumno
Route::get('/alumnos',[AlumnoController::class,'getAlumnos']);
Route::get('/registrarAlumno',[AlumnoController::class,'registrarAlumno']);
Route::post('/guardarAlumno',[AlumnoController::class,'guardarAlumno']);
Route::get('/alumno/{id}', [AlumnoController::class, 'eliminarAlumno']);
Route::get('/editarAlumno/{id}', [AlumnoController::class,'editarAlumno']);
Route::post('/actualizarAlumno/{id}', [AlumnoController::class,'actualizarAlumno']);
//Fin del archivo