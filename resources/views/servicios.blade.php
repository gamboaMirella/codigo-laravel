@extends('layouts/master')

@section('title','Servicios')

@section('content')
    <h1>Servicios</h1>

    <ul>
        @if($servicios)
            @foreach ($servicios as $servicio)
                <li>
                    {{$servicio['titulo']}}
                </li>
            @endforeach
        @else
            <li>No existe ningun servicio que mostrar</li>
            
        @endif
    </ul>

@endsection