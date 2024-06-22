@extends('layout')

@section('title', 'Servicio')

@section('content')
    <div class="container mt-4">
        <h1>Servicio:</h1>
        <h2 class="servicio-title">{{ $servicio->titulo }}</h2>
        <div class="servicio-description">
            <p>{{ $servicio->descripcion }}</p>
        </div>
    </div>
@endsection