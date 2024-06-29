@extends('layouts.master')

@section('title', 'Contacto')

@section('content')
    <h1>Contacto</h1>
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('contacto.store') }}" method="POST">
        @csrf
        <div>
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" value="{{ old('nombre') }}" required>
        </div>
        <div>
            <label for="correo">Correo Electrónico:</label>
            <input type="email" id="correo" name="correo" value="{{ old('correo') }}" required>
        </div>
        <div>
            <label for="asunto">Asunto:</label>
            <input type="text" id="asunto" name="asunto" value="{{ old('asunto') }}" required>
        </div>
        <div>
            <label for="mensaje">Mensaje:</label>
            <textarea id="mensaje" name="mensaje" required>{{ old('mensaje') }}</textarea>
        </div>
        <div>
            <button type="submit">Enviar</button>
        </div>
    </form>
@endsection
