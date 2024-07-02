<!-- resources/views/contacto.blade.php -->
@extends('layouts.master')

@section('title', 'Contacto')

@section('content')
    <h2>Contacto</h2>

    <!-- Mostrar todos los errores de validación en la parte superior del formulario -->
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            @ul>
        </div>
    @endif

    <form action="{{ route('contacto.store') }}" method="post">
        @csrf
        <div>
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" placeholder="Nombre" class="form-control" value="{{ old('nombre') }}" required>
            <!-- Mostrar error específico para el campo nombre -->
            @if($errors->has('nombre'))
                <div class="alert alert-danger">{{ $errors->first('nombre') }}</div>
            @endif
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" placeholder="Email" class="form-control" value="{{ old('email') }}" required>
            <!-- Mostrar error específico para el campo email -->
            @if($errors->has('email'))
                <div class="alert alert-danger">{{ $errors->first('email') }}</div>
            @endif
        </div>
        <div>
            <label for="asunto">Asunto:</label>
            <input type="text" id="asunto" name="asunto" placeholder="Asunto" class="form-control" value="{{ old('asunto') }}" required>
            <!-- Mostrar error específico para el campo asunto -->
            @if($errors->has('asunto'))
                <div class="alert alert-danger">{{ $errors->first('asunto') }}</div>
            @endif
        </div>
        <div>
            <label for="mensaje">Mensaje:</label>
            <textarea id="mensaje" name="mensaje" placeholder="Mensaje" class="form-control" rows="8" required>{{ old('mensaje') }}</textarea>
            <!-- Mostrar error específico para el campo mensaje -->
            @if($errors->has('mensaje'))
                <div class="alert alert-danger">{{ $errors->first('mensaje') }}</div>
            @endif
        </div>
        <button type="submit">Enviar</button>
    </form>
@endsection
