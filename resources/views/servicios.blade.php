@extends('layout')

@section('title', 'Servicios')

@section('content')
    <div class="servicios-container">
        <h2>Servicios</h2>
        <table class="table table-striped">
            @if($servicios->count())
                @foreach($servicios as $servicio)
                    <tr>
                        <td><a href="{{ route('servicios.show', $servicio->id) }}">{{ $servicio->titulo }}</a></td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td colspan="4">No hay servicios que mostrar</td>
                </tr>
            @endif
        </table>
    </div>
    <div class="pagination-p">
        {{ $servicios->links() }}
    </div>
@endsection