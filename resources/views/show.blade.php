@extends('layout')

@section('title', 'Detalle del Servicio')

@section('content')
    <div class="container mt-4">
        <div class="card">
            <div class="card-header">
                <h2 class="card-title">{{ $servicio->titulo }}</h2>
            </div>
            <div class="card-body">
                @if ($servicio->image)
                    <img src="{{ asset('storage/' . $servicio->image) }}" alt="{{ $servicio->titulo }}" class="card-img-top" style="max-width: 100%; height: auto;">
                @else
                    <p>No hay imagen disponible</p>
                @endif
                <p class="card-text mt-3">{{ $servicio->descripcion }}</p>
            </div>
            @auth
                <div class="card-footer d-flex justify-content-between">
                    <a href="{{ route('servicios.edit', $servicio) }}" class="btn btn-warning">Editar</a>
                    <form action="{{ route('servicios.destroy', $servicio) }}" method="POST" onsubmit="return confirm('¿Está seguro de que desea eliminar este servicio?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                </div>
            @endauth
        </div>
    </div>
@endsection