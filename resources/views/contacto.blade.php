@extends('layout')

@section('title', 'Contacto')

@section('content')
    <div class="container mt-4">
        <h2>Contacto</h2>
        <form action="{{ route('contacto.store') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" id="nombre" placeholder="Nombre" class="form-control" value="{{ old('nombre') }}">
                {{ $errors->first('nombre') }}
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" placeholder="Email" class="form-control" value="{{ old('email') }}">
                {{ $errors->first('email') }}
            </div>
            <div class="form-group">
                <label for="asunto">Asunto</label>
                <input type="text" name="asunto" id="asunto" placeholder="Asunto" class="form-control" value="{{ old('asunto') }}">
                {{ $errors->first('asunto') }}
            </div>
            <div class="form-group">
                <label for="mensaje">Mensaje</label>
                <textarea name="mensaje" id="mensaje" cols="30" rows="5" placeholder="Mensaje" class="form-control"  value="{{ old('mensaje') }}"></textarea>
                {{ $errors->first('mensaje') }}
            </div>
            <div class="form-group text-center">
                <button type="submit" class="btn btn-primary">Enviar</button>
                <button type="reset" class="btn btn-secondary">Cancelar</button>
            </div>
        </form>
    </div>
@endsection