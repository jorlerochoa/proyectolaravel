@extends('layout.base')

@section('contenido')
<a href="/productos/create" class="btn btn-primary"> crear</a>
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
      <form action="/productodelete/{{$productos->producto_id}}" method="post">
      @csrf
      <td><a href="/productos/{{$productos->producto_id}}/edit" class="btn btn-info">Editar</a></td>
      <td><button type="submit" class="btn btn-danger">Borrar</button></td>
    </form>

    </tr>
    @endforeach
  </tbody>
</table>

@endsection
