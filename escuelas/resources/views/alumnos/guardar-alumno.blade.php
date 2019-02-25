@extends('layouts.app')

@section('content')
<div class="container">

@if($grupo === '0')
<h1>Crear grupo</h1>
@else
<h1>Actualizar grupo</h1>
@endif


	<form action="{{ $grupo === '0' ? url('/grupos/guardar-grupos') : route('grupos.update', $grupo->id_grupo)  }}" method="POST">
		@if($grupo === '0')
		@else
		@method('PUT')
		@endif
	    {{ csrf_field() }}
	    <label class="form-control-label" for="nombreGrupo">Ingresa el nombre del grupo: 
	        <input type="text" class="form-inline" name="nombreGrupo" id="nombreGrupo"
	        value="{{ $grupo === '0' ? '' : $grupo->nombre_grupo}}">
	        
	    </label><br>
	    <input type="submit" value="Registrar" class="btn btn-outline-primary">
	</form>
</div>
@endsection


