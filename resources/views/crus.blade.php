@extends('partials.master')
@include('partials.menu')

    
    <h1>Agregar, Modificar y Eliminar Paquete</h1>
    
    <!-- Agregar formulario para agregar/modificar paquete -->
    <form method="POST" action="{{ route('guardar_paquete') }}">
        @csrf
        <input type="text" name="name" placeholder="Nombre">
        <input type="text" name="description" placeholder="Descripción">
        <input type="text" name="image" placeholder="URL de la imagen">
        <button type="submit">Agregar</button>
    </form>
    
    
    <!-- Mostrar lista de paquetes -->
@foreach($packages as $package)
<div>
    <p>{{ $package->name }}</p>
    <p>{{ $package->description }}</p>
    <img src="{{ $package->image }}" alt="{{ $package->name }}">
    <a href="{{ route('editar_paquete', ['id' => $package->id]) }}">Editar</a>
    <a href="{{ route('eliminar_paquete', ['id' => $package->id]) }}">Eliminar</a>
</div>
@endforeach