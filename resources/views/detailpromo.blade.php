@extends('partials.master')
@include('partials.menu')

@foreach($packages as $p)
<div class="card" style="width: 18rem;">
    <img src="{{ asset('storage/' . $p->image) }}" class="card-img-top">
    <div class="card-body">
      <h5 class="card-title">{{$p->name}}</h5>
      <p class="card-text">{{$p->description}}</p>
      <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
  </div>
  Hola
@endforeach