@extends('partials.master')
@include('partials.menu')



<h1>Agregar, Modificar y Eliminar Paquete</h1>
<br>

<!-- Agregar formulario para agregar/modificar paquete -->

<form class="row g-3"method="POST" action="{{ route('guardar_paquete') }}" enctype="multipart/form-data">
    @csrf
    <div class="col-md-4">
        <label for="name">Nombre:</label>
        <input  type="text" name="name" class="form-control" required>
    </div>
    <div class="col-md-4">
        <label for="descrption">Descripción:</label>
        <input type="text" name="description" class="form-control"  required>
    </div>
    <div class="col-md-4">
        <input type="file" name="image" class="form-control"  required>
    </div>
    </div>
        <div class="col-12">
            <button class="btn btn-primary" type="submit">Agregar</button>
          </div>
          <br>
          <br>
</form>
<br>
<br>
<br>
<!-- Mostrar lista de paquetes -->

@foreach($packages as $package)
<br>
<br>
    <div class="card" style="width: 18rem;">
        <p class="card-text">{{ $package->name }}</p>
        <p class="card-text">{{ $package->description }}</p>
        <img src="{{ asset('storage/' . $package->image) }}" alt="{{ $package->name }}" class="card-img-top">
        <a class="card-text" href="{{ route('editar_paquete', ['id' => $package->id]) }}">Editar</a>
        <a class="card-text" href="{{ route('eliminar_paquete', ['id' => $package->id]) }}">Eliminar</a>
    </div>
@endforeach