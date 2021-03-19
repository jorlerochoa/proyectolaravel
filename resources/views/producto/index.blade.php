@extends('layout.base')
 
@section('contenido')
<a href="{{ action('ProductoController@create') }}" class="btn btn-primary"> crear</a>
  @csrf
<table class="table table-striped mt-4">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th>nombre</th>
      <th>Precio</th>
      <th></th>
      <th></th>
    </t>
  </thead>
  <tbody>
    @foreach($producto as $productos)
    <tr>
      <td>{{$productos->producto_id}}</td>
      <td>{{$productos->producto_nombre}}</td>
      <td>{{$productos->producto_precio}}</td>

      <td><a href="{{ action('ProductoController@edit', ['producto_id' =>$productos->producto_id]) }}" class="btn btn-info">Editar</a></td>
        <td><a class="btn btn-danger">Borrar</a></td>
    </tr>
    @endforeach
  </tbody>
</table>

@endsection
