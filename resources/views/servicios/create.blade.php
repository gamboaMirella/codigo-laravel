@extends('layouts.master')

@section('title', 'Crear Servicio')

@section('content')
    <h1>Crear Servicio</h1>
    <!--errors: variable que automaticamente almacena los errores de la ultima solicitud-->
    @if ($errors->any()) <!--Verifica si hay algun error de validacion-->
        <div>
            <ul>
                @foreach ($errors->all() as $error) <!--all: metodo que devuelve todos los errores en forma de lista-->
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    <!--action: define la url mediante la que se enviaran los datos
    post: define el metodo post, utilizado para enviar datos al servidor   -->
    <form action="{{ route('servicios.store') }}" method="POST"> 
        @csrf <!--Crea un token oculto de seguridad para el formulario, para prevenir ataques CSRF-->
        <div>
            <label for="titulo">Título:</label>
            <input type="text" id="titulo" name="titulo" value="{{ old('titulo') }}"> <!--old: mantener el valor anterior, en caso de error de validacion-->
        </div>
        <div>
            <label for="descripcion">Descripción:</label>
            <textarea id="descripcion" name="descripcion">{{ old('descripcion') }}</textarea>
        </div>
        <div>
            <button type="submit">Crear</button>
        </div>
    </form>
@endsection
