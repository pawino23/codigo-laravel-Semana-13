@extends('layout')

@section('title', 'Detalle del Servicio')

@section('content')
    <div class="container mt-4">
        <h1>Detalle del Servicio</h1>
        <table class="table">
            <tr>
                <td colspan="2">
                    {{ $servicio->titulo }}
                    <a href="{{ route('servicios.edit', $servicio) }}" class="btn btn-warning">Editar</a>
                </td>
                <td colspan="2" class="text-right">
                    <form action="{{ route('servicios.destroy', $servicio) }}" method="POST" onsubmit="return confirm('¿Está seguro de que desea eliminar este servicio?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                </td>
            </tr>
        </table>
    </div>
@endsection