@extends('layouts.master')

@section('title', 'Servicios')

@section('content')
    <h1>Servicios</h1>
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <a href="{{ route('servicios.create') }}">Crear nuevo servicio</a>

    <table>
        @forelse ($servicios as $servicio)
            <tr>
                <td>{{ $servicio->titulo }}</td>
                <td>{{ $servicio->descripcion }}</td>
                <td><a href="{{ route('servicios.show', $servicio->id) }}"><button>Ver</button></a></td>
                <td><a href="{{ route('servicios.edit', $servicio->id) }}"><button>Editar</button></a></td>
                <td>
                    <form action="{{ route('servicios.destroy', $servicio->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('¿Estás seguro de que deseas eliminar este servicio?')">Eliminar</button>
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="5">No hay servicios disponibles</td>
            </tr>
        @endforelse
    </table>
@endsection
