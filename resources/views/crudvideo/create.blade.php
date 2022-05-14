@extends('adminlte::page')
@section('title','Dashboard')

@section('content_header')
    <h1>CREAR TODOS LOS REGISTROS DE VIDEO</h1>
@stop

@section('content')
<p>welcome a este bello admin</p>
<p>Bienvenido</p>
<a href="/dash/crudvideo" class="btn btn-warning">Crear</a>

<form action="/dash/crudvideo" method="POST" enctype="multipart/form-data">
@csrf
<div class="mb-3">
    <label for="" class="form-label">Nombre</label>
    <input id="nombre" name="nombre" type="text" class="form-control" tabindex="1">

</div>
<div class="mb-3">
    <label for="" class="form-label">Descripcion</label>
    <input id="descripcion" name="descripcion" type="text" class="form-control" tabindex="2">

</div>
<div class="mb-3">
    <label for="" class="form-label">Url</label>
    <input id="url" name="url" type="text" class="form-control" tabindex="3">

</div>
<div class="mb-3">
    <img id="imagen" style="max-height:300px">
    <p>Seleccione la imagen</p>
    <input id="imagen" name="imagen" type="file" class="hidden" >

</div>
<a href="/dash/crudvideo" class="btn btn-secondary" tabindex="5">Cancelar</a>
<button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
</form>

@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop 

@section('js')
<script> console.log('hi!');</script>
@stop