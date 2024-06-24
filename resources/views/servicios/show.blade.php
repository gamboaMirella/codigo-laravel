@extends('layouts.master')

@section('title', 'Detalle del Servicio')

@section('content')
    <h1>Detalle del Servicio</h1>

    <div>
        <h2>{{ $servicio->titulo }}</h2>
        <p>{{ $servicio->descripcion }}</p>
    </div>

    <a href="{{ route('servicios.index') }}">Volver a la lista de servicios</a>
@endsection
