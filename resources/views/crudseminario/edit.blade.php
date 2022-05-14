@extends('adminlte::page')
@section('title','Dashboard')

@section('content_header')
    <h1>EDITAR TODOS LOS REGISTROS DE SEMINARIOS</h1>
@stop

@section('content')
<p>Bienvenido</p>
<form action="/dash/crudseminario/{{$Seminarios->id}}" method="POST">
@csrf
@method ('PUT')
<div class="mb-3">
    <label for="" class="form-label">Nombre</label>
    <input id="nombre" name="nombre" type="text" class="form-control" value="{{$Seminarios->nombre}}">

</div>
<div class="mb-3">
    <label for="" class="form-label">Descripcion</label>
    <input id="descripcion" name="descripcion" type="text" class="form-control" value="{{$Seminarios->descripcion}}">

</div>
<div class="mb-3">
    <label for="" class="form-label">Url</label>
    <input id="url" name="url" type="text" class="form-control" value="{{$Seminarios->url}}">

</div>
<div class="mb-3">
    <img id="imagen" style="max-height:300px">
    <p>Seleccione la imagen</p>
    <input id="imagen" name="imagen" type="file" class="hidden" >

</div>
<a href="/dash/crudseminario" class="btn btn-secondary" tabindex="5">Cancelar</a>
<button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
</form>

@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop 

@section('js')
<script> console.log('hi!');</script>
@stop