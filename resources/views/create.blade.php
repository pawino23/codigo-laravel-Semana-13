@extends('layout')

@section('title', 'Crear Servicio')

@section('content')
<h2 class="mt-4">Crear nuevo servicio</h2>
<div class="container">
    @include('partials.validation-errors')
    <form action="{{ route('servicios.store') }}" method="post">
        @include('partials.form',['btnText' => 'Guardar'])
    </form>
</div>
@endsection
