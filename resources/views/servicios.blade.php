@extends('layouts/master')

@section('title','Servicios')

@section('content')
    <h1>Servicios</h1>

    <tr>
        @foreach ($servicios as $servicio)
            <td>{{ $servicio->titulo }}<br>{{ $servicio->descripcion }}</td>
        @endforeach
    </tr>

@endsection