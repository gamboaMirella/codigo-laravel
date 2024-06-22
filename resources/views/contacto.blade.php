@extends('layouts/master')

@section('title','Contacto')

@section('content')
    <h1>Contacto</h1>
    <form method="GET"> <!---->
        <div>
            <label for="nombres">Nombres: </label>
            <input type="text" id="nombres" name="names" placeholder="Ingrese sus nombres" required>
        </div>
        
        <div>
            <label for="apellidos">Apellidos: </label>
            <input type="text" id="apellidos" name="surnames" placeholder="Ingrese sus apellidos" required>
        </div>
        
        <div>
            <label for="correo">Correo electrónico: </label>
            <input type="email" id="correo" name="email" placeholder="Ingrese su correo electrónico" required>
        </div>
        
        <div>
            <label for="aceptacion">
                <input type="checkbox" id="aceptacion" name="acceptation" required>Aceptar términos y condiciones
            </label>
        </div>

        <div>
            <input type="submit" value="Enviar">
        </div>        
        
    </form>
@endsection