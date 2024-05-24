@extends('partials.master')
@include('partials.menu')

<h1>Editar Paquete</h1>

<form method="POST" action="{{ route('actualizar_paquete', ['id' => $package->id]) }}">
    @csrf
    <!-- Campos para editar el paquete -->
    <input type="text" name="name" value="{{ $package->name }}" placeholder="Nombre">
    <input type="text" name="description" value="{{ $package->description }}" placeholder="Descripción">
    <input type="text" name="image" value="{{ $package->image }}" placeholder="URL de la imagen">
    <button type="submit">Actualizar</button>
</form>
