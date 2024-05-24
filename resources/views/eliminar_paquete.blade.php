@extends('partials.master')
@include('partials.menu')

<h1>Eliminar Paquete</h1>

<!-- Mostrar los detalles del paquete a eliminar -->
<p>Nombre: {{ $package->name }}</p>
<p>Descripción: {{ $package->description }}</p>
<p>Imagen:</p>
<img src="{{ $package->image }}" alt="{{ $package->name }}">

<!-- Formulario para confirmar la eliminación -->
<form method="POST" action="{{ route('eliminar_paquete', ['id' => $package->id]) }}">
    @csrf
    @method('DELETE')
    <button type="submit">Eliminar</button>
</form>
