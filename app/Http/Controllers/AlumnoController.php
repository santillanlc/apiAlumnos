<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Alumno;

class AlumnoController extends Controller
{
    public function consulta() {
        $nombre = "Dennis";
        $edad = 55;
        $numero_control="2342342";
        return view("ConsultaAlumnos", compact('nombre', 'edad', 'numero_control'));
    

    }
    //
    public function calcular() {
        $calificaciones[0]=8;
        $calificaciones[1]=4;
        $calificaciones[2]=8;
        $calificaciones[3]=3;
        $calificaciones[4]=8;
        $nombre="Luis";
        return view("Boleta",compact('nombre','calificaciones'));
    }

    public function getAlumnos() {
        $alumnos = Alumno::all();
        //Ordenar por id de manera descendente
        //$alumnos = Alumno::orderBy('id','desc')->get();
        //dd($alumnos); Este se usa para mostrar todas los valores
        return view("ConsultarAlumnos",compact('alumnos'));//compact es para enviarle variables a la vista
    }

    public function registrarAlumno() {
        return view('RegistrarAlumno');
    }

    public function guardarAlumno(Request $request) {
        $datos = $request->input();

        $alumno = new Alumno();
        $alumno->nombre=$datos["nombre"];
        $alumno->numero_control = $datos["numero_control"];
        $alumno->fecha_nacimiento = $datos["fecha_nacimiento"];
        $alumno->sexo = $datos["sexo"];
        $alumno->especialidad = $datos["especialidad"];
        $alumno->save();

        //Alumno::create($datos); *Esta instrucción equivale a las asignaciones anteriores

        return redirect('/alumnos');
    }

    public function eliminarAlumno($id) {
        $alumno = Alumno::find($id);
        $alumno->delete();

        return redirect('/alumnos');
    }

    public function editarAlumno($id) {
        $alumno = Alumno::find($id);
        return view('EditarAlumno', compact('alumno'));
    }

    public function actualizarAlumno($id, Request $request) {
        $alumno = Alumno::find($id);
        $datos = $request->input();

        $alumno->nombre=$datos["nombre"];
        $alumno->numero_control = $datos["numero_control"];
        $alumno->fecha_nacimiento = $datos["fecha_nacimiento"];
        $alumno->sexo = $datos["sexo"];
        $alumno->especialidad = $datos["especialidad"];
        $alumno->save();

        return redirect('/alumnos');
    }
}
