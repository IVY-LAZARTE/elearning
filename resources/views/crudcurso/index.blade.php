@extends('adminlte::page')
@section('title','Sistema Elearning')

@section('content_header')
    <h1>MOSTRAR TODOS LOS REGISTROS DE CURSOS</h1>
@stop

@section('content')
<p>Bienvenido</p>
<a href="/dash/crudcurso/create" class="btn btn-warning">Crear</a>

<table id="cursos" class="table table-dark table-striped shadow-lg mt-4" style="width:100% ;border-radius:8px">
<thead>
    <tr>
        <th scope="col">ID </th>
        <th scope="col">Nombre</th>
        <th scope="col">Descripcion</th>
        <th scope="col">Imagen</th>
        <th scope="col">Acciones</th>
    </tr>
</thead>
<tbody>
    @foreach($Cursos as $curso)
    <tr>
        <td>{{$curso->id}}</td>
        <td>{{$curso->nombre}}</td>
        <td>{{$curso->descripcion}}</td>
        <td>
            <img style="border-radius:5px; align-content:center" src="/images/{{$curso->imagen}}" width="15%" ></td>
        <td>
            <form action="{{route('crudcurso.destroy',$curso->id)}}" method="POST" class="formEliminar">
            <a href="/dash/crudcurso/{{$curso->id}}/edit" class="btn btn-info">Editar</a>
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
    $('#cursos').DataTable({
        "lengthMenu":[[5,10,50,-1],[5,10,50,"All"]]
    });
} );
</script>
@stop