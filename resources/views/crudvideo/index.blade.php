@extends('adminlte::page')
@section('title','Sistema Elearning')

@section('content_header')
    <h1>MOSTRAR TODOS LOS REGISTROS DE VIDEO</h1>
@stop

@section('content')
<p>Bienvenido</p>
<a href="/dash/crudvideo/create" class="btn btn-warning">Crear</a>

<table id="videos" class="table table-dark table-striped mt-4">
<thead>
    <tr>
        <th scope="col">ID </th>
        <th scope="col">Nombre</th>
        <th scope="col">Descripcion</th>
        <th scope="col">Url</th>
        <th scope="col">Imagen</th>
        <th scope="col">Acciones</th>
    </tr>
</thead>
<tbody>
    @foreach($Videos as $video)
    <tr>
        <td>{{$video->id}}</td>
        <td>{{$video->nombre}}</td>
        <td>{{$video->descripcion}}</td>
        <td><a href="{{$video->url}}">{{$video->url}}</a></td>
        <td>
            <img style="border-radius:5px; align-content:center" src="/images/{{$video->imagen}}" width="15%" ></td>
        <td>
            <form action="{{route('crudvideo.destroy',$video->id)}}" method="POST" class="formEliminar">
            <a href="/dash/crudvideo/{{$video->id}}/edit" class="btn btn-info">Editar</a>
            @csrf
            @method ('DELETE')
            <button type="submit" class="btn btn-danger">Borrar</button>
            </form>
        </td>
    </tr>
    @endforeach
</tbody>
</table>
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap5.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css"rel="stylesheet">
@stop 

@section('js')
<script> console.log('hi!');</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap5.min.js"></script>

<script>
   $(document).ready(function() {
    $('#videos').DataTable({
        "lengthMenu":[[5,10,50,-1],[5,10,50,"All"]]
    });
} );
</script>

@stop