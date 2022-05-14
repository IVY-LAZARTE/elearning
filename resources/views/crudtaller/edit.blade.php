@extends('adminlte::page')
@section('title','Dashboard')

@section('content_header')
    <h1>EDITAR TODOS LOS REGISTROS DE TALLERES</h1>
@stop

@section('content')
<p>Bienvenido</p>
<form action="/dash/crudtaller/{{$tallers->id}}" method="POST">
@csrf
@method ('PUT')
<div class="mb-3">
    <label for="" class="form-label">Nombre</label>
    <input id="nombre" name="nombre" type="text" class="form-control" value="{{$tallers->nombre}}">

</div>
<div class="mb-3">
    <label for="" class="form-label">Descripcion</label>
    <input id="descripcion" name="descripcion" type="text" class="form-control" value="{{$tallers->descripcion}}">

</div>
<div class="mb-3">
    <img id="imagen" style="max-height:300px">
    <p>Seleccione la imagen</p>
    <input id="imagen" name="imagen" type="file" class="hidden" >

</div>
<a href="/dash/crudtaller" class="btn btn-secondary" tabindex="5">Cancelar</a>
<button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
</form>



@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

@stop 

@section('js')
<script> console.log('hi!');</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

@stop