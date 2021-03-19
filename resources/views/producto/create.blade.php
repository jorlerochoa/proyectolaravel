@extends('layout.base')

@section('contenido')
<h2>Crear Registros</h2>

<form action="/productostore" method="post">
  @csrf
    <div class="form-group"> <!-- Full Name -->
        <label for="producto_nombre" class="control-label">Nombre</label>
        <input type="text" class="form-control" id="producto_nombre" name="producto_nombre" placeholder="nombre">
    </div>

    <div class="form-group"> <!-- Street 1 -->
        <label for="producto_precio" class="control-label">Precio</label>
        <input type="text" class="form-control" id="producto_precio" name="producto_precio" placeholder="Precio">
    </div>


    <div class="form-group"> <!-- Submit Button -->
        <button type="submit" class="btn btn-primary">Guardar</button>
    </div>

</form>
@endsection
