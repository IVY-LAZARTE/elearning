@extends('adminlte::page')
@section('title','Dashboard')

@section('content_header')
    <h1>AGREGAR SEMINARIOS REALIZADOS</h1>
@stop

@section('content')
<p>BIENVENIDO</p>
<a href="/dash/crudseminario" class="btn btn-warning">Crear</a>

<form action="/dash/crudseminario" method="POST" enctype="multipart/form-data">
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
<a href="/dash/crudseminario" class="btn btn-secondary" tabindex="5">Cancelar</a>
<button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
</form>


@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop 

@section('js')
<script> console.log('hi!');</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
    $(document).ready(function(e) {
        $('#imagen').change(function(){
             let reader =new FileReader();
             reader.onlad= (e) => {
                     $('#imagen').attr('src',e.tarjet.result);
        
             }
            reader.readAsDataURL(this.files[0]);
            });
    });
    

</script>
@stop