@extends('partials.master')
@include('partials.menu')

@foreach($menu as $m)
<div class="card" style="width: 18rem;">
    <img src="..." class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">{{$m->name}}</h5>
      <p class="card-text">{{$m->description}}</p>
      <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
  </div>
  Hola
@endforeach