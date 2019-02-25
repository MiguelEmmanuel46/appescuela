@extends('layouts.app')

@section('content')
<div class="container">

@if(session('status'))
<div id="mensajeStatus">
    <h1>{{session('status')}}</h1>
</div>
@endif
<hr>

<h1>Alumnos</h1>
<table class="table table-bordered">
    <th>Matricula</th>
    <th>Nombre</th>
    <th>Grado</th>
    <th>Grupo</th>
    
    @foreach( $alumnos as $alumno )
    <tr>
        <td>{{ $alumno->matricula }}</td>
        <td>{{ $alumno->nombre_alumno }}</td>
        <td>{{ $alumno->nombre_grado }}</td>
        <td>{{ $alumno->nombre_grupo}}</td>
    </tr>   
    @endforeach
<hr>
</div>
@endsection
