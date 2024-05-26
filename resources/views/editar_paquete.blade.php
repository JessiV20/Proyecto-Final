@extends('partials.master')
@include('partials.menu')

<h1>Editar Paquete</h1>

<form method="POST" action="{{ route('actualizar_paquete', ['id' => $package->id]) }}" enctype="multipart/form-data">
    @csrf
    <input type="text" name="name" value="{{ $package->name }}" placeholder="Nombre" required>
    <input type="text" name="description" value="{{ $package->description }}" placeholder="Descripción" required>
    <input type="file" name="image">
    <button type="submit">Actualizar</button>
</form>
