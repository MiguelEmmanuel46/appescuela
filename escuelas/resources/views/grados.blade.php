@extends('layouts.app')

@section('content')
<div class="container">
    <form action="{{ url('/grados') }}" method="POST">
        {{ csrf_field() }}
        <label class="form-control-label" for="nombreGrado">Ingresa el nombre del grado: 
            <input type="number" class="form-inline" name="nombreGrado" id="nombreGrado">
        </label><br>
        <input type="submit" value="Registrar" class="btn btn-outline-primary">
    </form>
<hr>
<h1>Grupos registrados</h1>
    @foreach( $grados as $grado )
        <span>ID: {{ $grado->id_grado }}, Nombre: {{ $grado->nombre_grado }} </span><br>
    @endforeach

</div>
@endsection
