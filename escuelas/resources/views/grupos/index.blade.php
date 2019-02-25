@extends('layouts.app')

@section('content')
<div class="container">
<a href="{{url('/grupos/guardar-grupos/0')}}">Crear Grupo</a>
<hr>
@if(session('status'))
<div id="mensajeStatus">
    <h1>{{session('status')}}</h1>
</div>
@endif
<hr>

<h1>Grupos registrados</h1>
<table class="table table-bordered">
    <th>Id</th>
    <th>Nombre</th>
    <th>Accion 1</th>
    <th>Accion 2</th>
    
    @foreach( $grupos as $grupo )
    <tr>
        <td>{{ $grupo->id_grupo }}</td>
        <td>{{ $grupo->nombre_grupo }}</td>
        <td><form action="{{ route('grupos.destroy', $grupo->id_grupo) }}" method="POST">@method('DELETE')@csrf<input type="submit" value="Borrar" class="btn btn-danger"/></form></td>
        <td><a href="{{url('/grupos/guardar-grupos/'.$grupo->id_grupo)}}" class="btn btn-secondary">Editar</a></td>
    </tr>   
    @endforeach
<hr>
</div>
@endsection
