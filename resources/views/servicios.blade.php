@extends('layout')

@section('title', 'Servicios')

@section('content')
    <div class="container mt-4">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h2>Listado de Servicios</h2>
            @auth
                <a href="{{ route('servicios.create') }}" class="btn btn-primary">Nuevo Servicio</a>
            @endauth
        </div>

        <div class="servicios-container">
            <table class="table table-striped">
                @if($servicios->count())
                    @foreach($servicios as $servicio)
                        <tr>
                            <td><a href="{{ route('servicios.show', $servicio->id) }}">{{ $servicio->titulo }}</a></td>
                            <td class="text-right">
                                <a href="{{ route('servicios.edit', $servicio) }}" class="btn btn-warning btn-sm">Editar</a>
                                <form action="{{ route('servicios.destroy', $servicio) }}" method="POST" style="display:inline;" onsubmit="return confirm('¿Está seguro de que desea eliminar este servicio?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan="2">No hay servicios que mostrar</td>
                    </tr>
                @endif
            </table>
        </div>

        <div class="pagination justify-content-center">
            {{ $servicios->links() }}
        </div>
    </div>
@endsection