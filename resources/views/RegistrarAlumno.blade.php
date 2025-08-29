@extends('master')
@section('titulo') <h1>Registrar alumno </h1>@stop


@section('contenido')

<form action=" {{ url('/guardarAlumno') }}" method="POST">
   <!-- larabel inyecta un token para validar origen y destino -->
    @csrf
    <div class="form-group mb-4">
        <label for="">Nombre:</label>
        <input type="text" class="form-control" name="nombre" required>
    </div>
    <div class="form-group mb-4">
        <label for="">Número de control:</label>
        <input type="text" class="form-control" name="numero_control" required>
    </div>
    <div class="form-group mb-4">
        <label for="">Fecha de nacimiento:</label>
        <input type="date" class="form-control" name="fecha_nacimiento" required>
    </div>
    <div class="form-group mb-4">
        <label for="">Sexo:</label>
        <select name="sexo" class="form-control">
            <option value="" selected>Selecciona una opción</option>
            <option value="0" selected>Femenino</option>
            <option value="1" selected>Masculino</option>
            <option value="2" selected>Otro</option>
        </select>
    </div>
    <div class="form-group mb-4">
        <label for="">Especialidad:</label>
        <select name="especialidad" class="form-control">
            <option value="" selected>Selecciona una opción</option>
            <option value="PROGRAMACIÓN" selected>Programación</option>
            <option value="CONTABILIDAD" selected>Contabilidad</option>
            <option value="ALIMENTOS" selected>Preparación de alimentos</option>
        </select>
    </div>
    <div>
            <input type="submit" class="btn btn-primary">
            <a href="{{ url('/alumnos') }}" class="btn btn-danger">Regresar</a>
    </div>
@stop