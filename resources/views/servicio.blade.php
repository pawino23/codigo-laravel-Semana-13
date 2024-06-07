@extends('layout')

@section('title', 'Servicio')

@section('content')
    <h1>Servicio:</h1>
    <h2>{{ $servicio->titulo }}</h2>
    <div class="container">
        <p>{{ $servicio->descripcion }}</p>
    </div>
@endsection